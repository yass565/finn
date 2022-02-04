<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'entreprise_id' => null,
            'firstname' => 'Oussama',
            'lastname' => 'Elharmali',
            'email' => 'Oussama.elharmali@gmail.com',
            'profile' => 'avatar.jpg',
            'phone' => '0766986150',
            'address' => 'N62 Bouznika',
            'pin_code' => 878,
            'date_birth'=> date('1996/10/10'),
            'gender'=> 'Male',
            'status'=> 'Active',
            'email_verified_at' => date(now()),
            'password' => bcrypt('Oussama2022'),
        ]);

        // $users = factory(User::class, 5)->create();

    }
}
