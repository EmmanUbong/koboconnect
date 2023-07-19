<?php

namespace App\Http\Controllers;

use App\Models\review_ratings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReviewRatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    //   $Authid= DB::table('users')
    //   ->where('id', '=', $id)->get();;
    //   $Authem=Auth::;
  

        review_ratings::create([
            'name' =>  request('name'),
            'usersemail' => request('email'),
            'phone' => request('phn'),
            'Authusersemail' => request('Rmail'),
            'Authusersid' =>  request('Rid'),
            'star_rating' => request('rating'),
          
        ]);
        return back()->with('success', 'Your review has been submitted.');
        //  return redirect()->route('searchList');
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
