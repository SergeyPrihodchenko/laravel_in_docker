<?php

namespace App\Models\News;

class CategoryNews {
    private array $category;
    private array $sortCategory;

    public function __construct()
    {
        $this->sortCategory = [
            1 => [1,3,5],
            2 => [2,4,6],
            3 => [0,7,8]
        ];

        $this->category = [
            1 => ['id' => 1, 'name' => 'Технологии'],
            2 => ['id' => 2, 'name' => 'Экономика'],
            3 => ['id' => 3, 'name' => 'Политика']
        ];
    }

    public function getCategorySortById (int $id): array 
    {
        return $this->category[$id];
    }
    public function getCategorySort (): array 
    {
        return $this->category;
    }

    public function getCategory(): array
    {
        return $this->category;
    }
}