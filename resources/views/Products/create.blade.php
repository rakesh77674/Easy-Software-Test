<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<h1><b style = "margin-left: 37%;font-size: 27px;"> You can Add Product here</b></h1>
<form method = "post" action = "{{url('/productadd')}}" enctype="multipart/form-data" style = "margin-left: 37%;margin-top: 74px;">
   @csrf 
  <div class="form-group">
      <label for="exampleInputEmail1">Product Name</label>
      <input type="text" name = "product_name" class="form-control" id="name"  placeholder="Enter Product name" style = "width: 40%;">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Category</label>
      <select id="inputState" class="form-control" name = "categories_id" style = "width: 40%;">
        <option selected>Choose...</option>
        @foreach ($category as $categories)
        <option value="{{$categories->id}}">{{$categories->name}}</option>
        @endforeach    
        </select>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Image</label>
      <input type="file" name = "image" id="image" placeholder="choose image">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>