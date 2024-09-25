<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ユーザーのデータを配列で作成
        $users = [
            [
                'name' => 'User One',
                'email' => 'user1@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'User Two',
                'email' => 'user2@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'User Three',
                'email' => 'user3@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'User Four',
                'email' => 'user4@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'User Five',
                'email' => 'user5@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'testuser',
                'email' => 'test@gmail.com',
                'password' => Hash::make('testuser'),
            ],
        ];

        // ユーザーデータを挿入
        DB::table('users')->insert($users);
    }
}
