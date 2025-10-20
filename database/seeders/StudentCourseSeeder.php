<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Student;

class StudentCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // tạo 3 môn học
        $courses = Course::factory()->count(3)->create();

        // tạo 10 sinh viên, mỗi sinh viên đăng ký ngẫu nhiên 1-3 môn học
        Student::factory()->count(10)->create()->each(function ($student) use ($courses){
            // chọn ngẫu nhiên 1-3 môn học
            $student->courses()->attach(
                $courses->random(rand(1,3))->pluck('id')->toArray()
            );
        });
    }
}
