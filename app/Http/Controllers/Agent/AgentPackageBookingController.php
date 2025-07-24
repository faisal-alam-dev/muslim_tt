<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\PackageConfirmation;
use Illuminate\Http\Request;

class AgentPackageBookingController extends Controller
{
    public function AgentPackageBookingList()
    {
        $title = 'Agent Package Booking List';

        $agent_package_booking_list = PackageConfirmation::latest()->get();

        return view('agent.package_booking.list', compact('title', 'agent_package_booking_list'));
    } // End Method

    public function AgentPackageBookingAdd()
    {
        $title = 'Agent Package Booking Add';

        return view('agent.package_booking.add', compact('title'));
    } // End Method

    public function getPackagesByType(Request $request)
    {
        $packageType = $request->package_type;

        $packages = Package::where('package_type', $packageType)->where('package_status', 'active')->get();

        return response()->json($packages);
    }
}
