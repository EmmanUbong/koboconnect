<?php

namespace App\Http\Controllers;

use App\Models\review_ratings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Models\Post;

class HomeController extends Controller


{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id= Auth::id();

        $users = DB::table('companies')
            ->where('id', '=', $id)->get();

           
            $combineAll= DB::table('user_biodatas')
            ->where('id', '=', $id)->get();

         

         
        $v1=1;
        $v2=2;
        $v3=3;
        $v4=4;
        $v5=5;
      


        //     $r5 = DB::select('select COUNT(star_rating) as rate from review_ratings where star_rating  = :ratevalue AND Authusersid =:authuserid AND Authusersemail=:authuseremail' , ['ratevalue' => $v5,'authuserid'=>$users,'authuseremail'=>'emmanuelubong30@gmail.com']);
        $r1 = DB::select('select COUNT(star_rating) as rate from review_ratings where star_rating  = :ratevalue AND Authusersid =:authuserid ' , ['ratevalue' => $v1,'authuserid'=>$id]);
        $r2 = DB::select('select COUNT(star_rating) as rate from review_ratings where star_rating  = :ratevalue AND Authusersid =:authuserid ' , ['ratevalue' => $v2,'authuserid'=>$id]);
        $r3 = DB::select('select COUNT(star_rating) as rate from review_ratings where star_rating  = :ratevalue AND Authusersid =:authuserid ' , ['ratevalue' => $v3,'authuserid'=>$id]);
        $r4 = DB::select('select COUNT(star_rating) as rate from review_ratings where star_rating  = :ratevalue AND Authusersid =:authuserid ' , ['ratevalue' => $v4,'authuserid'=>$id]);
        $r5 = DB::select('select COUNT(star_rating) as rate from review_ratings where star_rating  = :ratevalue AND Authusersid =:authuserid ' , ['ratevalue' => $v5,'authuserid'=>$id]);
       
   
       
 
        //    return view('pages.listing.chicago-medical-center',['users'=>$users,'r1'=>$r1,'r2'=>$r2,'r3'=>$r3,'r4'=>$r4,'r5'=>$r5,'combineAll'=>$combineAll]) ;
    









        $userData = review_ratings::select(DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('count');



        return view('home',['users'=>$users,'userData'=> $userData,'combineAll'=>$combineAll]);

        // return view('home',['users'=>$users,'r1'=>$r1,'r2'=>$r2,'r3'=>$r3,'r4'=>$r4,'r5'=>$r5,'combineAll'=>$combineAll]);
    }

   
}
