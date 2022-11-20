@extends('app')

@section('content')
<!-- // Basic multiple Column Form section start -->
  <div class="page-heading">
  <div class="page-title">
      <div class="row">
          <div class="col-12 col-md-6 order-md-1 order-last">
              <h3>Update</h3>
          </div>
          <div class="col-12 col-md-6 order-md-2 order-first">
              <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Update</li>
                  </ol>
              </nav>
          </div>
      </div>
  </div>
  <section id="multiple-column-form">
      <div class="row match-height">
          <div class="col-12">
              <div class="card">
                  <div class="card-content">
                      <div class="card-body">
                          <form class="form" method="post" enctype="multipart/form-data" action="{{ route('category.update',$category->id) }}">
                              @csrf
                              @method('patch')
                              <div class="row">
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                          <label for="name">Category</label>
                                          <input type="text" id="name" value="{{ $category->category }}" class="form-control" placeholder="Category Name" name="category">
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                          <label for="image">Image</label>
                                          <input type="file" id="image" class="form-control" placeholder="Image" name="image">
                                      </div>
                                  </div>
                                  
                                  <div class="col-12 d-flex justify-content-end">
                                        <img width="80px" height="40px" class="float-first" src="{{asset('uploads/category/'.$category->image)}}" alt="">
                                        <button type="submit" class="btn btn-primary mb-1">Save</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- // Basic multiple Column Form section end -->
</div>
@endsection