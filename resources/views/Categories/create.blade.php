<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<h1><b style = "margin-left: 37%;font-size: 27px;"> You can Add Category here</b></h1>
<form method="post" action="{{url('/categoryadd')}}" enctype="multipart/form-data" style = "margin-left: 37%;margin-top: 74px;">
    @csrf
    <div class="form-group">
      <label for="CategoryName">Category Name</label>
      <input type="name" name= "name" class="form-control" id="name"  placeholder="Enter Category name" style = "width: 40%;">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    
</form>