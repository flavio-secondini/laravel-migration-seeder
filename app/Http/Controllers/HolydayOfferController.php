<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Holyday_offer;

class HolydayOfferController extends Controller
{
  public function lista() {
    $holyday_offers = Holyday_offer::all();
    return view('holyday_offers', compact('holyday_offers'));
  }
}
