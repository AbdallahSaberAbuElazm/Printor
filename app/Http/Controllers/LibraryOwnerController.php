<?php

namespace App\Http\Controllers;

use App\Models\LibraryOwner;
use Illuminate\Http\Request;

class LibraryOwnerController extends Controller
{
    public function index(){
        $owners = LibraryOwner::with(['user'])->paginate(env('PAGINATEION_COUNT'));
        return $owners;
    }
}
