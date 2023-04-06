<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SourceNewsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('source_news')->insert($this->getSources());
    }

    private function getSources()
    {
        $data = [];

        for($i = 0; $i < 10; $i++) {
            $data[] = [
                'name' => 'name',
                'id_category' => 1
            ];
        }

        return $data;
    }
}
