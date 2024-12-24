<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Http;


class HomeController extends Controller
{
    function hello(Request $request){
        // return view('hello');
        $name = "Ostad Batch 4";
        return Inertia::render('Home/Hello',[
            'name' => $name,
            // 'posts' => $this->getPosts()
            'posts' => Inertia::defer(function(){
                return $this->getPosts();
            })
        ]);
    }

    function greet(Request $request){
        return Inertia::render('Home/Greet');
    }

    function students(Request $request){
        return Inertia::render('Home/Student');
    }

    function store(Request $request){
        $request->validate([
            'name' => 'required',
            'age' => 'required'
        ]);

        $name = $request->name;
        $age = $request->age;

        $student = new Student();
        $student->name = $name;
        $student->age = $age;
        $student->save();

    }

    function destroy(Request $request, $id){
        $student = Student::find($id);
        $student->delete();
    }

    private function getPosts(){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }
}
