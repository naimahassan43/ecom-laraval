@extends ('backend.layout.template')

@section('adminBodyContent')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add New Slider</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add New Slider</li>
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
                <h3 class="card-title">Add New Slider</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="form-group">
                <label>Title</label>
                <input name="title" type="text" class="form-control">
              </div>
              
              <div class="form-group">
                <label>Heading</label>
                <input name="heading" type="text" class="form-control">
              </div>

              <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" cols="30" rows="5"></textarea>
              </div>

              <div class="form-group">
                <label>Button Text</label>
                <input name="btnText" type="text" class="form-control">
              </div>

              <div class="form-group">
                <label>Button Link</label>
                <input name="btnLink" type="text" class="form-control">
              </div>

              <div class="form-group">
                <label>Slider Logo/Image</label>
                <input name="image" type="file" class="form-control-file">
              </div>

              <div class="form-group">
                <input name="addSlider" type="submit" class="btn btn-primary btn-block" value="Add New Slider">
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