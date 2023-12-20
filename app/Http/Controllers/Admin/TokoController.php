<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class TokoController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('admin.toko', ['products' => $products]);
    }

    public function tambahProduk()
    {
        return view('admin.tambahdata');
    }

    public function insertData(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation rules
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images', $imageName);
            $validatedData['image_url'] = 'storage/images/' . $imageName;
        }

        Products::create($validatedData);

        return view('admin.insertdata');
    }



    public Function tampilkandata($id){
        $product = Products::find($id);
        // dd($data);
        return view('admin.tampildata', compact('product'));
    }

    // Assuming you're rendering this view from a controller method


    public function updateData(Request $request, $id)
    {
        $product = Products::find($id); // Fetch the product to update

        if (!$product) {
            return redirect()->route('admin.toko.index')->with('error', 'Product not found');
        }

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation rules for updating
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images', $imageName);
            $validatedData['image_url'] = 'storage/images/' . $imageName;
        }

        $product->update($validatedData);

        return redirect()->route('admin.toko.index');
    }

    public function edit($id)
{
    $product = Products::findOrFail($id);
    return view('admin.tampildata', compact('product'));
}


    public function deleteData($id)
    {
        $product = Products::find($id);
        $product->delete();

        return redirect()->route('admin.toko.index');
    }
}




