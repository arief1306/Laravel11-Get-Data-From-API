<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index()
    {
        //This function will get data from https://api.coindesk.com/v1/bpi/currentprice.json
        $response = Http::get('https://api.coindesk.com/v1/bpi/currentprice.json');

        //This function will take the response and convert it to array
        $bitcoinData = $response->json();

        $data = $bitcoinData['bpi'];

        return view('welcome', compact('data'));
    }
}
