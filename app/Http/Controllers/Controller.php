<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Employer;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getTreeEmployers(Request $request)
    {
        $employers = Employer::orderBy('full_name')->get();
        if($request->ajax()) {
            return view('pages.employers.tree.content', compact('employers'));
        }
        return view('pages.employers.tree.index', compact('employers'));
    }
}
