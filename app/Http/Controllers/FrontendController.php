<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function Home()
    {
        return view('frontend.partial.home');
    }

    public function PhysioBio()
    {
        return view('frontend.partial.becomephysiobio');
    }
    public function Physio()
    {
        return view('frontend.becomephysio');
    }
}
