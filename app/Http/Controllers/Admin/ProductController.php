<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;




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

 public function product_report(Request $request)
 {
     $limit = $request->limit ? $request->limit : paginationLimit();
     $status = $request->status ? $request->status : null;
     $search = $request->search ? $request->search : null;
 
     // Select specific columns
     $notes = Product::select('productName', 'productPrice', 'image', 'category_id', 'productDiscription')
                     ->orderBy('id', 'ASC');
 
     if ($search !== null && $request->reset != "Reset") {
         $notes = $notes->where(function ($q) use ($search) {
             $q->where('productName', 'LIKE', '%' . $search . '%')
               ->orWhere('productPrice', 'LIKE', '%' . $search . '%')
               ->orWhere('category_id', 'LIKE', '%' . $search . '%')
               ->orWhere('image', 'LIKE', '%' . $search . '%')
               ->orWhere('productDiscription', 'LIKE', '%' . $search . '%');
         });
     }
 
     // Paginate the results
     $notes = $notes->paginate($limit)
                    ->appends(['limit' => $limit]);
 
     // Assuming 'category_id' references a categories table, you might want to fetch the category names
     $notes->each(function ($note) {
         $note->category_name = product::find($note->category_id)->name ?? 'N/A'; 
         $note->image_url = asset('storage/uploads/' . $note->image);
         // Adjust according to your category model
     });
 
     $this->data['products'] = $notes;
     $this->data['search'] = $search;
     $this->data['page'] = 'admin.product.product-report';
     return $this->admin_dashboard();
 }
 


  // Destroy method
  public function destroy($id)
  {
      // Find the product by its ID
      $product = Product::findOrFail($id);
      
      // Delete the product
      $product->delete();
      
      // Redirect back with a success message
      return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
  }

}
