<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;

class UserController extends Controller
{
    //
    public function home($id) {
        $user = User::find($id);
        $transaction = Transaction::where('user_id', $id)->get();
        $star = count($transaction);

        $hour = date('G');
        if($hour >= 0 && $hour <= 12) {
            $greet = 'Good Morning';
        } else if($hour > 12 && $hour <= 18) {
            $greet = 'Good Afternoon';
        } else {
            $greet = 'Good Evening';
        }

        return view('/page/homepage', [
            'title' => "Profile",
            'greet' => $greet,
            'users' => $user,
            'stars' => $star
        ]);
    }
}
