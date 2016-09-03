<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;
use \App\ProductImage;
use File;
use \App\Colour;
use App\Http\Requests;

class ProductImageController extends Controller
{
    /**
    product images 
    */
    public function index(\App\Product $product){
    	return view('shop/product_image',compact('product'));
    }
 	public function imageupload(Request $request,\App\Product $product){
 		$image = $request->file('image')->store('uploads/products/'.$product->id);
 		if($image!=""){
 			$ProductImage = new ProductImage;
 			$ProductImage->name = $image;
 			$ProductImage->product_id = $product->id;
 			$ProductImage->save();
 		}
    }

    public function image_list(Request $request,\App\Product $product){
    	$colurs = Colour::all();
    	return view('shop/product_image_list',compact('product','colurs'));
    }
    public function delete_image(\App\ProductImage $image){
    	File::delete($image->name);
    	$image->delete();
    }

    public function store_product_color(\App\ProductImage $image,Request $request){
    	$colour_id = $request->colour_id;
    	$product_color_aded = $image->colours->contain($colour_id);
    	//delte colur from product image

    	//add colour
		$colour = Colour::find($colour_id);
		$image->colour->attach($colour);
    }
}
