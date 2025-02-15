<?php

namespace Database\Seeders;

use App\Models\Certifications;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CertificationSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Certifications::create([
            'title' => 'Python Certification',
            'image' => 'assets/img/portfolio/PythonBasic.png',
            'description' => 'Official Python Certification from HackerRank, showcasing proficiency in fundamental Python programming skills.',
        ]);
        Certifications::create([
            'title' => 'JavaScript Certification',
            'image' => 'assets/img/portfolio/javascript.jpg',
            'description' => 'An official JavaScript certification from Dicoding, demonstrating proficiency in modern JavaScript development for web applications.',
        ]);
        Certifications::create([
            'title' => 'Java Certification',
            'image' => 'assets/img/portfolio/javabasic.png',
            'description' => 'Official Java Certification from HackerRank, demonstrating proficiency in fundamental Java programming skills.',
        ]);
        Certifications::create([
            'title' => 'Problem Solving Certification',
            'image' => 'assets/img/portfolio/problemsolving.png',
            'description' => 'Official Problem Solving Certification from HackerRank, demonstrating the ability to solve algorithmic challenges using various programming languages.',
        ]);
        Certifications::create([
            'title' => 'Flutter Certification',
            'image' => 'assets/img/portfolio/flutter.jpg',
            'description' => 'An official Flutter certification from Dicoding, showcasing expertise in building cross-platform mobile applications using Flutter and Dart.',
        ]);
        Certifications::create([
            'title' => 'SQL Certification',
            'image' => 'assets/img/portfolio/hr-sql.png',
            'description' => 'Official SQL Certification from HackerRank, showcasing proficiency in fundamental SQL programming skills.',
        ]);
        
    }
}
