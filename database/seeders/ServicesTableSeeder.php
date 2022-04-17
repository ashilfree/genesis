<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicesCount = (int)$this->command->ask('How many services would you like?', 5);
        Service::factory()->count($servicesCount)->create();
    }
}
