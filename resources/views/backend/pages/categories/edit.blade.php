@extends ('backend.layout.template')

@section('adminBodyContent')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Category Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Update Category Info</li>
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
                <h3 class="card-title">Update Category</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{route('category.update',$category->id)}}" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="form-group">
                <label>Category Name</label>
                <input name="name" type="text" class="form-control" required="required" autocomplete="off" value="{{$category->name}}">
              </div>

              <div class="form-group">
                <label>Description</label>
                <textarea name="desc" class="form-control" cols="30" rows="5">{{$category->desc}}</textarea>
              </div>

              <div class="form-group">
                <label>Parent Category</label>
                <select class="form-control" name="parent_id" id="">
                  <option value="0">Please Select a Parent Category if any</option>
                  @foreach($primary_category as $cat)
                    <option value="{{$cat->id}}" {{$cat->id == $category->parent_id ? 'selected' : ''}}>
                      {{$cat->name}}
                    </option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label>Category Logo/Image</label>
                @if($category->image ==NULL)
                  No Image Uploaded
                @else
                  <img src="{{asset('backend/img/categories/'. $category->image)}}" width="100"><br>
                @endif
                <input name="image" type="file" class="form-control-file">
              </div>

              <div class="form-group">
                <input name="updateCategory" type="submit" class="btn btn-primary btn-block" value="Save Changes">
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