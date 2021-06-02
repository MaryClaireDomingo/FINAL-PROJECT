<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Story;


class StoryController extends Controller
{

    public function inspirational(Request $req){

        $req->user()->story()->create([
            'title' => $req->title,
            'body' => $req->body,
            'type' => 'Inspirational'
        ]);

        return back()->with('success', ' ');

    }

    
    public function laugh(Request $req){

        $req->user()->story()->create([
            'title' => $req->title,
            'body' => $req->body,
            'type' => 'Laugh'
        ]);

        return back()->with('success', ' ');

    }


    public function negative(Request $req){

        $req->user()->story()->create([
            'title' => $req->title,
            'body' => $req->body,
            'type' => 'Negative'
        ]);

        return back()->with('success', ' ');

    }


    public function delete(Request $req, $id){

        $story = Story::find($id);

        $story->delete();

        return back()->with('success', ' ');

    }


}
