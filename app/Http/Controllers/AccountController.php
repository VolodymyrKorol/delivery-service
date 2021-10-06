<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ShopService;

class AccountController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('account.pages.main');
    }


    public function getProductsPage(Request $request, $provider_id) {
        $provider = ShopService::getProvider($provider_id);
        $categories = ShopService::getProviderMenu($provider_id);
        return view('account.pages.products', ['categories' => $categories, 'provider' => $provider]);
    }

    public function createOrderPage() {
        $providers = ShopService::getProviders(1);
        return view('account.pages.create-order', ['providers' => $providers]);
    }
}

