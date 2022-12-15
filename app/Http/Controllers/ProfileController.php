<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index() {
        return view('pages.profile.index');
    }

    public function event() {
        return view('pages.profile.event');
    }

    public function membership() {
        $user = Auth::user();

        $memberships = Membership::where('id', '>', Auth::user()->membership->id)->get();

        return view('pages.profile.membership', compact('user', 'memberships'));
    }

    public function checkout($id) {
        $membership = Membership::find($id);

        return view('pages.profile.checkout', compact('membership'));
    }

    public function security() {
        return view('pages.profile.security');
    }
}
