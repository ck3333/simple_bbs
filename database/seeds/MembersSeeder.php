<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Member;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'sato',
            'email' => 'sato@test.com',
            'password' => 'password1',
            'picture' => 'default.jpg',
        ];
        $member = new Member;
        $member->fill($param)->save();

        $param = [
            'name' => 'tanaka',
            'email' => 'tanaka@test.com',
            'password' => 'password2',
            'picture' => 'default.jpg',
        ];
        $member = new Member;
        $member->fill($param)->save();

        $param = [
            'name' => 'yamada',
            'email' => 'yamada@test.com',
            'password' => 'password3',
            'picture' => 'default.jpg',
        ];
        $member = new Member;
        $member->fill($param)->save();
    }
}
