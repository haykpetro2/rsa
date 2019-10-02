<?php

namespace App\Http\Controllers;

use App\Policy;
use App\Order;
use App\OrderStatus;

class DashboardController extends Controller {

    public function index() {
        $expiring_policies = Policy::getExpiringPolicies();
        $new_orders = Order::where('status_id',OrderStatus::STATUS_NEW)->orderBy('created_at', 'desc')->get();
        return view('dashboard.index', compact('expiring_policies','new_orders'));
    }


}