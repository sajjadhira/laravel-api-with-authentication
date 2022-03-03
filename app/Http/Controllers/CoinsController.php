<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coins;

class CoinsController extends Controller
{
    public function index(Request $request){

        $allCoins = Coins::paginate(10);

        return response()->json($allCoins);


    }


    public function store(Request $request){

         $request->validate([
            'type' => 'required',
            'name' => 'required|unique:coins',
            'symbol' => 'required',
            'address' => 'required',
            'chain' => 'required',
            'market_cap' => 'required',
            'price' => 'required',
            'launch_date' => 'required',
            'description' => 'required',
            'telegram' => 'required',
            'contact_email' => 'required',
            'contact_telegram' => 'required',
            'logo_url' => 'required',
        ]);
        
        return Coins::create($request->all());

    }


    public function show($id){
        return Coins::find($id);
    }

    public function update(Request $request, $id){
    
        $coin = Coins::find($id);
        $coin->update($request->all());
        return $coin;
    }
    public function destroy($id){
        return Coins::destroy($id);
    }


    public function search($q){
        return Coins::where('name','like', '%'. $q . '%')->orWhere('symbol','like', '%'.$q.'%')->orWhere('address','like', '%' . $q . '%')->get();
    }

}
