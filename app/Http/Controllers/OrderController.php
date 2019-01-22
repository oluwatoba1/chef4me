<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class OrderController extends Controller
{

    public function showQuestion()
    {
        return view('order.question');
    }

    public function assignChef(User $location)
    {
        $myChef = $this->getChef($location);

        return view('order.assignment-page', compact('myChef'));

    }

    private function getChef($location)
    {
        $assignChef = User::where('role', 'chef');

        if($assignChef){
            $assignChef = $assignChef->where('location', $location)
                ->inRandomOrder()->first();
        }

        return $assignChef;

    }

}
