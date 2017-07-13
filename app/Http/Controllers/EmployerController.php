<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employer;

class EmployerController extends Controller
{
    public function getTreeEmployers(Request $request)
    {
        $employers = Employer::get()->toTree();
        dd($employers);
        if($request->ajax()) {
            return view('pages.employers.tree.content', compact('employers'));
        }
        return view('pages.employers.tree.index', compact('employers'));
    }

    public function getTableEmployers(Request $request)
    {
        $isTbody = false;
        $input = $request->all();
        $query = Employer::join('employers', 'employers.id', '=', 'employers.parent_id');
        $query = Employer::join('positions', 'positions.id', '=', 'employers.position_id');

        if (isset($input['searchVal'])){
            $isTbody = true;
            $searchVal = $input['searchVal'];
            $query->where('full_name',$searchVal)
                ->orWhere('positions.name', $searchVal)
                ->orWhere('employers.full_name', $searchVal)
                ->orWhere('date_beg_work', $searchVal);
        }
        if (isset($input['orderVal'])) {
            $query->orderBy($input['orderVal'], $input['orderType']);
            $isTbody = true;
        }

        $employers = $query->get();

        if($request->ajax()) {
            return view($isTbody ? 'pages.employers.table.tbody' : 'pages.employers.table.content', compact('employers'));
        }

        return view('pages.employers.table.index', compact('employers'));
    }
}
