<?php

use Illuminate\Database\Seeder;

class Admins extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        DB::table('admins')->insert([
            ['id' => 1, 'name' => 'Nguyễn Văn Khánh', 'email' => 'khanh@gmail.com', 'phone' => '0987654321', 'password' => bcrypt('123456789'), 'address' => '18 trường chinh', 'image' => '','city'=>'Hà Nội','district'=>'Cầu Giấy','ward'=>'Nghĩa Tân'],
            ['id' => 2, 'name' => 'Nguyễn Văn Quân', 'email' => 'quan@gmail.com', 'phone' => '0987654322', 'password' => bcrypt('123456789'), 'address' => '18 giáp bát', 'image' => '','city'=>'Hà Nội','district'=>'Cầu Giấy','ward'=>'Nghĩa Tân'],
            ['id' => 3, 'name' => 'Nguyễn Quang Hà', 'email' => 'ha@gmail.com', 'phone' => '0987654323', 'password' => bcrypt('123456789'), 'address' => '18 láng hạ', 'image' => '','city'=>'Hà Nội','district'=>'Cầu Giấy','ward'=>'Nghĩa Tân'],
        ]);
    }
}
