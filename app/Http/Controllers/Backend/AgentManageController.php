<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PackageConfirmation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AgentManageController extends Controller
{
    public function AgentList()
    {
        $title = 'Agent List';

        $agent_data = User::withCount('packageConfirmations')->orderBy('id', 'asc')->where('role', 'agent')->get();

        return view('backend.agent_manage.agent_list', compact('title', 'agent_data'));
    } // End Method

    public function AgentPackageBookingList($agent_id)
    {
        $agent = User::findOrFail($agent_id);

        $title = 'Agent Package Booking List - ' . $agent->name;

        $agent_package_booking_data = PackageConfirmation::where('created_by', $agent_id)->orderBy('id', 'asc')->get();

        return View::make('backend.agent_manage.agent_package_book_list', compact('title', 'agent_package_booking_data'));
    }
}
