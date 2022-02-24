<?php

namespace App\Http\Controllers;

use App\Models\PaperType;
use App\Models\PaperTypeWrapping;
use App\Models\Size;
use App\Models\Wrapping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SizeController extends Controller
{
    public function index()
    {
        return Size::all();
    }
    public function showPaperTypes($id)
    {
        return Size::find($id)->paperTypes;
    }

    public function showLayouts($id)
    {
        return Size::find($id)->layouts;
    }

    public function showSides($id)
    {
        return Size::find($id)->sides;
    }

    public function showPaperTypeWrapping($id, $pid)
    {
        $collection = collect([]);
        $paperTypeWrapping =  DB::table('paper_type_wrapping')->where([['size_id', $id], ['paper_type_id', '=', $pid]])->get();
        foreach($paperTypeWrapping as $wrapping){
            $collection->push(Wrapping::find($wrapping->wrapping_id));
        }
        return $collection;
    }

    public function store()
    {
    }

    public function update(Request $request)
    {
    }

    public function delete(Request $request)
    {
    }

    public function search(Request $request)
    {
    }
}
