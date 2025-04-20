<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SchemeOfWork;

class SchemeOfWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $this->call([
SchemeOfWork::class,
        ]);
        SchemeOfWork::create([
            'title' => 'Mathematics Scheme-Algebra',
            'description' => 'A comprehensive scheme covering algebraic expressions and equations',
            'start_date' => '2023-09-01',
            'end_date' => '2023-09-01',
            'subject' => 'Mathematics',
        ]);

        SchemeOfWork::create([
            'title' => 'Science Scheme - Biology',
            'description' => 'An engaging scheme focusing on the funcametals of biology',
            'start_date' => '2023-10-01',
            'end_date' => '2023-10-31',
            'subject' => 'Science',
        ]);

        SchemeOfWork::create([
            'title' => 'Mathematics Scheme-Algebra',
            'description' => 'A comprehensive scheme covering algebraic expressions and equations',
            'start_date' => '2023-09-01',
            'end_date' => '2023-09-01',
            'subject' => 'Mathematics',
        ]);

        //Add more dummy data as needed
        for($i = 5; $i <= 10; $i++) {
            SchemeOfWork::create([
                title => "Dummy Scheme $i",
                "description" => "Description for dummy scheme $i",
                'start_date' => now()->addMonths($i)->startOfMonth(),
                'end_date' => now()->addMonths($i)->endOfMonth(),
                'subject' => 'Subject' . $i,
            ]);
        }
    }
}
