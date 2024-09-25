<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; 

class CryptoSearchController extends Controller
{
    public function index() {
        return view('search.index'); 
    }

    public function fetchCryptoData(Request $request)
    {
        $request->validate([
            'symbols' => 'required|string',
            
        ]);

        $symbols = $request->input('symbols');
        $apiKey = 'cabe8075-6c23-4b3e-9ef2-efb81df31fc5';

        $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest';
        $parameters = [
            'symbol' => $symbols,
        ];

        $response = Http::withHeaders([
            'X-CMC_PRO_API_KEY' => $apiKey,
            'Accepts' => 'application/json',
        ])->get($url, $parameters);

        if ($response->successful()) {
            $data = $response->json();

             
        $cryptoData = [];
        foreach ($data['data'] as $symbol => $crypto) {
            $cryptoData[] = [
                'symbol' => $crypto['symbol'],
                'cmc_rank' => $crypto['cmc_rank'],
                'price_usd' => $crypto['quote']['USD']['price'],
                'percent_change_24h' => $crypto['quote']['USD']['percent_change_24h'],
            ];
        }

        return view('search.result', ['cryptoData' => $cryptoData]);
    } else {
        return view('search.result', ['error' => 'Failed to fetch data']);
    }
    }
}
