<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role = Role::create([
        'name' => 'ADMIN',
        'slug' => 'admin',
        'permissions' => json_encode([
              //dashboard
              'show-dashboard' => true,

              //data guru
              'add-teacher' => true,
              'browse-teacher' => true,
              'detail-teacher' => true,
              'edit-teacher' => true,
              'delete-teacher' => true,

              //data murid
              'add-student' => true,
              'browse-student' => true,
              'detail-student' => true,
              'edit-student' => true,
              'delete-student' => true,

              //data rapor
              'add-rapor' => true,
              'browse-rapor' => true,
              'detail-rapor' => true,
              'edit-rapor' => true,
              'delete-rapor' => true,

          ]),
      ]);

      $role = Role::create([
        'name' => 'TEACHER',
        'slug' => 'teacher',
        'permissions' => json_encode([
              //dashboard
              'show-dashboard' => true,

              //data rapor
              'add-rapor' => true,
              'browse-rapor' => true,
              'detail-rapor' => true,
              'edit-rapor' => true,
              'delete-rapor' => true,

          ]),
      ]);

      $role = Role::create([
        'name' => 'STUDENT',
        'slug' => 'student',
        'permissions' => json_encode([

              'browse-rapor' => true,
              'detail-rapor' => true,

          ]),
      ]);
    }
}
