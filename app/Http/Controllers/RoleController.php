<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        $roles = Role::with(['users'])->paginate(env('PAGINATION_CODE'));
        return view('admin.roles.roles')->with([
          'roles'=>$roles,
        ]);
      }
}
