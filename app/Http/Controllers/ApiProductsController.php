<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ApiProductsController extends Controller
{
    public function index()
    {
        $client = new Client();
        $url = 'https://fakestoreapi.com/products';
        $response = $client->get($url);
        $products = json_decode($response->getBody()->getContents());
        return view('layouts.home', compact('products'));
    }

    public function men()
    {
        $client = new Client();
        $url = 'https://fakestoreapi.com/products/category/men\'s clothing';
        $response = $client->get($url);
        $products = json_decode($response->getBody()->getContents());
        return view('layouts.men', compact('products'));
    }


    public function women()
    {
        $client = new Client();
        $url = 'https://fakestoreapi.com/products/category/women\'s clothing';
        $response = $client->get($url);
        $products = json_decode($response->getBody()->getContents());
        return view('layouts.women', compact('products'));
    }

    public function electronics()
    {
        $client = new Client();
        $url = 'https://fakestoreapi.com/products/category/electronics';
        $response = $client->get($url);
        $products = json_decode($response->getBody()->getContents());
        return view('layouts.electronics', compact('products'));
    }

    public function jewelery()
    {
        $client = new Client();
        $url = 'https://fakestoreapi.com/products/category/jewelery';
        $response = $client->get($url);
        $products = json_decode($response->getBody()->getContents());
        return view('layouts.jewelery', compact('products'));
    }

    public function product($product)
    {
        $client = new Client();
        $url = 'https://fakestoreapi.com/products/' . $product;
        $response = $client->get($url);
        $product = json_decode($response->getBody()->getContents());
        return view('layouts.product', compact('product'));
    }
}
