<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\DB;


class datacontroller extends Controller
{
    //
    public function index(Request $req)
    {
    	$member = new Member;
    	$member->name=$req->name;
    	$member->age=$req->age;
    	
    	$member->position=$req->position;
    	$member->save();
    	echo "in controller";
    	
    	 
    }
    public function getdetails(Request $req1)
    {
       
        
        $name=$req1->p_name;
           // return $name;
        $position=$req1->p_position;
    	 $member1 = Member::where('name', $name)->get();


          // echo "to get data";
           // return $member1;
        // Member::select('name')->where('age',26)->get();
         // $user = DB::table('members')->get();
         // return $user;
           return view('display1',['member1'=>$member1]);
           



        // return $member2;
       //return $member2->age;
    
          
    }


    // $position=$req1->p_position;
        // $member2=Member::where('position',$position)->get();
        // return $member2;
           

    
    public function getage(Request $req2)
     {
       $position=$req2->p_position;

       $member2=Member::where('position',$position)->get();

        // return $member2;
       //return $member2->age;
       return view('display',['member2'=>$member2]);
        //return view("display");
     }
    
   
}
