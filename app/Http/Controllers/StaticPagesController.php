<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Reservation; 
use App\GeneralSetting; 
use App\SocialSetting; 
use App\SeoSetting; 
use App\FoodCategory;
use App\FoodItem;  

class StaticPagesController extends Controller
{
    public function home(){
        $generalSettings = GeneralSetting::find(1); 
        $socialSettings = SocialSetting::find(1); 

        $categories = FoodCategory::all(); 
    
        return view('home', [
            "generalSettings" => $generalSettings,
            "socialSettings" => $socialSettings, 
            "categories" => $categories
        ]);
    }
    public function about(){
        return view('pages/about');
    }
    public function reservations(){
        return view('pages/reservations');
    }
    public function contact(){
        return view('pages/contact');
    }
    public function offers(){
        return view('pages/offers');
    }
    public function registerMember(){
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string', ],
            'email' => ['required', 'string'],
            'phone_number' => [ 'string']
        ]);   
        $member = new Member();
        $member->fname = request('fname'); 
        $member->lname = request('lname'); 
        $member->email = request('email');
        $member->phone_number = request('phone_number');  
        $member->save(); 
    
        return redirect('/offers/thank-you');
    
    }
    public function menu(){
        $categories = FoodCategory::all(); 
        return view('menu/all-categories', [
            'categories' => $categories]);
        return view('');
    }

    public function offersThankYou(){
        return view('pages/thank-you');
    }

    public function reservationsThankYou(){
        return view('pages/thank-you');
    }
    public function singleMenu($slug){
        $foodCategory = FoodCategory::where('title', '=', $slug)->first(); 
        $foodItems = FoodItem::where('category_id', '=', $foodCategory->id)->get(); 
        return view('menu/single-menu', [
            "foodItem" =>  ucfirst($slug),
            "foodItems" => $foodItems
        ]);
    }

   
    public function saveReservation(){
        request()->validate([
            'email' => ['required', 'string'],
            'phone_number' => ['string'],
            'guests_total' => ['required', 'string'],
            'time' => ['string'],
        ]);   
        $reservation = new Reservation();
        $reservation->email = request('email'); 
        $reservation->phone_number = request('phone_number'); 
        $reservation->guests_total = request('guests_total');
        $reservation->time = request('time');  
        $reservation->save(); 
    
        return redirect('/reservations/thank-you');
    
    }
}
