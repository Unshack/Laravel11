<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">

        input[type='text'],
        input[type='search']
        {
            width: 400px;
            height: 44px;
            border-radius: 5px;
            padding: 10px;
            box-sizing: border-box;
        }

        .div_deg
        {
            display: flex;
            margin-top: 20px;
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
          color: white;
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

        h3
        {
          margin-bottom: 20px;
        }


    </style>
  </head>
  <body>
   @include('admin.header')

    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h3>All Orders</h3>
              <input type="search" name="search">
              <input type="submit" class="btn btn-outline-primary" value="Search">
            
            <div class="div_deg">

                <table>

                    <tr>

                        <th>Customer Name</th>

                        <th>Address</th>

                        <th>Phone</th>

                        <th>Product Title</th>

                        <th>Price</th>

                        <th>Image</th>

                        <th>Payment Status</th>

                        <th>Status</th>

                        <th>Update Status</th>

                        <th>Print PDF</th>

                    </tr>

                    @foreach ($data as $data)
                        
                    <tr>

                        <td>{{$data->name}}</td>
                        <td>{{$data->rec_address}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->product->title}}</td>
                        <td>{{$data->product->price}}</td>

                        <td>

                            <img height="120" width="120" src="products/{{$data->product->image}}" alt="">

                        </td>

                        <td>{{$data->payment_status}}</td>

                        <td>
                          
                          @if ($data->status == 'in progress')

                            <span style="color:aquamarine">{{$data->status}}</span>
                          
                          @elseif ($data->status == 'On the way')

                            <span style="color:rgb(241, 157, 46)">{{$data->status}}</span>

                          @else

                            <span style="color:rgb(31, 241, 77)">{{$data->status}}</span>

                          @endif

                        </td>

                        <td class="order_status">
                            <a class="btn btn-primary" href="{{url('on_the_way', $data->id)}}" >On the way</a>
                            <a href="{{url('delivered', $data->id)}}" class="btn btn-success">Delivered</a>
                        </td>
                        
                        <td>
                          <a class="btn btn-secondary" href="{{url('print_pdf', $data->id)}}">Print PDF</a>
                        </td>

                    </tr>

                    @endforeach

                </table>

            </div>

          </div>
      </div>
    </div>
    <!-- JavaScript files-->

    @include('admin.js')

  </body>
</html>