<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminLoginRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class AdminLoginController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('admin.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(AdminLoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('admin.dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function category()
    {
        $data = Category::all();
        return view('admin.category',compact('data'));
    }

    public function add_category(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'category_name' => 'required|string|max:255|unique:categories,category_name',
    ]);

    // Create a new Category
    $category = new Category();
    $category->category_name = $request->category_name;

    $category->save();

    // Redirect back
    return redirect()->back()->with('success', 'Data saved successfully!');

}


public function edit_category($id)
{
    $data = Category::find($id);

    return view('admin.edit_category',compact('data'));
}

public function update_category(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => 'required|string|max:255|unique:categories,category_name',
        ]);

        if ($validator->passes()) {
            $category = Category::find($id);
            $category->category_name = $request->category_name; // Correct this line
            $category->save();


          return redirect('admin/category')->with('success', 'Data Update successfully!');
    }
   return redirect('admin/category')->with('error', 'Data Not Update successfully!');
    }

    public function delete_category($id)
{
    $data = Category::find($id);

    $data->delete();

    return redirect()->back()->with('success', 'Data Deleted successfully!');
}


public function view_products(){
    $product = Products::all();
    return view('admin.all_products',compact('product'));
}

public function add_products(){
    $data = Category::all();
    return view('admin.add_products',compact('data'));
}

public function upload_products(Request $request) {
    // Validate the request
    $request->validate([
        'sku' => 'required',
        'product_name' => 'required',
        'product_price' => 'required|numeric',
        'product_cost' => 'required|numeric',
        'category' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max size as needed
    ]);

    // Create a new product instance
    $product = new Products();
    $product->sku = $request->sku;
    $product->product_name = $request->product_name;
    $product->product_price = $request->product_price;
    $product->product_cost = $request->product_cost; // Fixed from SKU to product_cost
    $product->category = $request->category;
    $product->description = $request->description;

    // Handle the image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension(); // Create a unique name
        $image->move(public_path('admin/images'), $imageName); // Move the image to the directory
        $product->image = 'admin/images/' . $imageName; // Save the path in the database
    }

    // Save the product to the database
    $product->save();

    return redirect()->back()->with('success', 'Product added successfully!');
}

public function show_products_edit(){
    $product = Products::all();
    return view('admin.show_products_edit',compact('product'));
}

public function update_product($id)
{
    $data = Category::all();
    $product = Products::findOrFail($id); // Correct way to find the product
    return view('admin.update_product', compact('data', 'product'));
}

public function update(Request $request, $id)
{
    // Validate the request
    $request->validate([
        'sku' => 'required',
        'product_name' => 'required',
        'product_price' => 'required|numeric',
        'product_cost' => 'required|numeric',
        'category' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional image
    ]);

    // Find the product by ID
    $product = Products::findOrFail($id);

    // Update product details
    $product->sku = $request->sku;
    $product->product_name = $request->product_name;
    $product->product_price = $request->product_price;
    $product->product_cost = $request->product_cost;
    $product->category = $request->category;

    // Handle the image upload if a new image is uploaded
    if ($request->hasFile('image')) {
        // Delete the old image if necessary
        if ($product->image) {
            Storage::delete($product->image); // Make sure to import Storage facade
        }

        // Upload the new image
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('admin/images'), $imageName);
        $product->image = 'admin/images/' . $imageName; // Update image path
    }

    // Save the updated product
    $product->save();

    return redirect('admin/view_products')->with('success', 'Product updated successfully!');
}


public function delete_product($id)
{
     // Find the product by ID
     $product = Products::findOrFail($id);

    $product->delete();

    return redirect()->back()->with('success', 'Product Deleted successfully!');
}


public function brands()
{
    $data = Brand::all();
    return view('admin.brands',compact('data'));
}

public function add_brands(Request $request)
{
    // Validate the incoming request
    $validator = Validator::make($request->all(), [
        'brand_name' => 'required|string|max:255|unique:brands,brand_name',
    ], [
        'brand_name.unique' => 'The brand name has already been taken.',
    ]);

    // Check if validation passes
    if ($validator->passes()) {
        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Brand Name saved successfully!');
    }

    // Redirect back with validation errors and input
    return redirect()->back()->with('error', 'The brand name has already been taken.');
}

public function edit_brand($id)
{
    $data = Brand::find($id);

    return view('admin.edit_brand',compact('data'));
}

public function update_brand(Request $request, $id)
{
    // Get the brand that you're updating to exclude it from the unique check
    $brand = Brand::find($id);

    // Validate the incoming request
    $validator = Validator::make($request->all(), [
        'brand_name' => 'required|string|max:255|unique:brands,brand_name,' . $brand->id,
    ]);

    if ($validator->passes()) {
        // Update the brand name
        $brand->brand_name = $request->brand_name;
        $brand->save();

        return redirect('admin/brands')->with('success', 'Brand Name updated successfully!');
    }

    return redirect('admin/brands')->withErrors($validator)->with('error', 'Brand Name Already Exist!');
}

public function delete_brand($id)
{
    $data = Brand::find($id);

    $data->delete();

    return redirect()->back()->with('success', 'Brand Name Deleted successfully!');
}











}
