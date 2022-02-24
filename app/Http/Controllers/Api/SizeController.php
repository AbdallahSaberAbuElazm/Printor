<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LayoutResource;
use App\Http\Resources\PaperTypeResource;
use App\Http\Resources\SideResource;
use App\Http\Resources\SizeResource;
use App\Http\Resources\WrappingResource;
use App\Models\Size;
use App\Models\Wrapping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SizeResource::collection(SizeResource::collection(Size::all()));
    }

    public function showPaperTypes($id)
    {
        return PaperTypeResource::collection(Size::find($id)->paperTypes);
    }

    public function showLayouts($id)
    {
        return LayoutResource::collection(Size::find($id)->layouts);
    }

    public function showSides($id)
    {
        return SideResource::collection(Size::find($id)->sides);
    }

    public function showPaperTypeWrapping($id,$pid)
    {
        $collection = collect([]);
        $paperTypeWrapping =  DB::table('paper_type_wrapping')->where([['size_id', $id], ['paper_type_id', '=', $pid]])->get();
        foreach ($paperTypeWrapping as $wrapping) {
            $collection->push(Wrapping::find($wrapping->wrapping_id));
        }
        return WrappingResource::collection($collection);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function show(Size $size)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function edit(Size $size)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Size $size)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy(Size $size)
    {
        //
    }
}
