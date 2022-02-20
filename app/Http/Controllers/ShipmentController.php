<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    public function index(){
        $shipments = Shipment::with(['customer','order','payment','libraryOwner'])->paginate(env('PAGINATION_CODE'));
        return $shipments;
      }
}
