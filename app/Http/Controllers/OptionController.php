<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function index()
    {
        $options = Option::paginate(env('PAGINATEION_COUNT'));
        return $options;
    }
}
