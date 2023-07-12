<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function landing()
    {
        return view('content.dashboard.landing');
    }

    public function index()
    {
        return view('content.dashboard.index');
    }

    // public function index()
    // {
    //     // Retrieve the API token from the session
    //     $apiToken = Session::get('api_token');

    //     // Perform authentication or authorization using the API token

    //     // Example: Perform an API request using the token
    //     $client = new Client();
    //     $response = $client->get('https://ess.cmsmaju.co.id/api/v1/my-profile', [
    //         'headers' => [
    //             'Authorization' => 'Bearer ' . $apiToken,
    //         ],
    //     ]);

    //     if ($response->getStatusCode() === 201) {
    //         // Authentication or authorization successful
    //         $userData = json_decode($response->getBody(), true);

    //         // Process the user data or perform other actions
    //         // ...

    //         // Return the dashboard view
    //         return view('dashboard', ['userData' => $userData]);
    //     } else {
    //         // Authentication or authorization failed
    //         // Handle the failure case
    //         // ...

    //         // Redirect back with an error message
    //         return redirect()->back()->with('error', 'Authentication failed.');
    //     }
    // }
}
