<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book ;
use App\student ;


class studentscontroller extends Controller
{
    //


    public function index()
    {
        return view('student');
    }
    public function ineer(){
        $users = DB::table('students')
            ->join('books', 'students.id', '=', 'books.student_id')
            ->select('students.borrow_or_not', 'books.title', 'books.author' , 'books.image')
            ->get();
    }

    public function save(Request $request)
    {
        $messages = [
            'username.required' => 'Input Your Username',
            'password.required|min:6' => 'Your Password less Than 3 ',
            'email.required|min:6' => 'Input Your Email '
        ];
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required|min:3',
            'email'=>'required|email'


        ],$messages);

        $student = new student();
        $student->name = $request->input('username');
        $student->password = $request->input('password');
        $student->email = $request->input('email');

        $student->save();


        return view('student');
    }

}
