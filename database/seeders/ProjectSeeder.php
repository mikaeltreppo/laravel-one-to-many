<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i <5; $i++){
            $newProj= new Project();
            $newProj->title = $faker->sentence(5);
            $newProj->description = $faker->sentence(90);
            $newProj->slug = Str::slug($newProj->title, '-');
            $newProj->save();

        }
    }
}
