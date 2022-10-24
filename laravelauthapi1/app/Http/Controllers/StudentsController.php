<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StudentsRequest;
use App\Http\Resources\StudentsResource;
class StudentsController extends Controller
{
    public function update (StudentsRequest $request, Student $student){
        $student->update([
            'name' => $request->input('name')  
        ]);
       
        return new StudentsResource($student);
    }
    public function show(Student $student){
        return new StudentsResource($student);
    }

    public function index(){
       return StudentsResource::collection(Student::all()); 
    }

    public function store(Request $request){
       $student = Student::create([
        'name' => $request->name
       ]);

       return new StudentsResource($student);
    }

    public function destroy(Student $student){
        $student->delete();
        return response([
            'message' => 'student information deleted!'
        ], 204);
    }
}
