<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller {

    public function home(Request $request) {

        return view('web.home');
    }

    public function team(Request $request) {

        return view('web.team');
    }

    public function testimonials(Request $request) {

        return view('web.testimonials');
    }

    public function about(Request $request) {

        return view('web.about');
    }

    public function contact(Request $request) {

        return view('web.contact');
    }
}
