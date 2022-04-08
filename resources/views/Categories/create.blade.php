<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<h1><b style = "margin-left: 37%;font-size: 27px;"> You can Add Category here</b></h1>
<form style = "margin-left: 37%;margin-top: 74px;">
    <div class="form-group">
      <label for="exampleInputEmail1">Category Name</label>
      <input type="text" name = "Category Name" class="form-control" id="name"  placeholder="Enter Category name" style = "width: 40%;">
    </div>
    <form method="post" action="{{url(add-product)}}">
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</form>