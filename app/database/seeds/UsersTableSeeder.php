<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// $faker = Faker::create();

		// foreach(range(1, 10) as $index)
		// {
			User::create(
				array('name'=>'majid' ,'family'=> 'hosseini' ,'signdate'=> '' ,'lastvisit'=> '' ,'cardnum'=> '6221061063905970' ,'phone'=> '33167332' ,'mobile'=> '09124971706' ,'email'=> 'majid8911303@gmail.com' , 'address'=>'tehran Piruzi aeme athar babyee 14' , 'password'=>'123')
			);
		//}
	}

}