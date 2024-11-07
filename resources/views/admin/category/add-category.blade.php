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
                                <form action="{{ route('admin.add-category') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="mb-3 col-md-12">
            <label class="form-label">Category Name</label>
            <input class="form-control" id="productName" placeholder="Category Name" type="text" name="categoryname">
        </div>
        <div class="mb-3 col-md-12">
            <label class="form-label">Category Image</label>
            <input class="form-control" id="image" placeholder="Category Image" type="file" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
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
     