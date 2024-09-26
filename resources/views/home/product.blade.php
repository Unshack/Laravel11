<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">

        @foreach ($product as $products)

        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
           
              <div class="img-box">
                <img src="products/{{$products->image}}" alt="">
              </div>
              <div class="detail-box">
                <h6>{{$products->title}}</h6>
                <h6>Price
                  <span>{{$products->price}}</span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>

              <div style="margin: 10px 5px 10px 5px; display: flex; justify-content: space-between;">
                <a class="btn btn-outline-secondary" href="{{url('product_details',$products->id)}}">Details</a>

                  <a href="{{url('add_cart', $products->id)}}" style="border-radius: 50%; padding: 10px; width:40px; height:40px; border: none; background-color: #e07d844b; display: flex; align-items: center; justify-content: center; cursor: pointer;">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  </a>
     
              </div>
           
          </div>
        </div>
        
        @endforeach
    </div>
  </section>