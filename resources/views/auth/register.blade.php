<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
    .register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}

.link-primary
{
    padding: 8px 18px;
    background-color: #0062cc;
    border-radius: 30px;
    font-size: 20px;
    color: #fff;
    text-align: center;
    border: none;
    text-decoration: none;
}

</style>

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Donate Blood</p>
                        <a href="/login" class="link-primary">Login</a>
                    </div>
                    <div class="col-md-9 register-right">
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Registration</h3>
                                <form action="{{route('register')}}" method="POST">
                                    @csrf
                                
                                        <div class="row register-form">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Name *" name="name" value="" />
                                                    @error('name')
                                                        <small class="text-warning">{{$message}}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="address *" name="address" value="" />
                                                    @error('address')
                                                            <small class="text-warning">{{$message}}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" placeholder="Password *" name="password" value="" />
                                                    @error('password')
                                                            <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control"  placeholder="Confirm Password *" name="confirm_password" value="" />
                                                    @error('confirm_password')
                                                            <small class="text-danger">{{$message}}</small>
                                                        @enderror
                                                </div>
                                                @if (Session::has('password'))
                                                    <small class="text-danger">{{Session::get('password')}}</small>
                                                @endif
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Your Email *" name="email" value="" />
                                                    @error('email')
                                                        <small class="text-danger" >{{$message}}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input type="text"  class="form-control" placeholder="Your Phone No 1*" name="phone_1" />
                                                    @error('phone_1')
                                                        <small class="text-warning">{{$message}}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input type="text"  class="form-control" placeholder="Alternative Phone No" name="phone_2" value="" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text"  class="form-control" placeholder="Facebook id link" name="fb_link" value="" />
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control" name="blood_group">
                                                        <option class="hidden"  selected disabled>Blood Group *</option>
                                                        <option>A Positive</option>
                                                        <option>A Negative</option>
                                                        
                                                        <option>B Positive</option>
                                                        <option>B Negative</option>
                                                        
                                                        <option>AB Positive</option>
                                                        <option>AB Negative</option>
                                                        
                                                        <option>O Positive</option>
                                                        <option>O Negative</option>
                                                        
                                                    </select>
                                                    @error('blood_group')
                                                        <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                                
                                                <input type="submit" class="btnRegister"  value="Register"/>
                                            </div>
                                        </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>