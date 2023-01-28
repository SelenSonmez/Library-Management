<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BorrowedBook;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Ramsey\Uuid\Type\Integer;

class BookController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
    }
    public function index()
    {
    }

    public function insertBook(Request $request)
    {
        // $validated = $request->validate([
        //     'year' => 'required|numeric|digits:4'
        // ]);

        $book = $request->only([
            'title',
            'author',
            'year',
            'description',
            'image',
        ]);
        // dd($book);
        Book::create($book);
        return redirect('/authorized/list-books');
    }

    public function viewEnterBook()
    {
        return view('authorized.enter-book');
    }
    public function viewEdit($id)
    {
        $book = Book::find($id);

        return view('authorized.edit-book-details', ['book' => $book]);
    }
    public function updateBook(Request $request, $bookID)
    {
        $book = Book::find($bookID);
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->year = $request->input('year');
        $book->description = $request->input('description');
        $book->image = $request->input('image');
        //$book->title = $request->input('status');
        $book->save();
        $books = Book::all();
        return redirect('/authorized/list-books');
    }
    public function viewBookDetails($id)
    {
        $book = Book::find($id);
        return view::make('book-details')->with('book', $book);
    }
    public function requestBook($id)
    {
        // $text = "";
        // $now = Carbon::parse(now())->toDateString();

        $expire_date = Carbon::parse(request()->query('trip-start'))->toDateString();
        $book = Book::find($id);
        $now = Carbon::now()->toDateString();
        // if ($book->reservationDueDate < $now)  //due date has passed
        //     $book->isTaken = 0;

        if (!$book->isTaken && $expire_date >= $now) {
            $book->reservationDueDate = $expire_date;
            $updatedValues = [
                'reservationDueDate' => $book->reservationDueDate,
                'isTaken' => true
            ];
            $book->fill($updatedValues)->save();
            $this->insertBorrowedBook($id);
        } else {
            Session::flash('message', 'This date has already passed!');
            Session::flash('bookId', $id);
            Session::flash('alert-class', 'alert-danger');
        }
        return redirect('/user');
    }
    public function viewBorrowedBooks($text = '')
    {
        $text = $text ?? '';
        $processes = BorrowedBook::where('user_id', session('id'))->get();
        // $user = User::find($processes['user_id']);
        // $userID = $processes[0]['user_id'];
        $user = User::find(session('id'));
        $bookIDs = array();
        foreach ($processes as $data)
            array_push($bookIDs, $data['book_id']);
        $books = array();
        foreach ($bookIDs as $data) {
            $book = Book::find($data);
            $books[] = $book;
        }
        return view::make('user.borrowed-books')->with([
            'processes' => $processes,
            'books' => $books,
            'user' => $user,
            'text' => $text
        ]);
    }
    public function returnBook($book_id)
    {
        $borrowed_book = BorrowedBook::where('book_id', $book_id)->first();
        $updatedValues = [];
        $updatedValues = [
            'isTaken' => false,
            'reservationDueDate' => null
        ];
        $borrowed_book->book->fill($updatedValues)->save();
        $borrowed_book->delete();
        return redirect('/authorized/all-borrowed');
    }
    public function viewAllBorrowed()
    {
        $allBorrowed = BorrowedBook::all();
        // $user = User::find($processes['user_id']);
        // $userID = $processes[0]['user_id'];
        $bookIDs = array();
        foreach ($allBorrowed as $data)
            array_push($bookIDs, $data['book_id']);
        $books = array();
        foreach ($bookIDs as $data) {
            $book = Book::Find($data);
            array_push($books, $book);
        }
        $users = array();
        foreach ($allBorrowed as $data) {
            $user = User::Find($data['user_id']);
            array_push($users, $user);
        }
        return view::make('authorized.all-borrowed')->with([
            'borrowedBooks' => $allBorrowed,
            'books' => $books,
            'users' => $users
        ]);
    }
    public function insertBorrowedBook($bookID)
    {
        $userID = session('id');
        $book = BorrowedBook::create([
            'user_id' => $userID,
            'book_id' => $bookID
        ]);
        return $book;
        // BorrowedBook::insert($book);
    }
    //Not decided yet
    public function removeBook($id)
    {
        Book::where('id', $id)->delete();
        return redirect('/authorized/list-books');
    }
    public function calculateDebt()
    {
        $borrowedBooks = BorrowedBook::where('user_id', session('id'))->get();
        $diff = 0;
        $now = Carbon::now();
        foreach ($borrowedBooks as $borrowedBook) {
            $date = Carbon::parse($borrowedBook->book->reservationDueDate);
            if ($date < $now)  //due has passed
                $diff += $date->diffInDays($now);
        }
        $debt = $diff * 5;
        $text = "You have missed the deadlines total number of " . $diff . " days. Total debt is " . $debt;

        if ($debt == 0)
            $text = "You have no debt.";
        return $this->viewBorrowedBooks($text);
    }
}
