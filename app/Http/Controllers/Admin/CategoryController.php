<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use Log;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function category(Request $request)
{

$this->data['page'] = 'admin.category.add-category';
return $this->admin_dashboard();

}


public function add_category(Request $request)
    {

        try{

             $validation =  Validator::make($request->all(), [
            'categoryname' => 'required',    
            
        ]);

        if($validation->fails()) {
            Log::info($validation->getMessageBag()->first());

            return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
        }

       
       
              
             
                   $data = [
                    
                        'categoryname' => $request->categoryname,
    
                    ];
                   $payment =  Categorie::Create($data);
                    
                    
            $notify[] = ['success','Categpry Name Request Submited successfully'];
    
               return redirect()->back()->withNotify($notify);
                   
     
                
      
        

    }
    catch(\Exception $e){
     Log::info('error here');
     Log::info($e->getMessage());
     print_r($e->getMessage());
     die("hi");
     return  redirect()->route('admin.category')->withErrors('error', $e->getMessage())->withInput();
       }




    }


    public function category_report(Request $request)
    {
      $limit = $request->limit ? $request->limit : paginationLimit();
      $status = $request->status ? $request->status : null;
      $search = $request->search ? $request->search : null;
      $notes = Categorie::orderBy('id', 'ASC');
  
      if ($search <> null && $request->reset != "Reset") {
        $notes = $notes->where(function ($q) use ($search) {
          $q->Where('categoryname', 'LIKE', '%' . $search . '%')
            // ->orWhere('username', 'LIKE', '%' . $search . '%')
            // ->orWhere('email', 'LIKE', '%' . $search . '%')
            // ->orWhere('phone', 'LIKE', '%' . $search . '%')
            // ->orWhere('jdate', 'LIKE', '%' . $search . '%')
            ->orWhere('status', 'LIKE', '%' . $search . '%');
        });
      }
      $notes = $notes->orderBy('id', 'ASC')->paginate($limit)
        ->appends([
          'limit' => $limit
        ]);
  
      $this->data['categories'] =  $notes;
      $this->data['search'] = $search;
      $this->data['page'] = 'admin.category.category-report';
      return $this->admin_dashboard();
    }
  

}
