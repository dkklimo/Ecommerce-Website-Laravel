
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    
    <style type="text/css">

        label{
            padding-right: 25px;
            display: inline-block;
            width: 200px;
        }
    </style>
    @include('admin.css')
  <body>
    
      <!-- partial -->
        @include('admin.sidebar')
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container text-center my-4">
                <h1 style="font-size: 20px; font-weight:bold;">Add Product</h1> 
                @if(session()->has('message'))
                
                <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-bs-dismiss="alert">x</button>
                {{session()->get('message')}}
                </div>
                @endif
                <form action="{{url('updateproduct', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div style="padding:15px">
                    <label for="">Product Title</label>

                    <input style="color: black;" type="text" name="title" value="{{$data->title}}" required>
                </div>
                <div style="padding:15px">
                    <label for="">Price</label>

                    <input style="color: black;" type="number" name="price" value="{{$data->price}}" required>
                </div>
                <div style="padding:15px">
                    <label for="">Description</label>

                    <input style="color: black;" type="text" name="des" value="{{$data->description}}" required>
                </div>
                <div style="padding:15px">
                    <label for="">Quantity</label>

                    <input style="color: black;" type="text" name="quantity" value="{{$data->quantity}}" required>
                </div>
                <div style="padding:15px">
                    <label for="">Old Image</label>

                    <img style="display:inline;" height="120px" width="120px" src="/productimage/{{$data->image}}">
                </div>
            
                <div style="padding:15px">
                    <label>New Image</label>
                    <input type="file" name="file">
                </div><br>
                <input type="submit" class="btn btn-success" value="Update">
                </form>
            </div>
            
        </div>
          <!-- partial -->
        @include('admin.script')
  </body>
</html>