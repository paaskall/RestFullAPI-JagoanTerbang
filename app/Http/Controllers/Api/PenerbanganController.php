<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Penerbangan;
use Illuminate\Http\Request;

class PenerbanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Penerbangan::orderBy('id', 'asc')->get();
        return response()->json([
            'status' => true,
            'message' => 'Flights found',
            'data' => $data
        ], 200);
    }

    public function getBySourceDestinationAndAirline(Request $request)
    {
        // Check for HTTP method
        if (!$request->isMethod('get')) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid HTTP method. Please use GET.'
            ], 405); // 405 Method Not Allowed
        }

        // Retrieve query parameters
        $source = $request->query('source');
        $destination = $request->query('destination');
        $airline = $request->query('airline');

        // Validate required parameters
        if (!$source || !$destination) {
            $missingParams = [];
            if (!$source) $missingParams[] = 'source';
            if (!$destination) $missingParams[] = 'destination';

            return response()->json([
                'status' => false,
                'message' => 'Missing required parameters: ' . implode(', ', $missingParams)
            ], 400); // 400 Bad Request
        }

        // Build the query
        $query = Penerbangan::where('source', $source)
                            ->where('destination', $destination);

        if ($airline) {
            $query->where('airline', $airline);
        }

        // Execute the query and get the results
        $data = $query->get();

        // Check if data is found
        if ($data->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'No flights found with source ' . $source . ', destination ' . $destination . ' and airline ' . ($airline ?: 'any')
            ], 404); // 404 Not Found
        } else {
            return response()->json([
                'status' => true,
                'message' => 'Flights found with source ' . $source . ', destination ' . $destination . ' and airline ' . ($airline ?: 'any'),
                'data' => $data
            ], 200); // 200 OK
        }
    }


    /** public function getByDestinationAndSource(Request $request)
    *{
    *   $destination = $request->query('destination');
    *   $source = $request->query('source');

    *    if (!$destination) {
    *       return response()->json([
    *            'status' => false,
    *            'message' => 'Destination is required'
    *        ], 400);
    *    }
    *
    *   $query = Penerbangan::where('destination', $destination);

    *    if ($source) {
    *        $query->where('source', $source);
    *    }

    *   $data = $query->get();

    *   if ($data->isEmpty()) {
    *        return response()->json([
    *            'status' => false,
    *           'message' => 'No flights found with destination ' . $destination . ' and source ' . ($source ?: 'any')
    *        ], 404);
    *    } else {
    *       return response()->json([
    *           'status' => true,
    *           'message' => 'Flights found with destination ' . $destination . ' and source ' . ($source ?: 'any'),
    *           'data' => $data
    *       ], 200);
    *   }
    *}*/
}
