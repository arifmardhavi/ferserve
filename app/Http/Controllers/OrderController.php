<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(StoreOrderRequest $request): RedirectResponse
    {
        Order::query()->create($request->validated());

        return redirect()->route('landing')
        ->with([
            'alert' => 'success',
            'message' => 'Order telah tersimpan',
        ]);
    }
}
