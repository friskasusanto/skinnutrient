<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use App\Model\Menu;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //role 
	        $adminRole = new Role();
			$adminRole->name = "Admin";
			$adminRole->display_name = "Admin";
			$adminRole->save();

			$dropshiperRole = new Role();
			$dropshiperRole->name = "Dropshiper";
			$dropshiperRole->display_name = "Dropshiper";
			$dropshiperRole->save();

			$resellerRole = new Role();
			$resellerRole->name = "Reseller";
			$resellerRole->display_name = "Reseller";
			$resellerRole->save();

		// Membuat sample admin
			$admin = new User();
			$admin->name = 'Admin Skinnutrient';
			$admin->email = 'admin@gmail.com';
			$admin->password = bcrypt('password');
			$admin->save();
			$admin->attachRole($adminRole);

			$dropshiper = new User();
			$dropshiper->name = "Dropshiper Skinnutrient";
			$dropshiper->email = 'dropshiper@gmail.com';
			$dropshiper->password = bcrypt('password');
			$dropshiper->save();
			$dropshiper->attachRole($dropshiperRole);

			$reseller = new User();
			$reseller->name = "Reseller Skinnutrient";
			$reseller->email = 'reseller@gmail.com';
			$reseller->password = bcrypt('password');
			$reseller->save();
			$reseller->attachRole($resellerRole);

		// Menu
			$menu = new Menu();
			$menu->name = 'By Concern';
			$menu->status = 1;
			$menu->save();

			$menu = new Menu();
			$menu->name = 'By Category';
			$menu->status = 1;
			$menu->save();

			$menu = new Menu();
			$menu->name = 'By Range';
			$menu->status = 1;
			$menu->save();
    }
}
