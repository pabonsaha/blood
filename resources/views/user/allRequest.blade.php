<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <style>
        body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
    </style>
</head>
<body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                       
                                    </h5>
                                    
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item d-flex">
                                    <a class="nav-link " style="color: blue" id="home-tab" data-toggle="tab" href="{{route('dashboard')}}" role="tab" aria-controls="home" aria-selected="true">About</a>
                                    <a style="color: rgb(22, 240, 131)" class="nav-link active" id="home-tab" data-toggle="tab" href="{{route('allRequest')}}" role="tab" aria-controls="home" aria-selected="true">All Request</a>
                                    <a style="color: orangered" class="nav-link" id="home-tab" data-toggle="tab" href="{{route('request')}}" role="tab" aria-controls="home" aria-selected="true">Send Request For Blood</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="{{route('editProfile')}}"  class="profile-edit-btn">Edit Profile</a>
                    </div>
                    <div class="col-md-2">
                        <a style="color: rgb(241, 32, 32)" href="{{route('logout')}}"  class="profile-edit-btn">Logout</a>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        
                                        <th scope="col">Message</th>
                                        <th scope="col">Time</th>
                                        
                                      </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($requests as $request)
                                        
                                    <tr>
                                        
                                        <td>{{$request->message}}</td>
                                        <td>{{$request->created_at}}</td>
                                        
                                    </tr>
                                    @endforeach
                                      
                                    </tbody>
                                  </table>
                                     
                            </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                      
        </div>
</body>
</html>