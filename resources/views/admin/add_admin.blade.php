
@extends('admin.admin_master')

@section('admin')

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">


            <div class="container mt-5">
                <h2 class="mb-4">Add Admin List</h2>
                <form method="POST" action="{{route('admin.store_admin')}}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" name= "name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                      @error('name')
                      <small id="emailHelp" class="form-text text-danger">{{$message}}</small>

                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      @error('email')
                      <small id="emailHelp" class="form-text text-danger">{{$message}}</small>

                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      @error('password')
                      <small id="emailHelp" class="form-text text-danger">{{$message}}</small>

                      @enderror
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                
            </div>
            
            
           

        </div>
    </div>
    
</div>
    



@endsection