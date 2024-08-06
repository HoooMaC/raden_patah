<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;

use App\Models\User;
use App\Models\Program;
use App\Models\Announcement;
use App\Models\PostCategory;
use App\Models\ProgramCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\ProgramIn2024Seeder;

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
        Role::factory()->create(['name' => "reviewer" ]);

        ProgramCategory::factory()->create(['title' => 'Program Harian']);
        ProgramCategory::factory()->create(['title' => 'Program Mingguan']);
        ProgramCategory::factory()->create(['title' => 'Program Triwulan']);
        ProgramCategory::factory()->create(['title' => 'Program Tahunan']);

        PostCategory::factory()->create(['title' => 'Agama']);
        PostCategory::factory()->create(['title' => 'Ilmiah']);
        PostCategory::factory()->create(['title' => 'Gen Z']);

        User::factory()->create([
            'name' => 'Gunawan',
            'username' => 'gunawan',
            'email' => 'gunawan@example.com',
            'password' => Hash::make('password'),
            'RoleID' => '2',
        ]);

        User::factory(50)->create();
        Announcement::factory(10)->create();
        // Program::factory(50)->create();
        $this->call(
            class: ProgramIn2024Seeder::class,
        );
    }
}
