<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reservation;

class ReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function edit(){
    //     return view('admin/reservations/edit');
    // }
    // public function create(){
    //     return view('admin/reservations/create');
    // }   

    public function index(){
        $reservations = Reservation::paginate(10); 
        return view('admin/reservations/all', [
            'reservations' => $reservations]);
    }

    public function edit($id){
              
        $reservation = Reservation::find($id);  // go into database and find the Reservation pivoting off of id
     
        return view('admin/reservations/edit', [
            'reservation' => $reservation
        ]);
    }
    public function create(){
   
        return view('admin/reservations/create');
    } 
    public function store(){
        request()->validate([
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'guests_total' => ['required', 'string'],
            'time' => ['required'],
           
         
        ]);   
        // return request()->all();
        $reservation = new Reservation();
        $reservation->email= request('email'); 
        $reservation->phone_number = request('phone_number'); 
        $reservation->guests_total = request('guests_total');
        $reservation->time = request('time');
        $reservation->save(); 

        return redirect('/admin/reservations');
    
    }   
    public function update($id){
        request()->validate([
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'guests_total' => ['required', 'string'],
            'time' => ['required'],
           
         
        ]);   

         // return request()->all();
         $reservation = new Reservation();
         $reservation->email= request('email'); 
         $reservation->phone_number = request('phone_number'); 
         $reservation->guests_total = request('guests_total');
         $reservation->time = request('time');
         $reservation->save(); 
 
         return redirect('/admin/reservations');
       
    
    }

    public function delete($id){
        $reservation = Reservation::find($id); 
        $reservation->delete(); 
        return redirect('/admin/reservations');
    }
}
