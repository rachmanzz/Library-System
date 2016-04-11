<?php

namespace App\Http\Controllers;
	
use Illuminate\Http\Request;
use App\Http\Requests\StudentLoginRequest;
use App\Student;
use App\Book;
use App\Borrowing_Record;
use Auth;
class StudentController extends Controller
{
    public function postLogin(StudentLoginRequest $request)
    {
    	$id = $request->id;
    	if(Auth::attempt(['id'=>$request->id,'password'=>$request->password]))
    		return redirect()->route('student.show',compact('id'));
    	else
    		return redirect('student/login')->withErrors('Invalid ID/Password');
    }

    public function show($id)
    {
        $student = Student::where('id',$id)->pluck('firstName');
        $lastName = Student::where('id',$id)->pluck('lastName');
        $totalBooks = count(Book::all());
        $totalBorrowed = count(Borrowing_Record::all());
        $totalUsers = count(Student::all());

        $books = \DB::table('borrowing_records')
                ->where('student_id',$id)
                ->leftJoin('books','book_id','=','books.id')
                ->leftJoin('students','student_id','=','students.id')
                ->get();
        $penalty = Student::where('id',$id)->pluck('penalty');
        return view('librarysystem.student',compact('firstName','student','books'));
    }

    public function borrow()
    {
        $count = Borrowing_Record::where('student_id',Auth::user()->id)->count();
        $bookStatus = Book::all();
        return view('librarysystem.borrowbooks',compact('count','bookStatus'));
    }

    public function postBorrow()
    {
        return 'working';
    }

    public function logout()
    {   
        Auth::logout();
        return redirect('/');
    }
}