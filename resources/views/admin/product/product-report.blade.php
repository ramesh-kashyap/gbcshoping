<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Product</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Product Report</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Product Report</h4>
                    </div>
                    <div class="card-body">
                    <form action="{{ route('product-report') }}" method="GET">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="form-group mb-3">
                                        <input type="text" style="height: 3rem;" Placeholder="Search Users"
                                            name="search" class="form-control" value="{{ @$search }}">
                                    </div>
                                </div>
                                <div class="col-xl-2">
                                    <div class="form-group mb-3">
                                        <select name="limit" style="height: 3rem;" class="form-control">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-2">
                                    <div class="form-group mb-3">
                                        <input type="submit" style="padding: 0.6rem 2rem;" name="submit"
                                            class="btn btn-outline-theme btn-lg d-block w-100 btn-primary"
                                            value="Search" />
                                    </div>
                                </div>
                                <div class="col-xl-2">
                                    <div class="form-group mb-3">
                                        <a href="{{ route('product-report') }}" style="padding: 0.6rem 2rem;"
                                            name="reset"
                                            class="btn btn-outline-theme btn-lg d-block w-100 btn-primary"
                                            value="Reset">Reset</a>
                                    </div>
                                </div>


                            </div>
                        </form>
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>S NO.</th>
                                        <th>Name</th>
                                        <th>Amount</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <!-- <th>Category</th> -->
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(is_array($products) || is_object($products))
                                        <?php $cnt = $products->perPage() * ($products->currentPage() - 1); ?>
                                        @foreach($products as $value)
                                            <tr>
                                                <td><?= $cnt += 1 ?></td>
                                                <td>{{ $value->productName }}</td>
                                                <td>&#8377; {{ $value->productPrice }}</td>
                                                <td>{{ $value->productDiscription }}</td>
                                                <td>
                                                    <img src="{{ asset($value->image) }}" alt="Product Image" style="width: 50px; height: auto;">
                                                </td>
                                                
                                                <td>
                                                   action
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
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
