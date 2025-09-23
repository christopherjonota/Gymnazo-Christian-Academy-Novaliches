<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
           'name' => 'Christopher',
           'email' => 'cristopherjonota@gmail.com',
           'password' => Hash::make('Christopher12345'), 
        ]);
    }
}
