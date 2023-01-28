<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BorrowedBook;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use function Ramsey\Uuid\v1;
use App\Models\UserType;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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
    public function doLogin(Request $request)
    {
        $inputs = $request->only([
            'login_button',
            'register_button',
            'name',
            'password',
        ]);
        $userID = $this->isLogin($inputs);
        session()->put('id', $userID); //TODO SESSIONDAN SILMEYİ UNUTMAAAAAA
        if (!$userID && !(isset($inputs['register_button'])))
            return redirect('/');

        if (isset($inputs['register_button']))
            return view('register');

        //get user type and view related page
        $type = UserType::find($userID)->name;
        $username = User::find($userID)->username;
        session()->put('username', $username);
        session()->put('user_type', $type);
        return redirect('/welcome');
    }
    public function main()
    {
        return view('main');
    }
    public function userWelcomePage()
    {
        return view('user-welcome');
    }
    public function insertUser(Request $request)
    {
        $id = session('id');
        $userTemp = UserType::find($id);
        if (empty($userTemp->user_type))
            $userType = 'user';
        else
            $userType = 'staff';
        $user = User::create([
            'username' => $request['username'],
            'address' => $request['address'],
            'password' => Hash::make($request->newPassword),
            'mobile' => $request['mobile'],
            'user_type_id' => UserType::create([
                'name' => $userType
            ])->id
        ]);
        return view('welcome');
    }
    public function isLogin($inputs)
    {
        // $user = User::where('username', $inputs['name']);
        $password = User::where('username', $inputs['name'])->first()->password;
        $user = User::where('username', $inputs['name'])->where('password', $password)->first();

        return ($user === null) ? false : $user->id;
    }
    public function listStaff($inputs)
    {
        $staff = User::where('userType')->first();

        dd($staff);
    }
    public function removeStaff($id)
    {
        $user = User::find($id);
        User::where('id', $id)->delete();
        UserType::where('id', $id)->delete();
        if (!is_null($user->book_id))
            Book::where('id', $id)->delete();
        return redirect('/viewStaffList');
    }
    public function viewRegister()
    {
        return view('register');
    }
    public function viewStaffPage()
    {
        $books = Book::all();
        return view('authorized.list-books', ['books' => $books]);
    }
    public function viewUserPage()
    {
        $books = Book::all();
        return view('user.user-new', ['books' => $books]);
    }
    public function viewStaffList()
    {
        $staffID = UserType::where('name', 'staff')->get('id');
        $staffs = User::find($staffID);
        return view('authorized.list-staffs', ['staffs' => $staffs]);
    }
    public function loginPage()
    {
        return view('welcome');
    }
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function debtList()
    {
        return view('user.debt');
    }
    public function profileInfo()
    {
        $user = User::find(session('id'))->first();
        $books = BorrowedBook::where('user_id', session('id'))->first();
        $book_count  = 0;
        foreach ($books as $book) {
            $book_count++;
        }
        $borrowed_books = (is_null($books)) ? 0 : $book_count;
        return View::make('profile')->with([
            'user' => $user,
            'books' => $borrowed_books,
        ]);
    }
    public function profile()
    {
        return view('profile');
    }
    public function debts()
    {
        $borrowed_books = BorrowedBook::where('user_id', session('id'))->get();
        $now = Carbon::now();
        $diff = 0;
        $dates = [];
        $user = User::find(session('id'));
        $books_passed[] = [];
        // $books = [];
        foreach ($borrowed_books as $borrowed_book) {
            $date = Carbon::parse($borrowed_book->book->reservationDueDate);
            if ($date < $now) {  //due has passed
                $diff = $date->diffInDays($now);
                array_push($dates, $diff);
                array_push($books_passed, $borrowed_book);
                // $books_passed[] = $borrowed_book;
            }
        }
        // return view('debt', ['debts' => $dates]);
        return View::make('user.debt')->with([
            'debts' => $dates,
            'books_passed' => $books_passed,
            'user' => $user,
        ]);
    }
}
