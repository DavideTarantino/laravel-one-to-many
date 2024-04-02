<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    public function run(): void
    {
        $types = [
            ['name' => 'Individual'],
            ['name' => 'Four Hands'],
            ['name' => 'Group Projects'],
        ];

        foreach ( $types as $item ){
            $newType = new Type();

            $newType->type = $item['name'];

            $newType->save();
        }
    }
}
