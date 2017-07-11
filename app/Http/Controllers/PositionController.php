<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;
use App\Http\Requests\PositionRequest;

class PositionController extends Controller
{
    //return view with positions
    public function getPositions() {
        $positions = Position::orderBy('name')->get();
        return view('pages.positions.index', compact('positions'));
    }

    //insert position
    public function postAddPosition(PositionRequest $request)
    {
        $input = $request->all();
        Position::create($input);
        return redirect('/positions')->with([
            'success' => true,
        ]);
    }

    //update position
    public function postEditPosition(PositionRequest $request)
    {
        $input = $request->all();
        $position = Position::find($input['id']);
        $position->update($input);
        return redirect('/positions')->with([
            'success' => true,
        ]);
    }

    //delete position
    public function postDelPosition(Request $request)
    {
        $input = $request->all();
        $position = Position::find($input['id']);
        $position->delete($input);
        return redirect('/positions')->with([
            'success' => true,
        ]);
    }
}
