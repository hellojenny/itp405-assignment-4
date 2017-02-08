<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class twitterController extends Controller
{
    public function index() {
    	$tweets = DB::table('tweets')
    	-> select('id', 'tweet')
    	-> orderBy('id', 'desc')
    	-> get();
    	return view('tweets.index', [
    		'tweets' => $tweets
    	]);
    }

    public function store(Request $request) {
    	$validation = Validator::make($request->all(), [
    		'tweet' => 'required|max:140'
    	]);

    	if($validation->passes()) {
	    	DB::table('tweets')-> insert([
				'tweet' => request('tweet'),
			]);
			return redirect('/')
				->with('successStatus', 'Tweet was created successfully!');
    	}
    	else {
    		return redirect('/')
    		->withErrors($validation);
    	}
    }

    public function destroy($tweetID) {
    	DB::table('tweets')
    	->where('id', '=', $tweetID)
    	->delete();

    	return redirect('/')
    	->with('successStatus', 'Tweet was successfully deleted!');
    }

    public function view($tweetID) {
    	$tweet = DB::table('tweets')
    	->select('id', 'tweet')
    	->where('id', '=', $tweetID)
    	->first();
    	return view('tweets.view', [
    		'tweet' => $tweet
    	]);
    }
}
