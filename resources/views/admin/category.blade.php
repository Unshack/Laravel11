<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">

        input[type='text']
        {
            width: 400px;
            height: 44px;
            border-radius: 5px;
            padding: 10px;
        }

        .div_deg
        {
            display: flex;
            /* justify-content: center;
            align-items: center; */
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
        }

        td
        {
          color: white;
          padding: 10px;
          border: 2px solid gray;
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
            
            <h3>Category </h3>

            <div class="div_deg">


                <form action="{{url('add_category')}}" method="post">
                  @csrf
    
                    <div>
                        <input type="text" name="category">
                        <input type="submit" class="btn btn-outline-primary" value="Add Category">
                    </div>
    
                </form>
            </div>

            <div>

              <table class="table_deg">
                <tr>
                  <th>Category Name</th>

                  <th>Edit</th>

                  <th>Delete</th>
                </tr>

                @foreach ($data as $data )
                  
                <tr>
                  <td>{{$data->category_name}}</td>

                  <td>
                    <a class="btn btn-success" href="{{url('edit_category',$data->id)}}">Edit</a>
                  </td>

                  <td>
                    <a onclick="confirmation(event)" href="{{url('delete_category',$data->id)}}" class="btn btn-danger">Delete</a>
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