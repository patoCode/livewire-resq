<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Rol;
use App\Models\User;
use App\Models\UserRol;
use App\Models\View;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $base = User::factory()->create([
            'name' => 'Denis Rodriguez',
            'email' => 'test@123.com',
            'password' => bcrypt('123'),
        ]);
        User::factory(9)->create();

        $admin = Rol::factory()->create([
            'name' => 'Administrador',
            'code' => 'admin',
            'sys_code' => 'admin',
        ]);

        $tech = Rol::factory()->create([
            'name' => 'Tecnico',
            'code' => 'tec',
            'sys_code' => 'TEC',
        ]);

        $base->roles()->attach([$admin->id]);

        $view = View::factory()->create([
            'name' => 'ONE',
            'route' => 'help',
            'description' => 'lorem ipsum',
            'version' => '1',
        ]);
        $view2 = View::factory()->create([
            'name' => 'TWO',
            'route' => 'help',
            'description' => 'lorem ipsum',
            'version' => '1',
        ]);
        $view3 = View::factory()->create([
            'name' => 'THREE',
            'route' => 'help',
            'description' => 'lorem ipsum',
            'version' => '1',
        ]);

        $admin->views()->attach([$view->id, $view2->id, $view3->id]);
        $tech->views()->attach([$view->id, $view3->id]);

        Category::factory()->create([
            'name' => 'Soporte IT',
            'code' => 'SIT',

        ]);
        Category::factory()->create([
            'name' => 'ICONO',
            'code' => 'ICN',
        ]);
        Category::factory()->create([
            'name' => 'Reclamos',
            'code' => 'REC',
        ]);
    }
}
