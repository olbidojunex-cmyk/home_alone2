<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        return view('branch.item', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'item_name' => 'required',
            'item_serialno' => 'required',
            'item_quantity' => 'required|integer',
            'date_issued' => 'required|date',
            'date_received' => 'nullable|date',
            'item_status' => 'required|in:good,damage,lost',
        ]);

        Item::create([
            'item_name' => $request->item_name,
            'item_serialno' => $request->item_serialno,
            'item_quantity' => $request->item_quantity,
            'date_issued' => $request->date_issued,
            'date_received' => $request->date_received,
            'item_status' => $request->item_status,

        ]);
        return redirect()->back()->with('success', 'Added1!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}
