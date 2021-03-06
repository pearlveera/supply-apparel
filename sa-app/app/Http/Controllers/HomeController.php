<?php

namespace App\Http\Controllers;

use App\Product;
use App\Shop;
use App\User;
use App\Lookbook;
use View;
use Response;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $p = \App\Product::first();
        $u = \App\User::first();
        $u->favorites()->toggle($p);
        return view('home');
    }

    /*
        Homepage women section 
    */
    public function best_sellers_women(){
        $products = Product::active()->ofType('women')->paginate(8);
        $html = View::make('componets.product.gridview',compact('products'));
        $result = ['next_url'=>$products->nextPageUrl(),'html'=>$html->render()];
        return Response::json($result);
    }
    public function new_arrivals_women(){
        $products = Product::active()->ofType('women')->latest()->paginate(8);
        $html = View::make('componets.product.gridview',compact('products'));
        $result = ['next_url'=>$products->nextPageUrl(),'html'=>$html->render()];
        return Response::json($result);
    } 
    public function must_haves_women(){
        $products = Product::active()->ofType('women')->latest()->paginate(8);
        $html = View::make('componets.product.gridview',compact('products'));
        $result = ['next_url'=>$products->nextPageUrl(),'html'=>$html->render()];
        return Response::json($result);
    }

      /*
        Homepage men section 
    */
    public function best_sellers_men(){
        $products = Product::active()->ofType('men')->paginate(8);
        $html = View::make('componets.product.gridview',compact('products'));
        $result = ['next_url'=>$products->nextPageUrl(),'html'=>$html->render()];
        return Response::json($result);
    }
    public function new_arrivals_men(){
        $products = Product::active()->ofType('men')->latest()->paginate(8);
        $html = View::make('componets.product.gridview',compact('products'));
        $result = ['next_url'=>$products->nextPageUrl(),'html'=>$html->render()];
        return Response::json($result);
    } 
    public function must_haves_men(){
        $products = Product::active()->ofType('men')->latest()->paginate(8);
        $html = View::make('componets.product.gridview',compact('products'));
        $result = ['next_url'=>$products->nextPageUrl(),'html'=>$html->render()];
        return Response::json($result);
    }

    /*
        Homepage kids section 
    */
    public function best_sellers_kids(){
        $products = Product::active()->ofType('kids')->paginate(8);
        $html = View::make('componets.product.gridview',compact('products'));
        $result = ['next_url'=>$products->nextPageUrl(),'html'=>$html->render()];
        return Response::json($result);
    }
    public function new_arrivals_kids(){
        $products = Product::active()->ofType('kids')->latest()->paginate(8);
        $html = View::make('componets.product.gridview',compact('products'));
        $result = ['next_url'=>$products->nextPageUrl(),'html'=>$html->render()];
        return Response::json($result);
    } 
    public function must_haves_kids(){
        $products = Product::active()->ofType('kids')->latest()->paginate(8);
        $html = View::make('componets.product.gridview',compact('products'));
        $result = ['next_url'=>$products->nextPageUrl(),'html'=>$html->render()];
        return Response::json($result);
    }

    /** shop **/
     public function shop_home(Request $request){
        $shop = Shop::active()->ofType($request->type)->latest()->paginate(4)->appends(['type'=>$request->type]);
        $html = View::make('componets.shop_grid',compact('shop'));
        $result = ['next_url'=>$shop->nextPageUrl(),'html'=>$html->render()];
        return Response::json($result);
    }

     /** lookbok **/
     public function lookbook_home(Request $request){
        if($request->type=="")return false;
        $lookbooks = Lookbook::where('product_type_id',$request->type)->latest()->paginate(4)->appends(['type'=>$request->type]);
        $html = View::make('componets.lookbook_grid',compact('lookbooks'));
        $result = ['next_url'=>$lookbooks->nextPageUrl(),'html'=>$html->render()];
        return Response::json($result);
    }
}
