<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(){
        $reviews = Review::with(['customer','libraryOwner'])->paginate(env('PAGINATEION_COUNT'));
        return $reviews;
      }
}
