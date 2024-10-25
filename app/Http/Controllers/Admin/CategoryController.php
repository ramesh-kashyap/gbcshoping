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

}
