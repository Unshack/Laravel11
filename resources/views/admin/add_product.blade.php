<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">

        input[type='text']
        {
            width: 600px;
            height: 44px;
            padding: 10px;
            margin-top: 20px;
        }

        .div_deg
        {
            display: flex;
        }

        label
        {
            display: inline-block;
            width: 200px;
            font-size: 15px !important;
            color: white !important;
            margin-top: 10px;
        }

        textarea
        {
            width: 600px;
            height: 120px;
            margin-top: 10px;
            padding: 10px;
        }

        .input_deg
        {
            padding: 20px;
        }

        .btn
        {
            margin-left: 200px;
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
            
            <h3>Add Product: </h3>
            <div class="div_deg">

                <form action="{{url('upload_product')}}" method="Post" enctype="multipart/form-data">
                    @csrf

                <div class="input_deg">
                    <label>Product Title</label>
                    <input type="text" name="title" required>
                </div>

                <div class="input_deg">
                    <label>Description</label>
                    <textarea name="description" required></textarea>
                </div>

                
                <div class="input_deg">
                    <label>Price</label>
                    <input type="text" name="price" >
                </div>

                
                <div class="input_deg">
                    <label>Quantity</label>
                    <input type="number" name="qty" >
                </div>

                <div class="input_deg">
                    <label>Product Category</label>
                    <select name="category" required>
                        <option>Select Category</option>

                        @foreach ($category as $category)

                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                            
                        @endforeach
                    </select>
                </div>

                <div class="input_deg">
                    <label>Product Image</label>
                    <input type="file" name="image" >
                </div>

                <div class="input_deg">
                    <input class="btn btn-success" type="submit" value="Add Product" >
                </div>
                </form>

            </div>
            
          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('/admincss/js/front.js')}}"></script>
  </body>
</html>