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
                <div style="margin-left:-100px !important; width:auto;" class="container text-center my-4 mx-0">
                    <div class="table-responsive">
                        <table class="table table-bordered">

                        <thead>
                            <tr>
                            <th> Customer Name </th>
                            <th> Phone No. </th>
                            <th> Address</th>
                            <th> Product Title </th>
                            <th> Price(Ksh) </th>
                            <th> Quantity </th>
                            <th> Status</th>
                            <th> Action</th>
                            </tr>
                            </thead>
                            @foreach ($order as $orders )
                            <tr>
                                <td>{{$orders->name}}</td>
                                <td>{{$orders->phone}}</td>
                                <td>{{$orders->address}}</td>
                                <td>{{$orders->product_name}}</td>
                                <td>{{$orders->price}}</td>
                                <td>{{$orders->quantity}}</td>
                                <td>{{$orders->status}}</td>
                                <td><a href="{{url('updatestatus',$orders->id)}}"><button class="btn btn-success">Delivered</button></a></td>
                            </tr>
                            @endforeach

                        </table>
                        </div>
                    </div>
            </div>
    
          <!-- partial -->
        @include('admin.script')
  </body>
</html>