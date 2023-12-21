<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    //
    public function index()
    {
        $cards = Card::all();
        return view('cards.index', compact('cards'));

    }

//    Method 1: from Routes file
    public function show($id)
    {
        $card = Card::find($id);
        //return $card; not working . It is throwing error as "A four digit year could not be found Data missing" But below method works fine
        return view('cards.show', compact('card'));
    }

//     Method 2: from Route files
//    public function show(Card $card)
//    {
//        return $card;
//
//    }
}
