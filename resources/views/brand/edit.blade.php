@extends("layout")
@section("title","Brand editing")
@section("categoryPage","BRAND")
@section("content")
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        EDIT BRAND
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <form role="form" action="{{url("admin/update-brand/{$brand->__get("id")}")}}" method="post" enctype="multipart/form-data">
                        @method("PUT")
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Brand Name</label>
                                <input value="{{$brand->__get("brands_name")}}" class="form-control @error("brands_name") is-invalid @enderror" name="brands_name" type="text" id="exampleInputEmail1" placeholder="Brand name">
                                @error("brands_name")
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                            <label>Product Image</label>
                            <div class="form-group">
                                <input class="form-control" name="brand_image" type="file" placeholder="Brand image">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
