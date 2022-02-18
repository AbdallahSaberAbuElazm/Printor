<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with(['billingAddress'])->paginate(env('PAGINATION_CODE'));
        return view('admin.customers.users')->with([
            'users' => $users,
        ]);
    }

    public function show(Request $request)
    {
        return $request->user();
    }
}
