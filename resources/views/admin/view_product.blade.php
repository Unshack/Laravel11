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
            margin-top: 40px;
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
          width: 200px;
        }

        td
        {
          color: white;
          padding: 10px;
          border: 2px solid gray;
        }

        .paginate
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
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

            <form action="{{url('product_search')}}" method="get">
              @csrf
              <input type="search" name="search">
              <input type="submit" class="btn btn-outline-primary" value="Search">
            </form>
            
            <div class="div_deg">

                <table>

                    <tr>

                        <th>Product Title</th>

                        <th>Description</th>

                        <th>Category</th>

                        <th>Price</th>

                        <th>Quantity</th>

                        <th>Image</th>

                        <th>Edit</th>

                        <th>Delete</th>

                    </tr>

                    @foreach ($product as $products)
                        
                    <tr>

                        <td>{{$products->title}}</td>
                        <td>{!!Str::limit($products->description,30)!!}</td>
                        <td>{{$products->category}}</td>
                        <td>{{$products->price}}</td>
                        <td>{{$products->quantity}}</td>
                        <td>

                            <img height="120" width="120" src="products/{{$products->image}}" alt="">

                        </td>

                        <td>
                          <a class="btn btn-success" href="{{url('update_product',$products->id)}}">Edit</a>
                        </td>

                        <td>
                          <a onclick="confirmation(event)" class="btn btn-danger" href="{{url('delete_product', $products->id)}}">Delete</a>
                        </td>

                    </tr>

                    @endforeach

                </table>

            </div>

            <div class="paginate">

                {{ $product->onEachSide(1)->links() }}

            </div>

            
          </div>
      </div>
    </div>
    <!-- JavaScript files-->

    @include('admin.js')

  </body>
</html>