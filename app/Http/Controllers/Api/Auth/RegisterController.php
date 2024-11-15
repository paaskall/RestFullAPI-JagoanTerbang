<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\QueryException;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        try {
            $request->validate([
                'name' => ['required', 'min:3', 'unique:users,name'],
                'email' => ['required', 'email', 'unique:users,email'],
                'password' => ['required', 'min:8', 'confirmed']
            ]);

            $registered = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            // Redirect ke halaman login dengan pesan sukses
            return redirect()->route('login.form')->with('success', 'Registration successful. Please login.');

        } catch (ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput();

        } catch (QueryException $e) {
            return redirect()->back()
                ->with('error', 'Registration failed. There was a problem creating the user.')
                ->withInput();

        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Registration failed. ' . $e->getMessage())
                ->withInput();
        }
    }

    public function daftar()
    {
        return view('auth.daftar');
    }
}
