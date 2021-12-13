@extends('layouts.app2')
@section('content')
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Create Blog</h4>
                  <p class="card-category">Complete your Blog</p>
                </div>
                <div class="card-body">
                  <form action= {{route('store.form.submit')}} method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                  <div class="col-md-12">
                        <label class="bmd-label-floating"></label>
                        <div class="form-group">
                                @foreach($categories as $category)

                                <label><input type="checkbox" name="category_id[]" value="{{$category->id}}">{{$category->name}}</label>
                                
                                @endforeach
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Title</label>
                          <input type="text" id="title" name="title" class="form-control" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Details</label>
                          <input type="text" id="details" name="details" class="form-control">
                        </div>
                      </div>
                  
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="file" class="custom-file-input" id="customFile" name="image">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                      </div><br><br>
              
                      
                    
                        <!-- <input type="checkbox" name="category_id[]" id="sport" value="1">
                        <label for="sport">sport</label>
                        <input type="checkbox" name="category_id[]" id="business" value="2">
                        <label for="business">business</label> -->
                      <!-- <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Adress</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Country</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Postal Code</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>About Me</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                            <textarea class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div> -->
                    <button type="submit" class="btn btn-primary pull-right">Submit Blog</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
           
            </div>
          </div>
        </div>
      </div>
      @endsection