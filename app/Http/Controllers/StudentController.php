<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudentLoginRequest;
use App\Http\Requests\StudentBorrowingRequest;
use App\Http\Requests\StudentSaveProfileRequest;
use App\Book;
use App\Student;
use App\Borrowing_Record;
use Auth;
use DB;
use Carbon\Carbon;
use DateTime;   
class StudentController extends Controller
{
    // public function __construct()
    // {   
    //     return $this->middleware('student');
    // }

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
        if(Auth::check()){
            $checker = Borrowing_Record::where(['student_id'=>$id,'status'=>'1'])->count();
            $status = DB::select('select distinct br.student_id, b.id, br.status, b.author, b.title, b.genre, b.edition, b.genre, b.stock, b.year, br.book_id, br.status from books b left outer join borrowing_records br on b.id=br.book_id where br.student_id is null or br.student_id = ? or br.student_id != ? order by br.student_id desC', [$id,$id]);
            $student = Student::where('id',$id)->pluck('firstName');
            $lastName = Student::where('id',$id)->pluck('lastName');
            $id = Student::where('id',$id)->pluck('id')->pop();
            $books = \DB::table('borrowing_records')
                ->where('student_id',$id)
                ->leftJoin('books','book_id','=','books.id')
                ->leftJoin('students','student_id','=','students.id')
                ->get();
            $penalty = Student::where('id',$id)->pluck('penalty');
            return view('librarysystem.studentdashboard',compact('firstName','lastName','student','bookStatus','id','status','checker'));
            // return $status;

        }
        else{
            return redirect('student/login')->withErrors('You must login first');
        }
    }

    public function borrow()
    {
        $count = Borrowing_Record::where('student_id',Auth::user()->id)->count();
        $bookStatus = Book::all();
        return view('librarysystem.borrowbooks',compact('count','bookStatus'));
    }

    public function postBorrow($id, StudentBorrowingRequest $request)
    {

        Borrowing_Record::create(['book_id'=>$request->id,'student_id'=>$id,'borrowing_date'=> \Carbon\Carbon::now(), 'status'=>'1']);
        Book::where('id',$request->id)->decrement('stock');
        return redirect()->route('student.show',compact('id'));
    }

    public function studentHistory($id)
    {
        if(Auth::check()){
            $checker = Borrowing_Record::where(['student_id'=>$id,'status'=>'1'])->count();
            $pendingRequest = Borrowing_Record::where('student_id',$id)
                                ->leftJoin('books','borrowing_records.book_id','=','books.id')
                                ->orderBy('borrowing_records.status','asc')
                                ->get();
            $student = Student::where('id',$id)->pluck('firstName');
            $lastName = Student::where('id',$id)->pluck('lastName');
            $id = Student::where('id',$id)->pluck('id')->pop();
            $books = \DB::table('borrowing_records')
                ->where('student_id',$id)
                ->leftJoin('books','book_id','=','books.id')
                ->leftJoin('students','student_id','=','students.id')
                ->get();
            $penalty = Student::where('id',$id)->pluck('penalty');
        return view('librarysystem.studenthistory',compact('firstName','lastName','student','pendingRequest','id','status','checker'));
        }
        else
            return redirect('student/login')->withErrors('You must login first');
    }

    public function profile($id)
    {
        // $time = Carbon::now();
        // $time2 = Borrowing_Record::where(['id'=>1])->pluck('borrowing_date');
        // $date = date_create_from_format('d/M/Y:H:i:s', $time2);
        // $time = DateTime::createFromFormat('Y-m-d H:m:s',$time);
        $address = Student::where('id',$id)->pluck('address');
        $course = Student::where('id',$id)->pluck('course');
        $yearLevel = Student::where('id',$id)->pluck('yearLevel');
        $gender = Student::where('id',$id)->pluck('gender');
        $religion = Student::where('id',$id)->pluck('religion');
        $contactNumber = Student::where('id',$id)->pluck('contactNo');
        $middleName = Student::where('id',$id)->pluck('middleName');
        $motto = Student::where('id',$id)->pluck('motto');
        $firstName = Student::where('id',$id)->pluck('firstName');
        $lastName = Student::where('id',$id)->pluck('lastName');
        $recentActivity = Borrowing_Record::where('student_id',$id)->leftJoin('books','borrowing_records.book_id','=','books.id')->get();
        return view('librarysystem.profile',compact('time','recentActivity','firstName','lastName','address','course','yearLevel','gender','religion','contactNumber','middleName','motto'));
    }

    public function editProfile($id)
    {
        $address = Student::where('id',$id)->pluck('address');
        $course = Student::where('id',$id)->pluck('course');
        $yearLevel = Student::where('id',$id)->pluck('yearLevel');
        $gender = Student::where('id',$id)->pluck('gender');
        $religion = Student::where('id',$id)->pluck('religion');
        $contactNumber = Student::where('id',$id)->pluck('contactNo');
        $middleName = Student::where('id',$id)->pluck('middleName');
        $motto = Student::where('id',$id)->pluck('motto');
        $firstName = Student::where('id',$id)->pluck('firstName');
        $lastName = Student::where('id',$id)->pluck('lastName');
        $recentActivity = Borrowing_Record::where('student_id',$id)->leftJoin('books','borrowing_records.book_id','=','books.id')->get();
        return view('librarysystem.editProfile',compact('time','recentActivity','firstName','lastName','address','course','yearLevel','gender','religion','contactNumber','middleName','motto'));
    }

    public function saveProfile(StudentSaveProfileRequest $request)
    {
        return 'asdfasdf';
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}