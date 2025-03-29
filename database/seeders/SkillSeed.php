<?php

namespace Database\Seeders;

use App\Models\Skills;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $skills = [
            'HTML',
            'Bootstrap',
            'CSS',
            'C#',
            'C++',
            'Dart',
            'JavaScript',
            'Java',
            'PHP',
            'Python',
            'Laravel',
            'CodeIgniter',
            'Flutter',
            'Express.js',
            'JQuery',
            'Node.js',
            'MySQL',
            'MongoDB',
            'MSSQL',
            'PostgreSQL',
            'Redis',
            'Git',
        ];
        foreach ($skills as $skill) {
            Skills::create([
                'name' => $skill,
            ]);
        }
        
    }
}
