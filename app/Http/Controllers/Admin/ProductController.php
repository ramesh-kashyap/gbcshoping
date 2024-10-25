<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Log;




use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(Request $request)
    {
    $category=Categorie::all();
    $this->data['categories'] = $category;
    $this->data['page'] = 'admin.product.add-product';
    return $this->admin_dashboard();
    
    }




    


    public function add_product(Request $request)
    {

      // dd("hiii");
  try{
    $validation =  Validator::make($request->all(), [
        'productName' => 'required',
        'productPrice' => 'required|numeric|min:50',
        'categoryId' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg', // Validation for image
        'discription' => 'required',


    ]);

    if($validation->fails()) {
        Log::info($validation->getMessageBag()->first());

        return redirect()->route('admin.product')->withErrors($validation->getMessageBag()->first())->withInput();
    }
  

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('uploads/images'), $imageName);
        }

        
           $data = [
                'productName' => $request->productName,
                'productPrice' =>$request->productPrice,
                'category_id' => $request->categoryId,
                'image' => $imageName,
                'productDiscription' =>$request->discription,
                
            ];
            $payment =  Product::insert($data);
            

        $notify[] = ['success',' request submitted successfully'];
        return redirect()->route('admin.product')->withNotify($notify);

   

  }
   catch(\Exception $e){
    Log::info('error here');
    Log::info($e->getMessage());
    print_r($e->getMessage());
    die("hi");
    return  redirect()->route('admin.product')->withErrors('error', $e->getMessage())->withInput();
      }

 }

}
