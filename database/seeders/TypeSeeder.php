<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['HTML', 'Laravel', 'Vuejs', 'CSS', 'JavaScript', 'Bootstrap'];

        foreach ($types as $type) {
            $newCategory = new Type();
            $newCategory->name = $type;
            $newCategory->save();
        }
    }
}
