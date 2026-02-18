<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate([
            'Email' => 'jane.smith@contoso.com'
        ], [
            'EmployeeID' => 1002,
            'FirstName' => 'Jane',
            'LastName' => 'Smith',
            'DisplayName' => 'Jane Smith',
        ]);
    }
}
