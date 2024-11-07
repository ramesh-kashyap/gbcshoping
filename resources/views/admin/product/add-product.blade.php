<!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Category</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Add Category</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                        @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div>{{$error}}</div>
     @endforeach
 @endif
                            <form action="{{route('submit-product')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Product Name</label>
                                        <input class="form-control" id="inputEmail3" placeholder="Product Name" type="text" name="productName">
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Product Price</label>
                                        <input class="form-control" id="inputEmail3" placeholder="Product Price" type="text" name="productPrice">
                                    </div>
      
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Product Image</label>
                                        <input class="form-control" id="inputEmail3" placeholder="Category name" type="file" name="image">
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Color Id</label>
                                    

                                        <select class="form-control" name="colorId">
                                            <option value="">Select Color</option>
                                            @foreach ($color as $value)
                                                <option value="{{ $value->id }}">{{ $value->color_name }}</option>
                                            @endforeach                                            

                                        </select>
                                     

                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Category Id</label>
                                    

                                        <select class="form-control" name="categoryId">
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->categoryname }}</option>
                                            @endforeach                                            

                                        </select>
                                     

                                    </div>
                                    <div class="mb-3 col-md-12">
    <label class="form-label">Discription</label>
    <textarea class="form-control" id="inputEmail3" name="discription" rows="4" placeholder="Enter category name"></textarea>
</div>

                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
         Content body end
     ***********************************-->
