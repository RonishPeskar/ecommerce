<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\SellerRequestNotification;
use App\Models\Admin;
use App\Models\Product;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home()
    {
        $offer_products = Product::where('stock', true)->where('discount', '>',0)->get();
        return view('frontend.home', compact('offer_products'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function seller_store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:sellers',
            'contact_number' => 'required',
            'address' => 'required',
            'pan_number' => 'required',
            'reg_number' => 'required',
        ]);
        // dd('hello');

        $seller = new Seller();
        $seller->name = $request->name;
        $seller->email = $request->email;
        $seller->contact_number = $request->contact_number;
        $seller->address = $request->address;
        $seller->pan_number = $request->pan_number;
        $seller->reg_number = $request->reg_number;
        $seller->password = Hash::make(uniqid());
        $seller->save();
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'contact_number' => $request->contact_number
        ];
        // dd($data);

        $admins = Admin::all();
        // dd($admins);

        foreach ($admins as $admin) {
            Mail::to($admin->email)->send(new SellerRequestNotification($data));
        }
        // dd('email sent successfully');
        // Mail::to($admins)->send(new SellerRequestNotification($data));
        return redirect()->route('home');

    }

    public function compare(Request $request)
    {
        $q = $request->q;
        $results = Product::where('name', 'like', "%$q%")->orderBy  ('price', 'asc')->get();
        return view('frontend.compare', compact('results', 'q'));
    }

    public function product($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return view('frontend.404');
        }
        return view('frontend.product', compact('product'));
    }
    public function notFound()
    {
        return view('frontend.404');
    }
}
