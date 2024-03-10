<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\RegularUser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegularUserController extends Controller
{
    public function index()
    {
        return view('frontend.auth.user_login');
    }

    public function register_view(Request $request)
    {

        return view('frontend.auth.user_register');
    }

    public function data()
    {
        return view('frontend.profile.Referrral');
    }

    public function register(Request $request)
    {

        $isExists = RegularUser::where('email', $request->email)->exists();

        if ($isExists) {
            $notification = array(
                'message' => 'Email Already Exists!',
            );
            return redirect()->route('regular_user_register_form')->with($notification);
        } else {
            $generate_user_id = random_int(100000, 999999);
            RegularUser::insert([
                'whatsapp' => $request->whatsapp,
                'username' => $request->username,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'user_id' => $generate_user_id,
                'reference_by' => $request->code,
                'created_at' => Carbon::now()
            ]);
            $notification = array(
                'message' => 'User Registration Successfully',
            );
            return redirect()->route('regular_user_login_form')->with($notification);
        }
    }

    public function login(LoginRequest $request)
    {

            $check = $request->all();
            $data = [
                'email' => $check['email'],
                'password' => $check['password']
            ];
            if (Auth::guard('regular_user')->attempt($data)) {

                $notification = array(
                    'message' => 'User Login Successfully',
                );
                return redirect()->route('regular_user_profile')->with($notification);
            } else {
                $notification = array(
                    'message' => 'Invalid Credentials',
                );
                return back()->with($notification);
            }
    }

    public function dashboard()
    {
        return view('frontend.dashboard.user_dashboard');
    }

    public function logout()
    {
        Auth::guard('regular_user')->logout();
        $notification = array(
            'message' => 'Logged out',
        );
        return redirect()->route('regular_user_login_form')->with($notification);
    }

    public function profile()
    {
        // Get the authenticated regular user
        $user = Auth::guard('regular_user')->user();

        // Pass the user data to the view
        return view('frontend.profile.user_profile', compact('user'));
    }
}
