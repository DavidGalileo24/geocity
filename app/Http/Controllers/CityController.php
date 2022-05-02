<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller{

    public function readCity(){
       $infoCity = City::all();
       return response()->json($infoCity);
    }

}