<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>

<h2>Products Table</h2>
<form method="post" id="basicform" action="{{route('store.form.delete')}}">
				@csrf
<div class="col-lg-6">
						<div class="d-flex">
							<div class="single-filter">
								<div class="form-group">
									<select class="form-control" name="status">
										<option>{{ __('Select Action') }}</option>
										
										<option value="delete">{{ __('Delete Permanently') }}</option>

									</select>
								</div>
							</div>
							<div class="single-filter">
								<button type="submit" class="btn btn-primary ml-2 mt-1">{{ __('Apply') }}</button>
							</div>
						</div>
					</div>
          </div>
</form>
<div class="container">
    <div class="float-right pb-3">
                        <form>
                            <div class="input-group mt-3 col-12">
                                <input type="text" class="form-control" placeholder="Search By  ID" required=""
                                    name="search" value="{{ $search ?? '' }}">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i>Search</button>
                                </div>
                            </div>
                            <div class="float-right pb-3">
                              <a href="{{route('store.form')}}" class="btn btn-lg btn-success">Add New Title</a>
                            </div>
                            <div class="float-right pb-3">
                              <a href="{{route('export')}}" class="btn btn-lg btn-success">Export Data</a>
                            </div>
                        </form>
    </div>

</div>


  
<div class="container">
<table class="table table-striped">
  <thead>
    <tr>
              <th class="am-select">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input checkAll" id="checkAll">
									<label class="custom-control-label" for="checkAll"></label>
								</div>
							</th>
                  <th scope="col">ID</th>
                  <th scope="col">Title</th>
                  <th scope="col">Slug</th>
                  <th scope="col">Details</th>
                  <th scope="col">Image</th>
                  <th colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>
  @if($data->isNotEmpty())
  @foreach($data as $d)

    <tr>
    <th>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" name="ids[]" class="custom-control-input" id="customCheck{{ $d->id }}" value="{{ $d->id }}">
									<label class="custom-control-label" for="customCheck{{ $d->id }}"></label>
								</div>
		</th>
      <th scope="row">{{$d->id}}</th>
      <td>{{$d->title}}</td>
      <td>{{$d->slug}}</td>
      <td>{{$d->details}}</td>
      <td><img src="/images/{{$d->image}}" onerror="this.src='http://127.0.0.1:8000/images/download.jpg'" width="50px" height="50px"></td>
      <td><a href="{{route('store.form.edit',$d->id)}}">Edit</a></td>
      <td><a href="{{route('store.form.delete',$d->id)}}" onclick="alert('Successfully Deleted!')">Delete</a></td>  
      </tr>

@endforeach
@else
      <h2>Product Table is Empty!!</h2>
@endif
  </tbody>
</table>

</div>
{{$data->links()}}

</body>
</html>
