@extends ('backend.layout.template')

@section('adminBodyContent')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage All Sliders</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Manage Sliders</li>
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
            <!-- card start  -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">All Sliders Lists</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#Sl.</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Heading</th>
                    <th scope="col">Description</th>
                    <th scope="col">Button Text</th>
                    <th scope="col">Button Link</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @php
                  $i=1;
                @endphp


                @foreach($sliders as $slider)  
                  <tr>
                    <th scope="row">{{$i}}</th>
                    <td>
                      @if($slider->image ==NULL)
                        No Image Uploaded
                      @else
                        <img src="{{asset('backend/img/sliders/'. $slider->image)}}" width="100">
                      @endif
                    </td>
                    <td>{{$slider->title}}</td>
                    <td>{{$slider->heading}}</td>
                    <td>{{$slider->description}}</td>
                    <td>{{$slider->btn_text}}</td>
                    <td>{{$slider->btn_link}}</td>                    
                    <td>
                      <div class="btn-group">
                        <a href="{{route('slider.edit', $slider->id)}}" class="btn btn-primary btn-sm">Update</a>
                        <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteSlider{{$slider->id}}">Delete</a>

                        <!-- Modal start -->
                        
                        <div class="modal fade" id="deleteSlider{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="action-btn">
                                  <form action="{{route('slider.destroy',$slider->id)}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>  
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Modal end -->
                      </div>
                    </td>
                  </tr>
                  @php
                  $i++;
                @endphp
                @endforeach
                </tbody>
              </table>
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