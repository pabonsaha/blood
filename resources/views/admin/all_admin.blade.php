
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
                <h2 class="mb-4">All Admin List</h2>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($admins as $admin)
                            
                        <tr>
                            <th scope="row">{{$admin->id}}</th>
                            <td>{{$admin->name}}</td>
                            <td>{{$admin->email}}</td>
                            @if ($admin->id!=1)
                            <td><a href="{{url('admin/delete_admins/'.$admin->id) }}">Delete</a></td>
                                
                            @endif
                        </tr>
                    @endforeach
                      
                    </tbody>
                  </table>
            </div>
            
            
           

        </div>
    </div>
    
</div>
    



@endsection