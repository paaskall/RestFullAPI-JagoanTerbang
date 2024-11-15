<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Airline;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
    /**
     * Display a listing of all airlines.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airlines = airline::all();
        return response()->json([
            'status' => true,
            'message' => 'Airlines found',
            'data' => $airlines
        ], 200);
    }
}
