<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Member;


class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $members = Member::paginate(10); 
        return $members; 
        // return view('admin/members/all-members', [
        //     'members' => $members]);
    }

    public function edit($id){
              
        $member = Member::find($id);  // go into database and find the Member pivoting off of id
     
        return view('admin/food-members/edit', [
            'member' => $member
        ]);
    }
    public function create(){
   
        return view('admin/food-members/create');
    } 
    public function store(){
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', ],
            'image_url' => ['required', 'string']
        ]);   
        // return request()->all();
        $member = new Member();
        $member->title = request('title'); 
        $member->description = request('description'); 
        $member->image_url = request('image_url');
        $member->save(); 

        return redirect('/admin/food-members');
    
    }   
    public function update($id){
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', ],
            'image_url' => ['required', 'string']
        ]);     

         // return request()->all();
         $member = Member::find($id);
         $member->title = request('title'); 
         $member->description = request('description'); 
         $member->image_url = request('image_url');
         $member->save(); 
 
         return redirect('/admin/food-members');
       
        // $user = Member::find($id);  // go into database and find the Member pivoting off of id
        // $roles = Role::All();
        // return view('admin/food-members/edit', [
        //     'user' => $user, 
        //     'roles' => $roles
        // ]);
    }

    public function delete($id){
        $member = Member::find($id); 
        $member->delete(); 
        return redirect('/admin/food-members');
    }
}
