<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Story;
use App\Tag;
use App\Location;
use DB;

class StoryController extends Controller
{
    //
    public function index() {
		$stories = Story::with('tags')->get();
		return view('stories', ['stories' => $stories]); 
	}

	public function tag() {
		$tags = Tag::all();
		return view('tags', ['tags' => $tags]);
	}

	public function create() {
		$locations = Location::all();
		return view('story.create', ['locations' => $locations]);
	}

	public function store(Request $request) {
		$pub = FALSE;
		if ($request->input('published') == "TRUE"){
			$pub = TRUE;
		}
		DB::table('stories')->insert([//,
				'title' => $request->input('title'),
				'story' => $request->input('story'),
                'location_id' => $request->input('location_id'),
                'published' => $pub
			]); 		
	}
}

