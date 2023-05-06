<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Coffee;

class CoffeeController extends Controller
{
    //
    // PAGE: ESPRESSO
    public function espresso($id) {
        $category = Category::orderBy('id')->get();
        $coffee = Coffee::where('category_id', 1)->get();
        $user = User::find($id);

        $hour = date('G'); //G: Menampilkan jam dalam format 24 jam (0 - 23)
        if ($hour >= 0 && $hour <= 12) {
            $greet = 'Good Morning';
        } else if($hour > 12 && $hour <= 18) {
            $greet = 'Good Afternoon';
        } else {
            $greet = 'Good Evening';
        }

        return view('/page/espresso', [
            'chosen_category' => "Espresso",
            'categories' => $category,
            'title' => "Profile",
            'greet' => $greet,
            'users' => $user,
            'coffees' => $coffee
        ]);
    }

    public function blended($id) {
        $category = Category::orderBy('id')->get();
        $coffee = Coffee::where('category_id', 2)->get();
        $user = User::find($id);

        $hour = date('G');
        if ($hour >= 0 && $hour <= 12) {
            $greet = 'Good Morning';
        } else if($hour > 12 && $hour <= 18) {
            $greet = 'Good Afternoon';
        } else {
            $greet = 'Good Evening';
        }

        return view('/page/blended', [
            'chosen_category' => "Blended",
            'categories' => $category,
            'title' => "Profile",
            'greet' => $greet,
            'users' => $user,
            'coffees' => $coffee
        ]);
    }

    public function brewed($id) {
        $category = Category::orderBy('id')->get();
        $coffee = Coffee::where('category_id', 3)->get();
        $user = User::find($id);

        $hour = date('G');
        if ($hour >= 0 && $hour <= 12) {
            $greet = 'Good Morning';
        } else if($hour > 12 && $hour <= 18) {
            $greet = 'Good Afternoon';
        } else {
            $greet = 'Good Evening';
        }

        return view('/page/brewed', [
            'chosen_category' => "Brewed",
            'categories' => $category,
            'title' => "Profile",
            'greet' => $greet,
            'users' => $user,
            'coffees' => $coffee
        ]);
    }

    public function others($id) {
        $category = Category::orderBy('id')->get();
        $coffee = Coffee::where('category_id', 4)->get();
        $user = User::find($id);

        $hour = date('G');
        if($hour >= 0 && $hour <= 12) {
            $greet = 'Good Morning';
        } else if($hour > 12 && $hour <= 18) {
            $greet = 'Good Afternoon';
        } else {
            $greet = 'Good Evening';
        }

        return view('/page/others', [
            'chosen_category' => "Others",
            'categories' => $category,
            'title' => "Profile",
            'greet' => $greet,
            'users' => $user,
            'coffees' => $coffee
        ]);
    }
}
