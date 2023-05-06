<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function how(){
        return view('pages.how');
    }

    public function what(){
        return view('pages.what');
    }

    public function stock(){
        return view('pages.stock');
    }

    public function services(){
        return view('pages.services');
    }

    public function indexfund(){
        return view('pages.indexfund');
    }

    public function etf(){
        return view('pages.etf');
    }

    public function real(){
        return view('pages.real');
    }

    public function fin(){
        return view('pages.fin');
    }

    public function stock_market(){
        return view('pages.stock_market');
    }
    public function types(){
        return view('pages.types');
    }

    public function sector(){
        return view('pages.sector');
    }

    public function indexes(){
        return view('pages.indexes');
    }

    public function sp(){
        return view('pages.sp');
    }

    public function dow(){
        return view('pages.dow');
    }

    public function nas(){
        return view('pages.nas');
    }


    public function latest(){
        return view('pages.latest');
    }
    /////stocls


    public function growth(){
        return view('stocks.growth');
    }


    
    public function value(){
        return view('stocks.value');
    }


     
    public function dividend(){
        return view('stocks.dividend');
    }

    public function small(){
        return view('stocks.small');
    }

    public function large(){
        return view('stocks.large');
    }


    public function blue(){
        return view('stocks.blue');
    }

    public function howto(){
        return view('stocks.howto');
    }


    public function consumer(){
        return view('stocks.consumer');
    }


    public function tech(){
        return view('stocks.tech');
    }


    public function energy(){
        return view('stocks.energy');
    }




    public function health(){
        return view('stocks.health');
    }

    public function financial(){
        return view('stocks.financial');
    }

    public function to(){
        return view('stocks.to');
    }

    public function nft(){
        return view('stocks.nft');
    }
    public function top(){
        return view('stocks.top');
    }
    public function news(){
        return view('stocks.news');
    }

    public function about(){
        return view('about.about');
    }

    public function phy(){
        return view('about.phy');
    }

    public function review(){
        return view('about.review');
    }

    
    public function room(){
        return view('about.room');
    }

    public function foo(){
        return view('about.foo');
    }


    public function contact(){
        return view('about.contact');
    }


    
    public function facebook(){
        return view('about.facebook');
    }
}
