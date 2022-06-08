
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type="text/css">

        label{
            padding-right: 25px;
            display: inline-block;
            width: 200px;
        }
    </style>
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
                
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-bs-dismiss="alert">x</button>
                {{session()->get('message')}}
                </div>
                @endif
                <form action="{{url('uploadproduct')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div style="padding:15px">
                    <label for="">Product Title</label>

                    <input style="color: black;" type="text" name="title" placeholder="Give a Product Title" required>
                </div>
                <div style="padding:15px">
                    <label for="">Price</label>

                    <input style="color: black;" type="number" name="price" placeholder="Give the Price" required>
                </div>
                <div style="padding:15px">
                    <label for="">Description</label>

                    <input style="color: black;" type="text" name="des" placeholder="Give a Product Description" required>
                </div>
                <div style="padding:15px">
                    <label for="">Quantity</label>

                    <input style="color: black;" type="text" name="quantity" placeholder="Give a Product Quantity" required>
                </div>
                <div style="padding:15px">

                    <input type="file" name="file"  required>
                </div><br>
                <input type="submit" class="btn btn-success" value="Submit">
                </form>
            </div>
            
        </div>
          <!-- partial -->
        @include('admin.script')
  </body>
</html>