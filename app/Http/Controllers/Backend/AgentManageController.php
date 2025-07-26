<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PackageConfirmation;
use App\Models\User;
use Illuminate\Http\Request;

class AgentManageController extends Controller
{
    public function AgentList()
    {
        $title = 'Agent List';

        $agent_data = User::withCount('packageConfirmations')->orderBy('id', 'asc')->where('role', 'agent')->get();

        return view('backend.agent_manage.list', compact('title', 'agent_data'));
    } // End Method
}
