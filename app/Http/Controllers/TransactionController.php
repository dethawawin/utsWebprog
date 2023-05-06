<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;

class TransactionController extends Controller
{
    public function transactions($id) {
        $transaction = Transaction::where('user_id', $id)->get();
        $user = User::find($id);

        $hour = date('G');
        if ($hour >= 0 && $hour <= 12) {
            $greet = 'Good Morning';
        } else if($hour > 12 && $hour <= 18) {
            $greet = 'Good Afternoon';
        } else {
            $greet = 'Good Evening';
        }

        return view('/page/transaction', [
            'title' => "Transaction",
            'transactions' => $transaction,
            'greet' => $greet,
            'users' => $user
        ]);
    }
}
