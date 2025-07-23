<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class AgentController extends Controller
{
    public function AgentDashboard()
    {
        if (Auth::check() && Auth::user()->role === 'agent' && Auth::user()->status === 'active') {
            return view('agent.index');
        }
        return redirect()->route('agent.login')->withErrors('Unauthorized access.');
    } // End Method

    public function AgentLogin()
    {
        if (Auth::check() && Auth::user()->role === 'agent') {
            return redirect('agent/dashboard');
        }
        return view('agent.auth.login');
    } // End Method

    public function AgentLoginSubmit(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Redirect based on role
            if ($user->role === 'agent' && $user->status === 'active') {
                return redirect()->route('agent.dashboard');
            }

            Auth::logout();
            return back()->withErrors('Unauthorized access.');
        }

        return back()
            ->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])
            ->onlyInput('email');
    }

    public function AgentRegistration()
    {
        if (Auth::check()) {
            return redirect('agent/dashboard');
        }
        return view('agent.auth.register');
    } // End Method

    public function AgentRegistrationStore(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:users,email',
            'phone' => 'nullable|string|max:50',
            'address' => 'nullable|string|max:255',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|string|same:password',
            'terms' => 'required',
        ];

        $messages = [
            'name.required' => 'Name is required',
            'name.max' => 'Name is too long (max 100 characters)',
            'email.required' => 'Email is required',
            'email.email' => 'Please enter a valid email address',
            'email.max' => 'Email is too long (max 100 characters)',
            'email.unique' => 'This email address is already registered.',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 8 characters long',
            'confirm_password.required' => 'Confirm password is required',
            'confirm_password.same' => 'Password and confirm password do not match',
            'terms.required' => 'You must accept the terms and privacy policy',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();

        try {
            $agent_user = new User();
            $agent_user->name = $request->name;
            $agent_user->email = $request->email;
            $agent_user->phone = $request->phone;
            $agent_user->address = $request->address;
            $agent_user->password = Hash::make($request->password);
            $agent_user->role = 'agent';
            $agent_user->status = 'inactive';
            $agent_user->thumbnail = asset('user_profile.jpg');
            $agent_user->save();

            DB::commit();

            return redirect()->back()->with('success', 'Agent registered successfully. Please login.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error registering agent: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred during registration. Please try again.')->withInput();
        }
    } // End Method

    public function AgentLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('agent.login');
    } // End Method

    public function AgentProfile()
    {
        $title = 'Agent Profile';
        $agent_profile_info = Auth::user();
        return view('agent.profile.profile_view', compact('title', 'agent_profile_info'));
    } // End Method
}
