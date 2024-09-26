<!DOCTYPE html>
<html>

<head>
  
    @include('home.css')

    <style type="text/css">

        input[type='text'],
        input[type='search']
        {
            margin-top: 20px;
            background: #dfdddd91;
            width: 400px;
            height: 44px;
            border-radius: 5px;
            padding: 10px;
            box-sizing: border-box;
        }

        .div_deg
        {
            display: flex;
            margin-top: 40px;
            margin-bottom: 20px;
        }

        .table_deg
        {
          text-align: center;
          margin: auto;
          border: 2px solid gray;
          margin-top: 50px;
          padding: 20px;
          width: 500px;
        }

        th
        {
          background-color: #db6574;
          color: white;
          padding: 10px;
          width: 500px;

        }

        td
        {
          padding: 10px;
          border: 2px solid gray;
          gap: 2px;
        }

        .paginate
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        .order_status
        {
            display: flex;
            gap: 10px;
            margin-top: 40px;
            border: none;

        }


    </style>

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->

    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

              <input type="search" name="search">
              <input type="submit" class="btn btn-outline-primary" value="Search">
            
            <div class="div_deg">

                <table>

                    <tr>

                        <th>Product Name</th>

                        <th>Image</th>

                        <th>Delivery Status</th>

                        <th>Image</th>


                    </tr>

                    @foreach ($order as $order)
                        
                    <tr>
                        <td>{{$order->product->title}}</td>
                        <td>{{$order->product->price}}</td>
                        <td>{{$order->status}}</td>
                        <td>
                            <img src="products/{{$order->product->image}}" height="100" width="100" alt="">
                        </td>
                    </tr>

                    @endforeach

                </table>

            </div>

          </div>
      </div>
   

  <!-- info section -->

  @include('home.footer')

</body>

</html>