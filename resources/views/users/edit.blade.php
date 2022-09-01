@extends('layouts.app')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Create User</h3>
          </div>
          <form action="{{ route('users.update',$user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                <label for="exampleInputName">User Name</label>
                <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="exampleInputName" placeholder="Enter name">
                @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password">
                @error('password')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Upload Image</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                </div>
                @error('image')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">

              <img src="{{ Storage::url($user->image) }}" height="200" width="200" alt="" />
            </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
