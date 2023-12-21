<?php

namespace App\Http\Controllers;

use App\Note;
use App\Card;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    //

    // Method 1
    public function store(Request $request, Card $card)
    {

        // approach 1
//        $note = new Note;
//        $note->body = $request->body;
//        $card->notes()->save($note);
//        return back();

        // approach 2
//        $note = new Note(['body' => $request->body]);
//        $note->body = $request->body;
//        $card->notes()->save($note);

        // Method 2
//    public function store()
//    {
//        return \Request::all();
//        return request()->all();
//    }


        // approach 3
//        $card->notes()->save(
//            new Note(['body' => $request->body])
//        );


    // Method 4
//        $card->notes()->create([
//            'body' => $request->body
//        ]);
//
//





// Method 4
        $card->addNote(
            new Note($request->all())
        );
        return back();

    }

}
