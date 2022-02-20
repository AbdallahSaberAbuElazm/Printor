<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::with(['customer','payments'])->paginate(env('PAGINATION_CODE'));
        return $orders;
      }
}
