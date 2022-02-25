<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CityResource;
use App\Http\Resources\CountryResource;
use App\Http\Resources\GovernorateResource;
use App\Models\Country as ModelsCountry;

class CountryController extends Controller
{
    public function index(){
        return CountryResource::collection(ModelsCountry::paginate());
    }

    public function showGovernorates($id){
        $country = ModelsCountry::find($id);
        return GovernorateResource::collection($country->governorates);
    }

    public function showCities($id){
        $country = ModelsCountry::find($id);
        return CityResource::collection($country->cities);
    }
}
