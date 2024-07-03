<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
class mosqueController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function about(){
        return view('frontend.about');
    }
    public function services(){
        return view('frontend.service');
    }
    public function price(){
        return view('frontend.price');
    }
    public function madani_qaida_course(){
        return view('frontend.madani_qaida_course');
    }
    public function nazra_tul_quran(){
        return view('frontend.nazra_tul_quran');
    }
    public function hifz_ul_quran(){
        return view('frontend.hifz_ul_quran');
    }
    public function tarjuma_tul_quran(){
        return view('frontend.tarjuma_tul_quran');
    }
    public function tafsir_al_quran(){
        return view('frontend.tafsir_al_quran');
    }
    public function farz_uloom_course(){
        return view('frontend.farz_uloom_course');
    }
    public function namaz_course(){
        return view('frontend.namaz_course');
    }
    public function seerat_e_mustafa_course(){
        return view('frontend.seerat_e_mustafa_course');
    }
    public function contact(){
        return view('frontend.contact');
    }


    public function info(Request $request){
        // return $request;
        return redirect(route('contact'))->with('success', 'Message Sent Successfully!!!');
    }

    public function price_form(){
        return view('frontend.price_form');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $number = $request->input('number');
        $country = $request->input('country');
        $courses = $request->input('courses');

        // Insert data into the users table
        DB::table('users')->insert([
            'name' => $name,
            'email' => $email,
            'number' => $number,
            'country' => $country,
            'courses' => $courses
        ]);

        return redirect(route('price-form'));
    }
}
