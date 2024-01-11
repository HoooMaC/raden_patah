<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Role;
use App\Models\User;
use App\Models\Announcement;
use App\Models\Program;
use App\Models\ProgramCategory;
use App\Models\PostCategory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::factory()->create(['name' => "jama'ah" ]);
        Role::factory()->create(['name' => "admin" ]);
        Role::factory()->create(['name' => "takmir" ]);
        Role::factory()->create(['name' => "umar" ]);
        Role::factory()->create(['name' => "ptq" ]);
        Role::factory()->create(['name' => "dc" ]);
        Role::factory()->create(['name' => "imc" ]);
        Role::factory()->create(['name' => "mrplunchspace" ]);

        ProgramCategory::factory()->create(['title' => 'Program Harian']);
        ProgramCategory::factory()->create(['title' => 'Program Mingguan']);
        ProgramCategory::factory()->create(['title' => 'Program Triwulan']);
        ProgramCategory::factory()->create(['title' => 'Program Insidental']);

        PostCategory::factory()->create(['title' => 'Agama']);
        PostCategory::factory()->create(['title' => 'Ilmiah']);
        PostCategory::factory()->create(['title' => 'Gen Z']);

        User::factory()->create([
            'name' => 'Gunawan',
            'username' => 'gunawan',
            'email' => 'gunawan@example.com',
            'password' => 'password',
            'role_id' => '2',
        ]);

        // Program::factory()->create([
        //     'title' => 'Gunawan',
        //     'description' => 'gunawan',
        //     'icon' => '',
        //     'isActive' => true,
        //     'role_id' => '2',
        //     'password' => 'password',
        // ]);

        User::factory(10)->create();
        Announcement::factory(10)->create();
        Program::factory(20)->create();
    }
}
