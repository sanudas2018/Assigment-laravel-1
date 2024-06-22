<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare variables
        $name = "Donal Trump";
        $age = "75";

        // Create the data array
        $data = [
            // এভাবে ও করা যেতে পারে: index(Request $request) 'id' => $request -> id, 
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];
        // Set cookie variables
        $name = "access_token";
        $value = "123-XYZ";
        $minutes = "1";
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;


        // Assign the cookie variables
        $cookie = cookie(
            $name, // name
            $value, // value
            $minutes, // minutes
            $path, // path
            $domain, // domain
            $secure, // secure
            $httpOnly // httpOnly
        );

        // Return the response with data and cookie and HTTP Request
        return response()->json($data, 200)->cookie($cookie);
    }
}
