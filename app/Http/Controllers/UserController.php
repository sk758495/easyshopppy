<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        $data = Products::all();
        $count = $this->cart_count(); // Get the cart count
    
        return view('user.index', compact('data', 'count')); // Pass the count to the view
    }
    

    public function show_detail($id){

        if(Auth::id())
        {
            $user = Auth::User();

            $userid = $user()->id;

            $count = Cart:: Where('user_id',$userid)->count();
        }else{
            $count='';
        }

        $data = Products::find($id);
        return view('user.show_detail', compact('data'));
    }

    public function cart_count() {
    $user = Auth::user();

    if ($user) {
        return Cart::where('user_id', $user->id)->count();
    }

    return 0; // Return 0 if the user is not authenticated
}


    public function add_cart($id) {

        // Get the authenticated user
        $user = Auth::user();

        // Get the user ID and product ID
        $user_id = $user->id;
        $product_id = $id;

        // Create a new Cart instance
        $data = new cart();

        // Assign the user_id and product_id to the cart data
        $data->user_id = $user_id;
        $data->product_id = $product_id;

        // Save the cart data to the database
        $data->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Item added to cart successfully!');
    }

    public function show_product($id) {
        $product = Products::find($id);
    
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }
    
        return view('user.product_detail', compact('product'));
    }
    



}

