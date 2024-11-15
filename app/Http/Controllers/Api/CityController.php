<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of all cities.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();
        return response()->json([
            'status' => true,
            'message' => 'Cities found',
            'data' => $cities
        ], 200);
    }
}


