<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            ['id' => 1, 'code' => 'U12345678', 'name' => 'Nguyễn Văn Khang', 'email' => 'khang@gmail.com', 'phone' => '0987654321', 'password' => bcrypt('123456789'), 'address' => '18 phạm văn đồng', 'image' => '','city'=>'Hà Nội','district'=>'Cầu Giấy','ward'=>'Nghĩa Đô'],
            ['id' => 2, 'code' => 'U12345679', 'name' => 'Nguyễn Thị Chi', 'email' => 'chi@gmail.com', 'phone' => '0987654322', 'password' => bcrypt('123456789'), 'address' => '18 trúc bạch', 'image' => '', 'city'=>'Hà Nội','district'=>'Cầu Giấy','ward'=>'Nghĩa Đô'],
            ['id' => 3, 'code' => 'U12345670', 'name' => 'Nguyễn Quỳnh Vân', 'email' => 'van@gmail.com', 'phone' => '0987654323', 'password' => bcrypt('123456789'), 'address' => '18 cổ nhuế', 'image' => '', 'city'=>'Hà Nội','district'=>'Cầu Giấy','ward'=>'Nghĩa Đô'],
        ]);
    }
}
