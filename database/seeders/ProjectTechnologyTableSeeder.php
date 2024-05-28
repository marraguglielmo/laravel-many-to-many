<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Technology;

class ProjectTechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // estraggo un progetto random
        $project = Project::inRandomOrder()->first();

        // estraggo un id random da technologies
        $technology_id = Project::inRandomOrder()->first()->id;

        // aggiungo la relazione nella tabella pivot
        $project->technologies()->attach($technology_id);
    }
}
