
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  <body>
    
      <!-- partial -->
        @include('admin.sidebar')
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container text-center my-4">
              <div class="table-responsive">
                <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>
                                <div class="form-check form-check-muted m-0">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                    </label>
                                </div>
                                </th>
                                <th> Product Title </th>
                                <th> Price(Ksh) </th>
                                <th> Description</th>
                                <th> Quantity </th>
                                <th> Product Image</th>
                                <th> Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $product)
                            <tr>
                                <td>
                                <div class="form-check form-check-muted m-0">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                    </label>
                                </div>
                                </td>
                                <td>{{$product->title}}</td>
                                <td>{{$product->price}}</td>
                                <td> {{$product->description}} </td>
                                <td> {{$product->quantity}} </td>
                                <td><img style="border-radius:0 !important; width:120px; height:120px;" src="/productimage/{{$product->image}}" alt="image" /></td>
                                <td>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6"><button class="btn btn-success"><a href="{{url('updateview',$product->id)}}">Update</a></button></div>
                                            <div class="col-md-6"><button class="btn btn-danger" onclick="return confirm('Are you Sure!')"><a href="{{url('deleteproduct',$product->id)}}">Delete</a></button></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach  
                            </tbody>
                    </table>
                </div>
            </div>  
        </div>


          <!-- partial -->
        @include('admin.script')
  </body>
</html>