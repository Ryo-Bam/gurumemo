<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        return Store::orderByDesc('id')->with('memos')->get();
    }

    public function show($store_id)
    {
        // dd($store->with('memos'));
        return Store::where('id', $store_id)->with('memos')->first();
    }

    public function showques($store_id)
    {
        return Store::where('id', $store_id)->with('questions', 'questions.responces', 'questions.user')->first();
    }

    public function create(Request $request)
    {
        // $memo_id = Store::find(1)->id;
        // $store = new Store;
        $store = Store::firstOrCreate(
            ['name' => $request->name],
            ['lat' => $request->lat, 'lng' => $request->lng]
            // ['lng' => $request->lng],
    );
        $store->save();
        // return view('layouts.app') ->with(['id'=>$store_id]);
        return $store->id;
    }
}
