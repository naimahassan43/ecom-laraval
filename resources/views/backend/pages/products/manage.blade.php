@extends ('backend.layout.template')

@section('adminBodyContent')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage All Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Manage Products</li>
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
                <h3 class="card-title">All Product Lists</h3>

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
                    <th scope="col">Thumbnail</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Status</th>
                    <th scope="col">Price</th>
                    <th scope="col">Offer Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $i=1;
                  @endphp


                  @foreach($products as $product)  
                    <tr>
                      <th scope="row">{{$i}}</th>
                      <td>
                        @php 
                        $j=1; 
                        @endphp

                        @foreach ( $product->images as $img)
                          @if ( $j > 0)
                            <img src="{{asset('backend/img/products/'.$img->image)}}" width="80" alt="">
                          @endif
                          @php $j-- ; 
                          @endphp
                        @endforeach
                      </td>
                      <td>{{$product->title}}</td>
                      <td>{{$product->category->name}}</td>
                      <td>{{$product->brand->name}}</td>
                      <td>
                        @if ($product->status == 1)
                          <span class="badge badge-success">Active</span>
                        @else
                        <span class="badge badge-danger">Deactive</span>
                        @endif
                      </td>
                      <td>${{$product->price}}</td>
                      <td>
                        @if ($product->offer_price == NULL)
                          <span class="badge badge-info">N/A</span>
                        @else
                          <span class="badge badge-success">${{$product->offer_price}}</span>
                        @endif
                      </td>
                      <td>{{$product->quantity}} Pcs</td>
                      <td>
                        <div class="btn-group">
                          <a href="{{route('product.edit', $product->id)}}" class="btn btn-primary btn-sm">Update</a>
                          <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteProduct{{$product->id}}">Delete</a>

                          <!-- Modal start -->
                          
                          <div class="modal fade" id="deleteProduct{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Do you confirm to delete this product?</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="action-btn">
                                    <form action="{{route('product.destroy',$product->id)}}" method="POST">
                                      @csrf
                                      <button type="submit" class="btn btn-danger">Yes</button>  
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
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