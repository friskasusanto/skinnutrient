<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use App\Model\Menu;
use App\Model\ProductJenis;

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

			$gudangRole = new Role();
			$gudangRole->name = "Gudang";
			$gudangRole->display_name = "Gudang";
			$gudangRole->save();

			$salesRole = new Role();
			$salesRole->name = "Sales";
			$salesRole->display_name = "Sales";
			$salesRole->save();

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

			$gudang = new User();
			$gudang->name = "Gudang Skinnutrient";
			$gudang->email = 'gudang@gmail.com';
			$gudang->password = bcrypt('password');
			$gudang->save();
			$gudang->attachRole($gudangRole);

			$sales = new User();
			$sales->name = "Salesp Skinnutrient";
			$sales->email = 'sales@gmail.com';
			$sales->password = bcrypt('password');
			$sales->save();
			$sales->attachRole($salesRole);

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

		// Jenis
			$jenis = new ProductJenis();
			$jenis->jenis = 'Serums';
			$jenis->status = 1;
			$jenis->save();

			$jenis = new ProductJenis();
			$jenis->jenis = 'Sanitiser';
			$jenis->status = 1;
			$jenis->save();

			$jenis = new ProductJenis();
			$jenis->jenis = 'Cleansers';
			$jenis->status = 1;
			$jenis->save();

			$jenis = new ProductJenis();
			$jenis->jenis = 'Toners';
			$jenis->status = 1;
			$jenis->save();

			$jenis = new ProductJenis();
			$jenis->jenis = 'Masks';
			$jenis->status = 1;
			$jenis->save();

			$jenis = new ProductJenis();
			$jenis->jenis = 'Moisturiser';
			$jenis->status = 1;
			$jenis->save();

			$jenis = new ProductJenis();
			$jenis->jenis = 'Body Care';
			$jenis->status = 1;
			$jenis->save();

			$jenis = new ProductJenis();
			$jenis->jenis = 'Gifts';
			$jenis->status = 1;
			$jenis->save();
    }
}

