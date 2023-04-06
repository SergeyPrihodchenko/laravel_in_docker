<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert($this->getCategory());
    }

    private function getCategory()
    {
        $data = [];

        for($i = 0; $i < 10; $i++) {
            $data[] = [
                'name' => 'name' . $i
            ];
        }

        return $data;
    }
}
