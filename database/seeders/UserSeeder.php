<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         $users = [
           [
             'email'    => 'admin@testmail.com',
             'name'     => 'Super Admin',
             'password' => Hash::make('12345678'),
           ],
           [
            'email'    => 'teacher@testmail.com',
            'name'     => 'Teacher',
            'password' => Hash::make('12345678'),
          ],
           [
             'email'    => 'user@testmail.com',
             'name'     => 'Test User',
             'password' => Hash::make('12345678'),
           ],
         ];
     }
}
