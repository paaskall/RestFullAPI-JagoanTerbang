<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Handle API login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required', 'string'],
            'password' => ['required', 'min:8'],
        ]);

        if (Auth::attempt(['name' => $credentials['name'], 'password' => $credentials['password']])) {
            $user = Auth::user();
            $token = $user->createToken('penerbangan')->plainTextToken;

            // Redirect to dashboard with API token
            return redirect()->route('dokumentasi')->with('token', $token);
        }

        // Redirect back with error message
        return redirect()->back()->with('error', 'The credentials do not match.');
    }

    public function masuk()
    {
        return view('auth.masuk');
    }
}
