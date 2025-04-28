<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\PackageConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class PackageController extends Controller
{
    public function PackageList()
    {
        $title = 'Package List';

        $packages = Package::orderBy('id', 'asc')->get();

        return view('backend.packages.list', compact('title', 'packages'));
    } // End Method

    public function PackageAdd()
    {
        $title = 'Package Add';
        $packages = Package::all();

        return view('backend.packages.add', compact('title', 'packages'));
    } // End Method

    public function PackageStore(Request $request)
    {
        DB::beginTransaction();

        try {
            $data = new Package();
            $data->package_name = $request->package_name;
            $data->package_name_slug = strtolower(str_replace(' ', '-', $request->package_name_slug));
            $data->package_short_description = $request->package_short_description;
            $data->package_long_description = $request->package_long_description;
            $data->package_price_with_food = $request->package_price_with_food;
            $data->package_price_without_food = $request->package_price_without_food;
            $data->package_duration_start = $request->package_duration_start;
            $data->package_duration = $request->package_duration;
            $data->package_hotel_makkah = $request->package_hotel_makkah;
            $data->package_hotel_madinah = $request->package_hotel_madinah;
            $data->package_flights_up = $request->package_flights_up;
            $data->package_flights_down = $request->package_flights_down;
            $data->package_land_transport = $request->package_land_transport;
            $data->package_food = $request->package_food;
            $data->package_special_services = $request->package_special_services;
            $data->package_type = $request->package_type;

            if ($request->file('package_image')) {
                $package_image = $request->file('package_image');
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()) . '.' . $package_image->getClientOriginalExtension();
                $image = $manager->read($package_image);
                $image->resize(810, 504);
                $image->toJpeg(80)->save(public_path('uploads/packages/' . $name_gen));
                $data->package_image = 'uploads/packages/' . $name_gen;
            }

            $data->save();

            DB::commit();

            return redirect()->route('admin.package.list')->with('success', 'Package created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error occurred while creating package: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!')->withInput();
        }
    } // End Method

    public function PackageEdit($id)
    {
        $title = 'Package Edit';
        $packages = Package::findOrFail($id);
        return view('backend.packages.edit', compact('title', 'packages'));
    } // End Method

    public function PackageUpdate(Request $request)
    {
        DB::beginTransaction();

        try {
            $data = Package::findOrFail($request->id);
            if (!$data) {
                abort(404);
            }
            $data->package_name = $request->package_name;
            $data->package_name_slug = strtolower(str_replace(' ', '-', $request->package_name_slug));
            $data->package_short_description = $request->package_short_description;
            $data->package_long_description = $request->package_long_description;
            $data->package_price_with_food = $request->package_price_with_food;
            $data->package_price_without_food = $request->package_price_without_food;
            $data->package_duration_start = $request->package_duration_start;
            $data->package_duration = $request->package_duration;
            $data->package_hotel_makkah = $request->package_hotel_makkah;
            $data->package_hotel_madinah = $request->package_hotel_madinah;
            $data->package_flights_up = $request->package_flights_up;
            $data->package_flights_down = $request->package_flights_down;
            $data->package_land_transport = $request->package_land_transport;
            $data->package_food = $request->package_food;
            $data->package_special_services = $request->package_special_services;
            $data->package_type = $request->package_type;
            $data->package_status = $request->package_status;

            if ($request->file('package_image')) {
                if (file_exists(base_path('public/' . $data->package_image))) {
                    unlink(base_path('public/' . $data->package_image));
                }
                $package_image = $request->file('package_image');
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()) . '.' . $package_image->getClientOriginalExtension();
                $image = $manager->read($package_image);
                $image->resize(810, 504);
                $image->toJpeg(80)->save(public_path('uploads/packages/' . $name_gen));
                $data->package_image = 'uploads/packages/' . $name_gen;
            }

            $data->save();

            DB::commit();

            return redirect()->route('admin.package.list')->with('success', 'Package updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error occurred while updating package: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!')->withInput();
        }
    } // End Method

    public function PackageDelete($id)
    {
        DB::beginTransaction();

        try {
            $data = Package::findOrFail($id);

            if (!$data) {
                abort(404);
            }

            $imagePath = public_path($data->package_image);
            if (is_file($imagePath) && file_exists($imagePath)) {
                unlink($imagePath);
            }

            $data->delete();

            DB::commit();
            return redirect()->back()->with('success', 'Package deleted successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error occurred while deleting package: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!')->withInput();
        }
    } // End Method

    // ==========================================================================
    //                  Package Confirmation Message
    // ==========================================================================
    public function PackageConfirmationMessage()
    {
        $title = 'Package Booking List';

        $package_confirmation_message = PackageConfirmation::latest()->get();

        return view('backend.packages.confirmation_message', compact('title', 'package_confirmation_message'));
    } // End Method

    public function PackageConfirmationStatus(Request $request)
    {
        try {
            DB::beginTransaction();

            $data = PackageConfirmation::findOrFail($request->id);
            $data->status = $request->status;
            $data->save();

            DB::commit();

            return redirect()->route('admin.package.confirmation.message')->with('success', 'Package Booking Status Updated Successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error occurred while updating package booking status: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function PackageConfirmationDelete($id)
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

            return redirect()->route('admin.package.confirmation.message')->with('success', 'Package Booking Deleted Successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Error occurred while deleting package booking: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    } // End Method

    public function PackageConfirmationBulkDelete(Request $request)
    {
        $ids = $request->ids;
        if (!empty($ids)) {
            $files = PackageConfirmation::whereIn('id', $ids)->pluck('nid_passport');

            foreach ($files as $file) {
                $filePath = public_path($file);
                if (is_file($filePath) && file_exists($filePath)) {
                    unlink($filePath);
                }
            }

            PackageConfirmation::whereIn('id', $ids)->delete();

            return redirect()->back()->with('success', 'Selected package bookings have been deleted successfully');
        }
        return redirect()->back()->with('error', 'No package bookings selected for deletion');
    }
}
