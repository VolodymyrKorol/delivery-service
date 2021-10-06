<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Services\ShopService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addProductToCart(Request $request)
    {
        return ['result' => $this->addToCart($request->input('product_id'))];
    }


    public function addToCart($product_id) {
        if ($user_id = Auth::user()->id) {
            try {
                $result = Cart::query()->create([
                    'user_id' => $user_id,
                    'product_id' => $product_id,
                ]);
            } catch (\Throwable $exception) {
                $result = false;
            }

        } else {
            $cart = Session::get('cart') ?? [];
            Session::put('cart', array_merge($cart, [$product_id]));
            $result = true;
        }

        return $result;
    }
}
