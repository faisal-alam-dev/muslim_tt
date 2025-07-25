<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class AgentPackageListController extends Controller
{
    public function AgentPackageList()
    {
        $title = 'Packages List';

        $packages = Package::orderBy('id', 'asc')->get();

        return view('agent.package_list.list', compact('title', 'packages'));
    } // End Method
}
