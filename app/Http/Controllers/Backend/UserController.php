<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class UserController extends Controller
{
    public function UsersList()
    {
        $title = 'User List';

        $users_data = User::withCount('packageConfirmations')->orderBy('id', 'asc')->get();

        return view('backend.users.list', compact('title', 'users_data'));
    } // End Method

    public function UserAdd()
    {
        $title = 'User Add';

        return view('backend.users.add', compact('title'));
    } // End Method

    public function UserStore(Request $request)
    {
        DB::beginTransaction();

        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'phone' => 'nullable|string|max:20',
                'address' => 'nullable|string|max:255',
                'role' => 'required|string|in:admin,agent,user',
                'status' => 'required|string|in:active,inactive',
                'password' => 'required|string|min:8',
                'thumbnail' => 'nullable|image|max:1024', // Max 1MB
            ],
            [
                'name.required' => 'Name is required',
                'email.required' => 'Email is required',
                'email.email' => 'Invalid email format',
                'email.unique' => 'This email is already taken',
                'phone.max' => 'Phone number is too long',
                'address.max' => 'Address is too long',
                'role.required' => 'Role is required',
                'role.in' => 'Invalid role selected',
                'status.required' => 'Status is required',
                'status.in' => 'Invalid status selected',
                'password.required' => 'Password is required',
                'password.min' => 'Password must be at least 8 characters',
                'thumbnail.max' => 'Thumbnail image must be less than 1MB',
            ],
        );

        try {
            $data = new User();
            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->role = $request->role;
            $data->status = $request->status;
            $data->password = Hash::make($request->password);

            if ($request->file('thumbnail')) {
                $thumbnail = $request->file('thumbnail');
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()) . '.' . $thumbnail->getClientOriginalExtension();
                $image = $manager->read($thumbnail);
                $image->resize(200, 200);
                $image->toJpeg(80)->save(public_path('uploads/user_image/' . $name_gen));
                $data->thumbnail = 'uploads/user_image/' . $name_gen;
            }

            $data->save();

            DB::commit();

            return redirect()->route('admin.users.list')->with('success', 'User Created Successfully');
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Error occurred while creating user: ' . $e->getMessage());

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            } else {
                return redirect()->back()->with('error', 'Something Went Wrong!');
            }
        }
    } // End Method

    public function UserStatusUpdate(Request $request)
    {
        try {
            DB::beginTransaction();

            $data = User::findOrFail($request->id);
            $data->status = $request->status;
            $data->save();

            DB::commit();

            return redirect()->back()->with('success', 'User Status Updated Successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error occurred while updating user status: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    } // End Method
}
