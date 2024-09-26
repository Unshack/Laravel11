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
            
            <h3>Update Product: </h3>
            <div class="div_deg">

                <form action="{{url('edit_product',$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf

                <div class="input_deg">
                    <label>Product Title:</label>
                    <input type="text" name="title" value="{{$data->title}}">
                </div>

                <div class="input_deg">
                    <label>Description:</label>
                    <textarea name="description">{{$data->description}}</textarea>
                </div>

                
                <div class="input_deg">
                    <label>Price:</label>
                    <input type="text" name="price" value="{{$data->price}}" >
                </div>

                
                <div class="input_deg">
                    <label>Quantity:</label>
                    <input type="number" name="qty" value="{{$data->quantity}}" >
                </div>

                <div class="input_deg">
                    <label>Category:</label>
                    <select name="category">
                        <option value="{{$data->category}}">{{$data->category}}</option>
                        @foreach ($category as $category)

                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                            
                        @endforeach
                    </select>
                </div>

                <div class="input_deg">
                    <label>Current Image:</label>
                    <img width="150" src="/products/{{$data->image}}">
                </div>

                <div class="input_deg">
                    <label>New Image:</label>
                    <input type="file" name="image">
                </div>

                <div class="input_deg">
                    <input class="btn btn-success" type="submit" value="Update Product" >
                </div>
                </form>

            </div>
            
          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')

  </body>
</html>