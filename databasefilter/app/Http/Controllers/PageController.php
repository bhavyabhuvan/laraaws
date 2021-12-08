<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    //
     public function newquiz(){
        $classes = DB::select('select * from grades');
        $subjects = DB::select('select  * from subjects');
        $languages = DB::select('select  * from languages');
        $quizes = DB::table('quiz')
                    ->join('grades','quiz.class_id','=','grades.class_id')
                    ->join('subjects','quiz.subject_id','=','subjects.subject_id')
                    ->whereNotNull('quiz.link')
                    ->where('quiz.link','!=','undefined')
                    ->orderBy('id', 'desc')
                    ->select()
                    ->take(10)
                    ->get()
                    ->toArray();
        return view('frontend.newquiz',[
            'classes'=>$classes,
            'subjects'=>$subjects,
            'languages'=>$languages,
            'quizes'=>$quizes
        ]);
    }
    
    public function quiz(){
        $quizes = DB::table('kidscomics')
                    ->join('grades','kidscomics.class_id','=','grades.class_id')
                    ->join('subjects','kidscomics.subject_id','=','subjects.subject_id')
                    ->whereNotNull('kidscomics.quizlink')
                    ->where('kidscomics.quizlink','!=','undefined')
                    ->orderBy('id', 'desc')
                    ->select()
                    ->take(10)
                    ->get()
                    ->toArray();
        // $currentDateTime = Carbon::now()->format('Y-m-d 00:00:00');
        // $new_count = DB::table('kidscomics')->where('created_at', '>=' , $currentDateTime)->get()->count();
        $classes = DB::select('SELECT * FROM grades
                                WHERE class_id IN(SELECT class_id FROM kidscomics where quizlink IS NOT NULL)');
        return view('frontend.quiz',[
            'classes' => $classes,
            'quizes' => $quizes,
        ]);
        // ->with('new_count',$new_count);
    }
}
