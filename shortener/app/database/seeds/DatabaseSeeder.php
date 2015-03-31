<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserSeeder');
	}

}


// Criar Primeiro usuario com 

// class UserSeeder extends Seeder {
 
//     public function run()
//     {
//         $users = User::get();
 
//         if($users->count() == 0) {
//             User::create(array(
//                 'UserLogin' => 'plebeia',
//                 'UserPassword' => Hash::make('admin'),
//                 'UserName'  => 'Lorena Sá',
//                 'UserType'  => 'Administrator'
//             ));
//         }
//     }
 
// }
