<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User; 
use App\Member; 
use DB; 
use App\Reservation;


class AdminController extends Controller
{
    public function dashboard(){
       $estimated_income_last_30 = DB::select(DB::raw('
        SELECT 
	(sum(guests_total) *27 ) as total
	FROM blogoz.reservations 
	WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()
')); 
   
     $total_customers_last_30 = DB::select(DB::raw('
     SELECT 
         sum(guests_total) as total
         FROM blogoz.reservations 
         WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()
     ')); 

     $total_reservations_last_30 = DB::select(DB::raw('
     SELECT 
     count(*) as total
     FROM blogoz.reservations 
     WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()
     ')); 

     $total_employees_last_30 = DB::select(DB::raw('
     SELECT 
     count(*) as total
     FROM blogoz.users 
     INNER JOIN role_user on role_user.id = users.id
     INNER JOIN roles on roles.id = role_user.role_id
     WHERE role_id = 2
     ')); 

    
        return view('admin/dashboard',[
            "estimated_income_last_30" => "$".$estimated_income_last_30[0]->total,
            "total_customers_last_30" =>$total_customers_last_30[0]->total,
            "total_reservations_last_30" =>$total_reservations_last_30[0]->total,
            "total_employees_last_30" =>$total_employees_last_30[0]->total
        ]);

       
     
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
