@extends ('backend.layout.template')

@section('adminBodyContent')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update District Information</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Update District Information</li>
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
                <h3 class="card-title">Update District Information</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{route('district.update, $district->id')}}" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="form-group">
                <label>District Name</label>
                <input name="name" type="text" class="form-control" required="required" autocomplete="off" value="{{$district->name}}">
              </div>

              <div class="form-group">
                <label>Division Name</label>
                <select class="form-control" name="division_id">
                    <option value="0">Please select the division</option>

                    @foreach ($divisions as $division)
                      <option value="{{$division->id}}" @if ($district->division_id == $division->id) selected @endif>
                      {{$division->name}}
                      </option>
                    @endforeach
                </select>
              </div>

              <div class="form-group">
                <input name="updateDistrict" type="submit" class="btn btn-primary btn-block" value="Save Changes">
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