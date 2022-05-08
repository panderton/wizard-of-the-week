<?php

namespace Database\Seeders;

use App\Models\Wizard;
use Illuminate\Database\Seeder;

class WizardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(config('wizards.names')) {
            foreach (config('wizards.names') as $name) {
                Wizard::create(['name' => $name]);
            }
        }
    }
}
