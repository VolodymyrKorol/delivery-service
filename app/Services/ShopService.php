<?php

namespace App\Services;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class ShopService
{
    public static function getProducts($provider_category_id)
    {
        $response = Http::get(config('shop-service.url') . '/products/' . $provider_category_id);
        return $response->json() ?? [];
    }

    public static function getProviderMenu($provider_id)
    {
        $response = Http::get(config('shop-service.url') . '/provider/menu/' . $provider_id);
        return $response->json() ?? [];
    }

    public static function getCategories()
    {
        $response = Http::get(config('shop-service.url') . '/categories');
        return $response->json() ?? [];
    }

    public static function getProviders($category_id)
    {
        $response = Http::get(config('shop-service.url') . '/providers/categories/' . $category_id);
        return $response->json() ?? [];
    }
    public static function getProvider($provider_id)
    {
        $response = Http::get(config('shop-service.url') . '/providers/' . $provider_id);
        return $response->json() ?? [];
    }

    public static function getCartCount() {
        return Cart::query()->where('user_id', Auth::user()->id)->count();
    }

}
