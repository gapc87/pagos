<?php

namespace App\Http\Controllers;

use App\Currency;
use App\PaymentPlatform;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $currencies = Currency::all();
        $payment_platforms = PaymentPlatform::all();

        return view('home', compact('currencies', 'payment_platforms'));
    }
}
