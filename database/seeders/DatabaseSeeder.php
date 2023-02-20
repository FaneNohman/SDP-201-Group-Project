<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User Admin',
            'login' => 'admin',
            'password' => Hash::make('123456'),
            'role' => 'Admin',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User Manager',
            'login' => 'manager',
            'password' => '123456',
            'role' => 'Manager',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User User',
            'login' => 'user',
            'password' => '123456',
            'role' => 'User',
        ]);

        \App\Models\Project::factory()->create([
            'project_name' => 'Test Project 1',
            'manager_id' => '2',
        ]);

        \App\Models\Task::factory()->create([
            'user_id' => '1',
            'project_id' => '1',
            'work_type' => 'development',
            'task_name' => 'test create user model A',
            'description' => 'create user model using C',
            'deadline' => '2023-04-10',
            'status' => 'in_work',
        ]);
        \App\Models\Task::factory()->create([
            'user_id' => '1',
            'project_id' => '1',
            'work_type' => 'development',
            'task_name' => 'test create user model C',
            'description' => 'create user model using B',
            'deadline' => '2023-04-9',
            'status' => 'in_work',
        ]);
        \App\Models\Task::factory()->create([
            'user_id' => '1',
            'project_id' => '1',
            'work_type' => 'development',
            'task_name' => 'test create user model B',
            'description' => 'create user model using A',
            'deadline' => '2023-04-11',
            'status' => 'in_work',
        ]);
    }
}
