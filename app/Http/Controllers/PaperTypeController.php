<?php

namespace App\Http\Controllers;

use App\Models\PaperType;
use Illuminate\Http\Request;

class PaperTypeController extends Controller
{
    public function showWrapping($id){
        return PaperType::find($id)->wrapping;
    }
}
