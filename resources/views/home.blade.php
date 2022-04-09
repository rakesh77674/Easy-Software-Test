<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div>
    <a href="/add-product">
    <span class="btn btn-success col fileinput-button" style = "width: 138px;">
        <i class="fas fa-plus"></i>
        <span>Add Product</span>
      </span>
    </a>
        <a href="/add-category">
        <span class="btn btn-success col fileinput-button" style = "width: 138px;">
            <i class="fas fa-plus"></i>
            <span>Add Category</span>
          </span>
        </a>
   </div>
    <table class="table table-bordered">
    <thead>
    <tr style ="background: #f7e3b7">
        <th scope="col">Product Name</th>
        <th scope="col">image</th>
        <th scope="col">Category</th>
        <th scope="col">Edit</th>
    </tr>
    </thead>
    <tbody>    
        @foreach ($products as $product)
        <tr>     
            <td>{{$product->product_name}}</td>
            <td ><img height = "50" width = "50" margin = "12"src = "/productimage/{{$product->image}}"></td>
            <td>{{$product->category->name}}</td>
            {{-- <td ><img height = "50" width = "50" margin = "12"src = "/doctorimage/{{$doctor->image}}"></td> --}}
            <td>
            <div>
            <form method = "post" action = "{{url('/deleteproduct', $product->id)}}">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-warning" style ="background: red; color:white; width: 70%">Delete</button>
            </form>
            <form method = "get" action = "{{url('/editproduct', $product->id)}}">
            @csrf
            <button type="submit" class="btn btn-primary" style = "width: 68%; padding: 2px; margin: 2px;height: 35px;">Update</button>
            </form>
        </div>
            </td>          
        </tr>
        @endforeach   
        
    </tbody>
    </table>