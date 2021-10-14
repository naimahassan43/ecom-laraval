@extends ('backend.layout.template')

@section('adminBodyContent')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Brand Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Update Brand Information</li>
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
                <h3 class="card-title">Update Brand Information</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{route('brands.update',$brand->id)}}" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="form-group">
                <label>Brand Name</label>
                <input name="name" type="text" class="form-control" required="required" autocomplete="off" value="{{$brand->name}}">
              </div>

              <div class="form-group">
                <label>Description</label>
                <textarea name="desc" class="form-control" cols="30" rows="5">{{$brand->desc}}</textarea>
              </div>

              <div class="form-group">
                <label>Brand Logo/Image</label>
                @if($brand->image ==NULL)
                  No Image Uploaded
                @else
                  <img src="{{asset('backend/img/brands/'. $brand->image)}}" width="100"><br>
                @endif
                <input name="image" type="file" class="form-control-file">
              </div>

              <div class="form-group">
                <input name="updateBrand" type="submit" class="btn btn-primary btn-block" value="Save Changes">
              </div>

              </form>
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