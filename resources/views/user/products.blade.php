<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
              <form action="{{url('search')}}" method="get" class="form-inline"  style="float: right; padding:10px">
                @csrf

                <input type="search" placeholder="Search" name="search" class="form-control">
                <input type="submit" class="btn btn-success" value="Search">
              </form>
            </div>
          </div>
         @foreach($data as $product)
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img width="150px" height="300px" src="/productimage/{{$product->image}}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>{{$product->title}}</h4></a>
                <h6>Ksh.{{$product->price}}</h6>
                <p>{{$product->description}}</p>

                <form action="{{url('addcart',$product->id)}}" method="POST">

                  @csrf

                  <input type="number" class="form-control" value="1" min="1" style="width: 100px;" name="quantity">
                  <br>
                  <br>
                  <input type="submit" class="btn btn-primary" value="Add cart">
                </form>
              </div>
            </div>
          </div>
          @endforeach
          @if(method_exists($data, 'link'))
          <div class="d-flex justify-content-center">
            {!! $data->links() !!}
          </div>
          @endif
        </div>
      </div>
    </div>