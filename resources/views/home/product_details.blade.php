<!DOCTYPE html>
<html>

<head>
  
    @include('home.css')

    <style type="text/css">

        .div_center
        {
            display: flex;
        }

        .detail-box
        {
            padding: 10px;
        }

    </style>

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->

  </div>

  <!-- Product details start -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">

        <div class="col-md-12">
          <div class="box">
           
              <div class="div_center">
                <img width="400" src="/products/{{$data->image}}" alt="">
                <h5>Description: </h5>
                <div>
                    <p>  {{$data->description}}</p>
                </div>
              </div>
              <div class="detail-box">
                <h6>{{$data->title}}</h6>
                <h6>Price
                  <span>{{$data->price}}</span>
                </h6>
              </div>

              <div class="detail-box">
                <h6>Category: {{$data->category}}</h6>

                <h6>Quantity:
                  <span>{{$data->quantity}}</span>
                </h6>
              </div>

              <div class="new">
                <span>
                  New
                </span>
              </div>
           
              <div style="display: flex; ">
                <a href="{{url('add_cart', $data->id)}}" style="border-radius: 50%; padding: 10px; width:40px; height:40px; border: none; background-color: #e07d844b; display: flex; align-items: center; justify-content: center; cursor: pointer;">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </a>
                <span style="justify-content: center; align-items:center; margin-top: 10px; margin-left: 10px;">Add To Cart</span>
              </div>
          </div>

        </div>
        
      
    </div>
  </section>

   <!-- Product details end -->


  <!-- info section -->

  @include('home.footer')

</body>

</html>