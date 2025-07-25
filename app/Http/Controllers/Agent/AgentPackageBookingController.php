<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\PackageConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class AgentPackageBookingController extends Controller
{
    public function AgentPackageBookingList()
    {
        $title = 'Agent Package Booking List';

        $agent_package_booking_list = PackageConfirmation::where('user_type', 'agent')
            ->where('created_by', Auth::user()->id)
            ->orderBy('id', 'asc')
            ->get();

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
    } // End Method

    public function AgentPackageBookingStore(Request $request)
    {
        DB::beginTransaction();

        $validator = Validator::make(
            $request->all(),
            [
                'package_id' => 'required|exists:packages,id',
                'user_name' => 'required|string|max:255',
                'user_phone' => 'required|string|max:20',
                'user_email' => 'nullable|email|max:255',
                'user_message' => 'nullable|string',
                'nid_passport' => 'nullable|image|max:2048',
            ],
            [
                'package_id.required' => 'Package is required.',
                'package_id.exists' => 'Selected package does not exist.',
                'user_name.required' => 'Name is required.',
                'user_phone.required' => 'Phone number is required.',
                'nid_passport.image' => 'The NID/Passport must be an image.',
                'nid_passport.max' => 'The NID/Passport may not be greater than 2MB.',
            ],
        );

        try {
            $data = new PackageConfirmation();
            $data->package_id = $request->package_id;
            $data->user_name = $request->user_name;
            $data->user_phone = $request->user_phone;
            $data->user_email = $request->user_email;
            $data->user_message = $request->user_message;
            $data->user_type = 'agent';
            $data->created_by = Auth::user()->id;

            if ($request->file('nid_passport')) {
                $nid_passport = $request->file('nid_passport');
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()) . '.' . $nid_passport->getClientOriginalExtension();
                $image = $manager->read($nid_passport);
                // $image->resize(810, 504);
                $image->toJpeg(80)->save(public_path('uploads/packages/package_booking/' . $name_gen));
                $data->nid_passport = 'uploads/packages/package_booking/' . $name_gen;
            }

            $data->save();

            DB::commit();

            return redirect()->route('agent.package_booking.list')->with('success', 'Agent Package Booking Created Successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Error occurred while creating Agent Package Booking: ' . $e->getMessage());

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            } else {
                return redirect()->back()->with('error', 'Something Went Wrong!');
            }
        }
    } // End Method

    public function AgentPackageBookingDelete($id)
    {
        DB::beginTransaction();

        try {
            $data = PackageConfirmation::findOrFail($id);

            if (!$data) {
                abort(404);
            }

            $filePath = public_path($data->nid_passport);
            if (is_file($filePath) && file_exists($filePath)) {
                unlink($filePath);
            }

            $data->delete();

            DB::commit();

            return redirect()->route('agent.package_booking.list')->with('success', 'Agent Package Booking Deleted Successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Error occurred while deleting agent package booking: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    } // End Method

    public function AgentPackageBookingEdit($id)
    {
        $title = 'Agent Package Booking Edit';

        $agent_package_booking_data = PackageConfirmation::findOrFail($id);

        return view('agent.package_booking.edit', compact('title', 'agent_package_booking_data'));
    } // End Method

    public function AgentPackageBookingUpdate(Request $request)
    {
        DB::beginTransaction();

        $validator = Validator::make(
            $request->all(),
            [
                'id' => 'required|integer',
                'package_id' => 'required|exists:packages,id',
                'user_name' => 'required|string|max:255',
                'user_phone' => 'required|string|max:20',
                'user_email' => 'nullable|email|max:255',
                'user_message' => 'nullable|string',
                'nid_passport' => 'nullable|image|max:2048',
            ],
            [
                'id.required' => 'Slider ID is required',
                'package_id.required' => 'Package is required.',
                'package_id.exists' => 'Selected package does not exist.',
                'user_name.required' => 'Name is required.',
                'user_phone.required' => 'Phone number is required.',
                'nid_passport.image' => 'The NID/Passport must be an image.',
                'nid_passport.max' => 'The NID/Passport may not be greater than 2MB.',
            ],
        );

        try {
            $data = PackageConfirmation::findOrFail($request->id);

            if (!$data) {
                abort(404);
            }

            $data->package_id = $request->package_id;
            $data->user_name = $request->user_name;
            $data->user_phone = $request->user_phone;
            $data->user_email = $request->user_email;
            $data->user_message = $request->user_message;
            $data->updated_by = Auth::user()->id;

            if ($request->file('nid_passport')) {
                if (file_exists(public_path($data->nid_passport))) {
                    unlink(public_path($data->nid_passport));
                }
                $nid_passport = $request->file('nid_passport');
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()) . '.' . $nid_passport->getClientOriginalExtension();
                $image = $manager->read($nid_passport);
                // $image->resize(810, 504);
                $image->toJpeg(80)->save(public_path('uploads/packages/package_booking/' . $name_gen));
                $data->nid_passport = 'uploads/packages/package_booking/' . $name_gen;
            }

            $data->save();

            DB::commit();

            return redirect()->route('agent.package_booking.list')->with('success', 'Agent Package Booking Updated Successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Error occurred while updating Agent Package Booking: ' . $e->getMessage());

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            } else {
                return redirect()->back()->with('error', 'Something Went Wrong!');
            }
        }
    } // End Method
}
