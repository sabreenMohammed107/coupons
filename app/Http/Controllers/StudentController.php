<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon_data;
use App\Duration;
use App\Course;
use App\Student_data;
use App\Preferred_duration;
use App\Students_course;

use DB;
use Log;
use Carbon\Carbon;
use Illuminate\Database\QueryException;

class StudentController extends Controller
{

    protected $routeName;
    protected $message;
    protected $errormessage;

    public function __construct()
    {

        $this->routeName = 'home.';
        $this->message = 'The Data has been saved';
        $this->errormessage = 'check Your Data ';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $durations = Duration::all();
        $courses = Course::all();
        return view('home.register', compact('durations', 'courses'));
    }
    public function index()
    {
        $durations = Duration::all();
        $courses = Course::all();
        return view('home.register', compact('durations', 'courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'mobile' => $request->input('mobile'),
            'city' => $request->input('city'),
            'education' => $request->input('education'),
            'job' => $request->input('job'),
            'note' => $request->input('note'),
        ];
        $durations = $request->input('dur');
        $courses = $request->input('course');
        $randomCoupon = Coupon_data::where('coupon_status', 1)->inRandomOrder()->first();
        $phoneExtist = Coupon_data::with('student')->where('coupon_status', 2)->whereNotNull('student_id')->get();
    $count=0;
        foreach( $phoneExtist as  $extist){

        $testing= $extist->student()->get();
        foreach($testing as $xx){
            if($xx->mobile==$request->input('mobile'))
            $count=$count+1;
        }
       
    }
     if($randomCoupon){
   if($count>0){
    return redirect()->back()->withInput()->with('flash_success', 'لديك خصم على هذا الرقم!');
        
}else{


        DB::transaction(function () use ($data, $durations, $courses, $randomCoupon, $request) {
            
            $student = Student_data::create($data);
            if ($durations) {
                foreach ($durations as $dur) {
                    Preferred_duration::create([
                        'student_id' => $student->id,
                        'duration_id' => $dur,
                    ]);
                }
            }
            if ($courses) {
                foreach ($courses as $course) {
                    Students_course::create([
                        'student_id' => $student->id,
                        'course_id' => $course,
                    ]);
                }
            }

            $coupon = [
                'student_id' => $student->id,
                'assign_date' => Carbon::parse(now()),
                'coupon_status' => 2,

            ];

            $randomCoupon->update($coupon);
        });

        return view('home.cong', compact('randomCoupon'));
    }
     }else{

        return redirect()->route($this->routeName . 'index')->with('flash_success', 'لايوجد كوبون خصم حاليا !');
     }
        
    }
    public function search()
    {
        $coupon=new Coupon_data();
        return view('home.search' ,compact('coupon'));
    }
    public function searchResult(Request $request)
    {
        $mobile = $request->input('phone');
        $student = Student_data::where('mobile', $mobile)->first();
        $coupon = Coupon_data::where('coupon_status', 2)->where('student_id', $student->id)->first();
        return view('home.result', compact('coupon'))->render();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
