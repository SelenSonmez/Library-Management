<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        UserType::create([
            'name' => 'staff'
        ]);

        User::create([
            'username' => 'staff',
            'password' => 'staff',
            'address' => 'staff',
            'mobile' => 1,
            'user_type_id' => 1,
        ]);

        UserType::create([
            'name' => 'admin'
        ]);

        User::create([
            'username' => 'admin',
            'password' => 'admin',
            'address' => 'admin',
            'mobile' => 2,
            'user_type_id' => 2,
        ]);

        UserType::create([
            'name' => 'user'
        ]);
        User::create([
            'username' => 'user',
            'password' => 'user',
            'address' => 'userAddress',
            'mobile' => 3,
            'user_type_id' => 3,
        ]);

        Book::create([
            'title' => 'Harry Potter',
            'author' => 'J.K Rowling',
            'year' => 2000,
            'description' => 'The main story arc concerns Harrys struggle against Lord Voldemort, a dark wizard who intends to become immortal, overthrow the wizard governing body known as the Ministry of Magic and subjugate all wizards and Muggles (non-magical people).',
            'image' => 'https://m.media-amazon.com/images/I/51DF6ZR8G7L._AC_SY780_.jpg',
            'isTaken' => 0,
        ]);

        Book::create([
            'title' => 'Animal Farm',
            'author' => 'George Orwell',
            'year' => 1870,
            'description' => 'It tells the story of a group of farm animals who rebel against their human farmer, hoping to create a society where the animals can be equal, free, and happy',
            'image' => 'https://static.faber.co.uk/wp-content/uploads/2021/09/Animal-Farm.jpg',
            'isTaken' => 0,
        ]);
        Book::create([
            'title' => 'Dune',
            'author' => 'Frank Herbert',
            'year' => 1965,
            'description' => 'It tells the story of young Paul Atreides, whose family accepts the stewardship of the planet Arrakis.',
            'image' => 'https://mir-s3-cdn-cf.behance.net/project_modules/fs/53123e79439115.5cc2d81b04ce1.jpg',
            'isTaken' => 0,
        ]);
        Book::create([
            'title' => 'Cirque Du Freak the Vampire\'s Assistant',
            'author' => 'Darren O\'Shaughnessy',
            'year' => 2000,
            'description' => 'Darren Shan was just an ordinary schoolboy until his visit to the Cirque Du Freak. Now, as he struggles with his new life as a Vampire\'s Assistant, he tries desperately to resist the one temptation that sickens him',
            'image' => 'https://laburnumhouse.co.uk/wp-content/uploads/products/THE20VAMPIRES20ASSISTANT114.jpg',
            'isTaken' => 0,
        ]);
    }
}
