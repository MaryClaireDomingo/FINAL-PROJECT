<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Story;


class StoryController extends Controller
{

    public function inspirational(Request $req){

        $req->user()->stories()->create([
            'title' => $req->title,
            'body' => $req->body,
            'type' => 'Inspirational'
        ]);

        return back()->with('success', ' ');

    }

    
    public function laugh(Request $req){


        // $this->validate($req, [
        //     'image' => 'required|mimes:jpeg,jpg,png|max:5048'
        // ]);
        
        // $image = $req->file('image');

        $filename = $req->image->getClientOriginalName();

        $req->image->move(public_path('all-images'), $filename);

        // $user->update([
        //     'image' => $filename
        // ]);

        $req->user()->stories()->create([
            'title' => $req->title,
            'body' => $filename,
            'type' => 'Laugh'
        ]);

        return back()->with('success', ' ');

    }


    public function negative(Request $req){

        $req->user()->stories()->create([
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
