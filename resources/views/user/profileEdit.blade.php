<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
        .note
{
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #0072ff, #8811c5);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
}
.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
}
.form-control{
    border-radius:1.5rem;
}
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #0062cc;
    color: #fff;
}
    </style>
</head>
<body>
    <!------ Include the above in your HEAD tag ---------->
    
    <div class="container register-form">
        <div class="form">
            <div class="note">
                <p>Edit Profile</p>
                </div>
                    <form action="{{route('basicInfo')}}" method="POST">

                        @csrf
                        <div class="form-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Your Name *" value="{{$user->name}}"/>
                                        @error('name')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="address" placeholder="Address *" value="{{$user->address}}"/>
                                        @error('address')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="blood_group">
                                            
                                            <option @php
                                            if($user->blood_group=='A Positive')echo 'selected';
                                        @endphp>A Positive</option>
                                            <option @php
                                            if($user->blood_group=='A Negative')echo 'selected';
                                        @endphp>A Negative</option>
                                            
                                            <option @php
                                                if($user->blood_group=='B Positive')echo 'selected';
                                            @endphp>B Positive</option>
                                            <option @php
                                            if($user->blood_group=='B Negative')echo 'selected';
                                        @endphp>B Negative</option>
                                            
                                            <option @php
                                            if($user->blood_group=='AB Positive')echo 'selected';
                                        @endphp>AB Positive</option>
                                            <option @php
                                            if($user->blood_group=='AB Negative')echo 'selected';
                                        @endphp>AB Negative</option>
                                            
                                            <option @php
                                            if($user->blood_group=='O Positive')echo 'selected';
                                        @endphp>O Positive</option>
                                            <option @php
                                            if($user->blood_group=='O Negative')echo 'selected';
                                        @endphp>O Negative</option>
                                            
                                        </select>
                                        @error('blood_group')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone_1" placeholder="Phone Number 1 *" value="{{$user->phone_1}}"/>
                                        @error('name')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone_2" placeholder="Phone Number 2" value="{{$user->phone_2}}"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="fb_link" placeholder="Facebook link" value="{{$user->fb_link}}"/>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <button type="submit" class="btnSubmit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container register-form">
        <div class="form">
            <div class="note">
                <p>Edit Last Blood Donate Date</p>
                </div>
                    <form action="{{route('bloodInfo')}}" method="POST">

                        @csrf
                        <div class="form-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="date" placeholder="Date" value="{{$user->last_donation_date}}"/>
                                       
                                    </div>
                                    
                                    
                                </div>
                                
                                
                            </div>
                            <button type="submit" class="btnSubmit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>