<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\KidsComic;
use Illuminate\Support\Facades\DB;

// use function GuzzleHttp\Promise\all;

class FilterController extends Controller
{
    public function subjectfetch(Request $request){
        $subjects = DB::table('kidscomics')
                    ->join('subjects','kidscomics.subject_id','=','subjects.subject_id')
                    ->join('languages','kidscomics.languages_id','=','languages.language_id')
                    ->where('class_id',$request->id)
                    ->where('kidscomics.creator','=','lwcteam')
                    ->select()
                    ->orderBy('subjects.subject_id')
                    ->get();
        return response()->json($subjects);
    }
    
    public function quizsubjectfetch(Request $request){
        $subjects = DB::table('kidscomics')
                    ->join('subjects','kidscomics.subject_id','=','subjects.subject_id')
                    ->join('languages','kidscomics.languages_id','=','languages.language_id')
                    ->where('class_id',$request->id)
                    ->whereNotNull('quizlink')
                    ->where('kidscomics.quizlink','!=','undefined')
                    ->select()
                    ->orderBy('subjects.subject_id')
                    ->get();
        return response()->json($subjects);
    }
    
    public function languagefetch(Request $request){
        $languages = DB::table('comics')
                    ->join('grades','comics.class_id','=','grades.class_id')
                    ->join('subjects','comics.subject_id','=','subjects.subject_id')
                    ->join('languages','comics.languages_id','=','languages.language_id')
                    ->select()
                    ->where('comics.creator','=','lwcteam')
                    ->where('comics.class_id','=',$request->class_id)
                    ->where('comics.subject_id','=',$request->sub_id)
                    ->get();
                   
        return response()->json($languages);
    }
    
     public function quizlanguagefetch(Request $request){
        $languages = DB::table('comics')
                    ->join('grades','comics.class_id','=','grades.class_id')
                    ->join('subjects','comics.subject_id','=','subjects.subject_id')
                    ->join('languages','comics.languages_id','=','languages.language_id')
                    ->select()
                    ->where('comics.class_id','=',$request->class_id)
                    ->where('comics.subject_id','=',$request->sub_id)
                    ->whereNotNull('comics.quizlink')
                    ->where('comics.quizlink','!=','undefined')
                    ->get();
                   
        return response()->json($languages);
    }
    
    public function unitfetch(Request $request){
        $languages = DB::table('comics')
                    ->join('grades','comics.class_id','=','grades.class_id')
                    ->join('subjects','comics.subject_id','=','subjects.subject_id')
                    ->join('languages','comics.languages_id','=','languages.language_id')
                    ->select()
                    ->where('comics.creator','=','lwcteam')
                    ->where('comics.class_id','=',$request->class_id)
                    ->where('comics.subject_id','=',$request->sub_id)
                    ->where('comics.languages_id','=',$request->language_id)
                    ->orderBy('comics.unit')
                    ->get();
        return response()->json($languages);
    }
    
    public function quizunitfetch(Request $request){
        $languages = DB::table('comics')
                    ->join('grades','comics.class_id','=','grades.class_id')
                    ->join('subjects','comics.subject_id','=','subjects.subject_id')
                    ->join('languages','comics.languages_id','=','languages.language_id')
                    ->select()
                    ->where('comics.class_id','=',$request->class_id)
                    ->where('comics.subject_id','=',$request->sub_id)
                    ->where('comics.languages_id','=',$request->language_id)
                    ->whereNotNull('comics.quizlink')
                    ->where('comics.quizlink','!=','undefined')
                    ->orderBy('comics.unit')
                    ->get();
        return response()->json($languages);
    }
    
    public function topicfetch(Request $request){
        $topics = DB::table('comics')
                    ->join('grades','comics.class_id','=','grades.class_id')
                    ->join('subjects','comics.subject_id','=','subjects.subject_id')
                    ->join('languages','comics.languages_id','=','languages.language_id')
                    ->select()
                    ->where('comics.creator','=','lwcteam')
                    ->where('comics.class_id','=',$request->class_id)
                    ->where('subjects.subject_id','=',$request->sub_id)
                    ->where('languages.language_id','=',$request->language_id)
                    ->where('comics.unit','=',$request->unit_name)
                    ->get();
        
                   
        return response()->json($topics);
    }
    
     public function quiztopicfetch(Request $request){
        $topics = DB::table('comics')
                    ->join('grades','comics.class_id','=','grades.class_id')
                    ->join('subjects','comics.subject_id','=','subjects.subject_id')
                    ->join('languages','comics.languages_id','=','languages.language_id')
                    ->select()
                    ->whereNotNull('comics.quizlink')
                    ->where('comics.quizlink','!=','undefined')
                    ->where('comics.class_id','=',$request->class_id)
                    ->where('subjects.subject_id','=',$request->sub_id)
                    ->where('languages.language_id','=',$request->language_id)
                    ->where('comics.unit','=',$request->unit_name)
                    ->get();
        
                   
        return response()->json($topics);
    }
    
    public function fetchOnAll(Request $request){
        $comics = DB::table('comics')
                    ->join('grades','comics.class_id','=','grades.class_id')
                    ->join('subjects','comics.subject_id','=','subjects.subject_id')
                    ->join('languages','comics.languages_id','=','languages.language_id')
                    ->select()
                    ->where('comics.creator','=','lwcteam')
                    ->where('grades.class_id' ,'=', $request->class)
                    ->where('subjects.subject_id' ,'=', $request->subject)
                    ->where('languages.language_id' ,'=', $request->language)
                    ->where('comics.unit' ,'=', $request->unit)
                    ->where('comics.topic' ,'=', $request->topic)
                    ->get();
       //dd($request->language);
        return response()->json($comics);
    }

    public function vendorsubjectfetch(Request $request){
        $subjects = DB::table('comics')
                    ->join('subjects','comics.subject_id','=','subjects.subject_id')
                    ->join('languages','comics.languages_id','=','languages.language_id')
                    ->where('class_id',$request->id)
                    ->where('comics.creator','=','vendor')
                    ->select()
                    ->orderBy('subjects.subject_id')
                    ->get();
        return response()->json($subjects);
    }
    public function vendorlanguagefetch(Request $request){
        $languages = DB::table('comics')
                    ->join('grades','comics.class_id','=','grades.class_id')
                    ->join('subjects','comics.subject_id','=','subjects.subject_id')
                    ->join('languages','comics.languages_id','=','languages.language_id')
                    ->select()
                    ->where('comics.creator','=','vendor')
                    ->where('comics.class_id','=',$request->class_id)
                    ->where('comics.subject_id','=',$request->sub_id)
                    ->get();
                   
        return response()->json($languages);
    }
    public function vendorunitfetch(Request $request){
        $languages = DB::table('comics')
                    ->join('grades','comics.class_id','=','grades.class_id')
                    ->join('subjects','comics.subject_id','=','subjects.subject_id')
                    ->join('languages','comics.languages_id','=','languages.language_id')
                    ->select()
                    ->where('comics.creator','=','vendor')
                    ->where('comics.class_id','=',$request->class_id)
                    ->where('comics.subject_id','=',$request->sub_id)
                    ->where('comics.languages_id','=',$request->language_id)
                    ->orderBy('comics.unit')
                    ->get();
        return response()->json($languages);
    }
    public function vendortopicfetch(Request $request){
        $topics = DB::table('comics')
                    ->join('grades','comics.class_id','=','grades.class_id')
                    ->join('subjects','comics.subject_id','=','subjects.subject_id')
                    ->join('languages','comics.languages_id','=','languages.language_id')
                    ->select()
                    ->where('comics.creator','=','vendor')
                    ->where('comics.class_id','=',$request->class_id)
                    ->where('subjects.subject_id','=',$request->sub_id)
                    ->where('languages.language_id','=',$request->language_id)
                    ->where('comics.unit','=',$request->unit_name)
                    //->orderBy('comics.subject_id')
                    ->get();
                   
        return response()->json($topics);
    }
    
    public function vendorfetchOnAll(Request $request){
        $comics = DB::table('comics')
                    ->join('grades','comics.class_id','=','grades.class_id')
                    ->join('subjects','comics.subject_id','=','subjects.subject_id')
                    ->join('languages','comics.languages_id','=','languages.language_id')
                    ->select()
                    ->where('comics.creator','=','vendor')
                    ->where('grades.class_id' ,'=', $request->class)
                    ->where('subjects.subject_id' ,'=', $request->subject)
                    ->where('languages.language_id' ,'=', $request->language)
                    ->where('comics.unit' ,'=', $request->unit)
                    ->where('comics.topic' ,'=', $request->topic)
                    ->get();
        return response()->json($comics);
    }
     
     public function quizfetchOnAll(Request $request){
        $units = DB::table('quiz')
                    ->join('grades','quiz.class_id','=','grades.class_id')
                    ->join('subjects','quiz.subject_id','=','subjects.subject_id')
                    ->where('quiz.class_id','=',$request->class_id)
                    ->where('quiz.subject_id','=',$request->sub_id)
                    ->where('quiz.unit','=',$request->unit)
                    ->orderBy('quiz.unit')
                    ->select()
                    ->get();
        return response()->json($units);
    }
     public function infycomicfetch(Request $request){
        $infycomics = DB::table('infinity_comics')
                    ->where('category','=',$request->category)
                    ->orderBy('id')
                    ->select()
                    ->get();
        return response()->json($infycomics);
    }
    
}
