<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::with(['files','option','customer'])->paginate();
        return $products;
        // view('admin.products.products')->with([
        //   'products'=>$products,
        // ]);
      }

      public function newProduct($id = null){

          $product = null;
          if(! is_null($id)){
              $product = Product::with(['hasUnit','category'])->find($id);
          }

          return view('admin.products.new-product')->with([
              'product' => $product,
          ]);
      }

      public function store(Request $request)
      {
          $request->validate([
              'product_title'=>'required',
              'product_description'=> 'required',
              'product_unit'=>'required',
              'product_category' =>'required',
              'product_price'=> 'required',
              'product_discount'=>'required',
              'product_total'=> 'required',
          ]);

          $product = new Product();
          $product->title =$request->input('product_title');
          $product->description = $request->input('product_description');
          $product->unit = intval($request->input('product_unit'));
          $product->category_id  = intval($request->input('product_category'));
          $product->price = doubleval($request->input('product_price'));
          $product->discount = doubleval($request->input('product_discount'));
          $product->total = doubleval($request->input('product_total'));

          if($request->has('options')){
              $arrayOptions=[];
              $options = array_unique($request->input('options'));
                  foreach($options as $option){
                      $actualOptions = $request->input($option);
                      $arrayOptions[$option]=[];
                      foreach($actualOptions as $actualOption){
                          array_push($arrayOptions[$option], $actualOption);
                      }

                  }
              $product->options= json_encode($arrayOptions);
          }
          $product->save();
          toastr()->success('Data has been saved');
          return redirect()->route('products');
      }

      public function update(Request $request){

      }

      public function delete(Request $request){

      }

      public function search(Request $request){

      }
}
