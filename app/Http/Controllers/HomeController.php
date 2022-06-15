<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        // if(Auth::user()->role_id == 1){
        //     $users = Member::join('users', 'account_id', 'users.id')
        //         ->select('name', 'avatar' , 'username')
        //         ->take(6)
        //         ->get();
        // return view('shared.home', compact('users', $users));
        // }
        //else{
            $id = Member::where('account_id', Auth::id())->first()->id;
            $user = Member::join('users', 'account_id', 'users.id')
            ->join('roles', 'role_id', 'roles.id')
            ->join('departments', 'department_id', 'departments.id')
            ->join('positions', 'position_id', 'positions.id')
            ->where('members.id', $id)
            ->select('members.id','members.name', 'account_id', 'date_of_birth', 'sex', 'address' ,'avatar', 'phone', 'email' , 'username', DB::raw('departments.name as department_name, positions.name as position_name, roles.name as role_name'))
            ->first();
            return view('shared.home', compact('user', $user)); 
        //}
    }
}