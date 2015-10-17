<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = \App\Product::get();
        return view('gallery', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new \App\Product;
        
        // getting all of the post data
        // $file = array('image' => Input::file('product_image'));

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $destinationPath = 'uploads/products/images'; // upload path
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renameing image

            $imageName = $destinationPath . '/' . $fileName;

            $file->move($destinationPath, $fileName); // uploading file to given path  

            $product->pic = $imageName;

        }
            
        $product->name = $request->get('product_name');
        $product->desc = $request->get('product_desc');
        $product->price = $request->get('product_price'); 

        $product->save();

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = \App\Product::find($id);
        return view('admin.products.editProduct', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $product = \App\Product::find($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $destinationPath = 'uploads/products/images'; // upload path
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renameing image

            $imageName = $destinationPath . '/' . $fileName;

            $file->move($destinationPath, $fileName); // uploading file to given path  

            $picPath = $imageName;

        }else{
            $picPath = $product->pic;
        }
            
        $name = $request->get('product_name') ?: $product->name;
        $desc = $request->get('product_desc') ?: $product->desc;
        $price = $request->get('product_price') ?: $product->price; 

        $product = \App\Product::find($id)->update([
            'name' => $name,
            'desc' => $desc,
            'price' => $price,
            'pic' => $picPath
        ]);

        return redirect('/admin/viewProducts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = \App\Product::where('id', $id)->delete();
        return redirect('/admin/viewProducts');
    }
}
