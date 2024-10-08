<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;
use DB;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    
    function create(){
        return view('rating-form');
    }


    function store(Request $request){

        
        $reviewData['user_name'] = $request->username;
        $reviewData['rating'] = $request->rating;

        Reviews::create($reviewData);

        return redirect()->route('review-list');

    }

    function index(){
        $ratings = Reviews::get();

        $ratingAvg = Reviews::select(DB::raw('AVG(rating) as rating_avg'))->first('rating_avg');
        
        return view('review-list',compact('ratings','ratingAvg'));
    }
}
