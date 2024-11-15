<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function showData()
    {
        // Create a Guzzle client
        $client = new Client();

        // Define the API endpoint
        $url = 'http://127.0.0.1:8000/api/penerbangan';

        try {
            // Make the GET request
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Bearer 4|JaaUhC1pXaOYkq0R2Eth9fRWlOjroGWvLzyQVhlM6cfe5282',
                    'Accept'        => 'application/json',
                ],
            ]);

            // Get the response body
            $data = json_decode($response->getBody(), true);

            // Pass the data to the view
            return view('data', ['data' => $data]);

        } catch (\Exception $e) {
            // Handle the exception
            return view('data', ['error' => $e->getMessage()]);
        }
    }
}
