<?php

namespace Database\Seeders;

use App\Models\Enums\PageTemplate;
use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::truncate();

        Page::create([
            'name' => 'home',
            'title' => config('app.name'),
            'content' => <<<MD
                Site en construction
                MD,
            'template' => PageTemplate::Simple,
        ]);
    }
}
