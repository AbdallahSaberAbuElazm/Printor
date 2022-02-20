<?php

namespace App\Http\Controllers;

use App\Models\Governorate;
use Illuminate\Http\Request;

class GovernorateController extends Controller
{
    public function index(){
        $governorates = Governorate::with(['country','cities'])->paginate(env('PAGINATEION_COUNT'));
        return $governorates;
      }
}
