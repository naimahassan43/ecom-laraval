@extends ('backend.layout.template')

@section('adminBodyContent')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create New Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Product</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <!-- // Left-part -->
                    <div class="col-lg-6 col-6">
                        
                      <div class="form-group">
                        <label>Product Title</label>
                        <input name="title" type="text" class="form-control" required="required" autocomplete="off">
                      </div>

                      <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" cols="30" rows="2"></textarea>
                      </div>

                      <div class="form-group">
                        <label>Brand</label>
                        <select name="brand_id" class="form-control">
                          <option value="">Please Select Product Brand</option>
                          
                          @foreach(App\Models\Backend\Brand::orderBy('name','asc')->get() as $brand)
                          <option value="{{$brand->id}}">{{$brand->name}}</option>
                          @endforeach
                      
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Category</label>
                        <select name="category_id" class="form-control">
                          <option value="">Please Select Product Category</option>
                          
                          @foreach(App\Models\Backend\Category::orderBy('name','asc')->where('parent_id', 0)->get() as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                            @foreach(App\Models\Backend\Category::orderBy('name','asc')->where('parent_id', $category->id)->get() as $childCat)
                            <option value="{{$childCat->id}}">-- {{$childCat->name}}</option>
                              
                            @endforeach
                          @endforeach
                      
                        </select>
                      </div>

                    </div>
                    <!-- // Right-part -->
                    <div class="col-lg-6 col-6">
                      <div class="form-group">
                        <label>Regular Price</label>
                        <input name="price" type="text" class="form-control" required="required" autocomplete="off">
                      </div>

                      <div class="form-group">
                        <label>Offer Price</label>
                        <input name="offer_price" type="text" class="form-control" autocomplete="off">
                      </div>

                      <div class="form-group">
                        <label>Product Quantity</label>
                        <input name="quantity" type="text" class="form-control" required="required" autocomplete="off">
                      </div>

                      <div class="form-group">
                        <label>Published Status</label>
                        <select name="status" class="form-control">
                          <option value="1">Active</option>
                          <option value="0">In-active</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- //Thumbnail Image -->
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label>Main Product Thumbnail Image</label>
                        <input name="p_image[]" type="file" class="form-control-file">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label>Image-2</label>
                        <input name="p_image[]" type="file" class="form-control-file">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label>Image-3</label>
                        <input name="p_image[]" type="file" class="form-control-file">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label>Image-4</label>
                        <input name="p_image[]" type="file" class="form-control-file">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label>Image-5</label>
                        <input name="p_image[]" type="file" class="form-control-file">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input name="addProduct" type="submit" class="btn btn-primary btn-block" value="Add New Product">
                  </div>
                </form><!-- /.form -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- card end  -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
    </section>
  </div>
@endsection