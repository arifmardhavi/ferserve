<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Fruit;
use App\Models\Order;
use App\Models\Take;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LandingController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request): View
    {
        return view('landing', [
            'fruits' => Fruit::query()->get(),
            'deliveries' => Delivery::query()->get(),
            'takes' => Take::query()->get(),
            'unit' => Order::weightUnit,
        ]);
    }
}
