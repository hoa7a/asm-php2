<?php
namespace App\Controllers;
use App\Models\Student;


class StudentController extends BaseController{
    protected $student;
    public function __construct(){
        $this->student = new Student();
    }

    public function getStudent(){
        $students = $this->student->getListStudent();

      return $this->render('student.index',compact('students'));

    }
}

// function getStudent() {
//     $students = getListStudent();
//     return render('course.index',compact('students'));
// }