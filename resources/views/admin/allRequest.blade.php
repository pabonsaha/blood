
@extends('admin.admin_master')

@section('admin')

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">


            <table class="table table-striped">
                <thead>
                  <tr>
                    
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone 1</th>
                    <th scope="col">Phone 2</th>
                    <th scope="col">Message</th>
                    <th scope="col">Time</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                            
                        <tr>
                            <th>{{$message->name}}</th>
                            <th>{{$message->address}}</th>
                            <th>{{$message->email}}</th>
                            <th>{{$message->phone_1}}</th>
                            <th>{{$message->phone_2}}</th>
                            <th class="text-primary col-3">{{$message->message}}</th>
                            <th>{{$message->created_at}}</th>
                            
                        </tr>

                    @endforeach
                  
                </tbody>
              </table>
            
            
           

        </div>
    </div>
    
</div>
    



@endsection