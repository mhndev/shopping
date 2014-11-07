<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class OrdersTableSeeder extends Seeder {

	public function run()
	{
		// $faker = Faker::create();

		// foreach(range(1, 10) as $index)
		// {
			Order::create(
				array('time'=>'2014-08-14 12:16:00' , 'sent'=>'0' , 'received'=>'1' , 'users_id'=>'6')
			);
//		}
	}

}