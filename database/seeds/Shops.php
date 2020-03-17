<?php

use Illuminate\Database\Seeder;

class Shops extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->delete();
        DB::table('shops')->insert([
           ['id' => 1, 'code' => 'S12345678', 'name_shop' => 'Gia dụng Tiger', 'name' => 'Nguyễn Hoàng An', 'email' => 'an@gmail.com', 'password' => bcrypt('123456789'), 'phone' => '0987654321', 'address' => '11 hàng trống', 'image' =>'', 'id_city' =>1],
           ['id' => 1, 'code' => 'S12345679', 'name_shop' => 'Shop Hoàng Hà', 'name' => 'Nguyễn Hoàng Hà', 'email' => 'ha@gmail.com', 'password' => bcrypt('123456789'), 'phone' => '0987654322', 'address' => '11 hàng bài', 'image' =>'', 'id_city' =>2],
        ]);
    }
}
