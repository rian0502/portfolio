<?php

namespace Database\Seeders;

use App\Models\Projects;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Projects::create([ 
            'title' => 'CPDC',
            'description' => 'A comprehensive Information System for the Chemistry Department, Faculty of Mathematics and Natural Sciences, University of Lampung. This website is used for managing data related to faculty, students, activities, and laboratory assets.',
            'technologies' => 'HTML, CSS, JavaScript, PHP, Laravel, MySQL, Redis, Bootstrap',
            'link' => 'https://github.com/rian0502/cpdc.git',
        ]);        
        Projects::create([
            'title' => 'COLALIN',
            'description' => 'An Android application built with Java to assist in traffic engineering analysis by counting vehicles on the road. COLALIN is designed to help civil engineering students and professionals efficiently collect and analyze traffic data. The app features different road types, supports 12 vehicle categories, and securely stores data online for easy access and management.',
            'technologies' => 'Java, Android, MySQL',
            'link' => 'https://github.com/rian0502/colalin.git',
        ]);            
       
        Projects::create([
            'title' => 'SIKOSAN',
            'description' => 'A modern and user-friendly boarding house information system designed to connect tenants with available accommodations. This platform helps tenants find detailed boarding house listings, while owners can efficiently market their properties and manage their listings with ease.',
            'technologies' => 'HTML, CSS, JavaScript, PHP, Codeigniter, MySQL, Bootstrap',
            'link' => 'https://github.com/rian0502/sikosan.git',
        ]);
         
        Projects::create([
            'title' => 'SIMAS',
            'description' => 'An asset management and maintenance system developed for PT Bukit Asam Tbk, Unit Pelabuhan Tarahan. SIMAS streamlines asset tracking, maintenance scheduling, and inventory management to enhance operational efficiency and ensure optimal resource utilization.',
            'technologies' => 'Flutter, Dart, MySQL',
            'link' => 'https://github.com/rian0502/management_and_maintenance_asset.git',
        ]);
         
        
    }
}
