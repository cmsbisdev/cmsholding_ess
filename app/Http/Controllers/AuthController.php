<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function index()
    {
        return view('content.auth.login');
    }

    public function authenticate(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'username' => 'required',
                'password' => 'required',
            ]);

            $client = new Client();
            $response = $client->post('https://ess.cmsmaju.co.id/api/v1/login', [
                'form_params' => [
                    'username' => $validatedData['username'],
                    'password' => $validatedData['password'],
                ]
            ]);


            $data = json_decode($response->getBody(), true);

            if ($response->getStatusCode() && isset($data['data']['token'])) {

                $token = $data['data']['token'];

                Session::put('token', $token);

                return redirect()->route('dashboard')->with('success', $data['message']);
            } else {
                $error_message = $data['message'] ?? 'Login failed. Please try again.';
                return redirect()->back()->with('error', $error_message);
            }
        } catch (ValidationException $e) {
            return back()->with('Wrong', 'Incorrect email or password.');
        } catch (ClientException $e) {
            $error_response = json_decode($e->getResponse()->getBody(), true);
            $error_message = $error_response['message'] ?? 'An error occurred. Please try again later.';
            return redirect()->back()->with('Wrong', $error_message);
        }
    }

}
