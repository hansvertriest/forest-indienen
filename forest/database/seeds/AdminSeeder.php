<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$user = new User();
		
		$user->name = getenv('ADMIN_NAME');
		$user->email = getenv('ADMIN_EMAIL');
		$user->password = bcrypt(getenv('ADMIN_PASS'));

        // bewaren
        $user->save();
    }
}
