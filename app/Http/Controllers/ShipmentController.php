<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    public function index(){
        $shipments = Shipment::with(['customer','order','payment'])->paginate(env('PAGINATION_CODE'));
        return view('admin.shipments.shipments')->with([
          'shipments' => $shipments,
        ]);
      }
}
