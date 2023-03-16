<?php

declare(strict_type=1);

namespace App\Http\Controllers;

trait NewsTrait
{
    public function getNews(int $id = null): array
    {
        $news = [];
        if($id === null) {
            for($i=0; $i < 10; $i++) {
                $news[] = [
                    'id' => $i+1,
                    'title' => fake()->jobTitle(),
                    'author' => fake()->userName(),
                    'image' => fake()->imageUrl(),
                    'status' => 'ACTIVE',
                    'description' => fake()->text(100),
                ];
            }
            return $news;
        }

        return [
            'id' => $id,
            'title' => fake()->jobTitle(),
            'author' => fake()->userName(),
            'image' => fake()->imageUrl(),
            'status' => 'ACTIVE',
            'description' => fake()->text(100),
        ];
    
    }
}