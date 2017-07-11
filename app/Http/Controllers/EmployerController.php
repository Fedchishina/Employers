<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employer;

class EmployerController extends Controller
{
    public function getTreeEmployers(Request $request)
    {
        $employers = Employer::orderBy('full_name')->get();
        if($request->ajax()) {
            return view('pages.employers.tree.content', compact('employers'));
        }
        return view('pages.employers.tree.index', compact('employers'));
    }

    public function getTableEmployers(Request $request)
    {
        $employers = Employer::orderBy('full_name')->get();
        if($request->ajax()) {
            return view('pages.employers.table.content', compact('employers'));
        }
        return view('pages.employers.table.index', compact('employers'));
    }
}
