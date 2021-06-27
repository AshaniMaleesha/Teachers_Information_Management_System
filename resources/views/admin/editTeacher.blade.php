<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> 
<style>
*{
    margin: 0;
    padding: 0;  
}
#body1{
    background-color: black;
    width:100%;
    height: 150px;
    margin: 0;
    padding: 0;
    position: relative;
    font-family: 'Oswald', sans-serif; 
}
#body3{
   background-color: black;
   margin-bottom: 0;
}

#body2{
    background-color: gray;
}
#logo{
    height: 150px;
    width: 150px;
}
h6{
    color:rgb(124, 117, 117);
    margin-left: 160px;
    margin-top: -110px;
    font-size: 50px;
}
.nav{
    font-size: 18px;
    float: right;
    margin-right: -10px;
    
}
.nav ul{
    display: flex;
    padding:65px;
    list-style: none;
}

.nav ul li{
    padding-left: 20px;
    padding-right: 10px;   
}
.nav ul li a{
    text-decoration: none;
    color:white;
    text-transform: uppercase;
    border: 1px hidden rgb(124, 117, 117);
    padding:10px;
    border-radius: 5px; 
}
.nav ul li a:hover{
    color:black;
    background-color: rgb(124, 117, 117);
} 
.foot ul{
    display: flex;
    padding:65px;
    list-style: none;
    margin-left: 525px;
}

.foot ul li{
    padding-left: 10px;
    padding-right: 10px;  
}

.foot ul li a{
    text-decoration: none;
    padding:10px;
    border-radius: 5px;
}      

.datepicker{
    
    background-color: white;
}


 </style>
     </head>
        <body>  
            <div>
                <div><div id="body1">
                    <img src="/images/logo2.jpg" id="logo">
                    <h6>Teachers Information Management System<h6>
                    <div class="nav">
                        <ul>
                            <li><a href="/admin/dashboard">Home</a></li>
                            <li><a href="/admin/AddNew">Add New</a></li>
                            <li><a href="/admin/ViewList">View List</a></li>
                            <li><a href="{{ route('auth.logout') }}">Logout</a></li>
                        </ul>
                    </div>
                </div></div>
                <div><div id="body2">
                    <section style="padding-top:10px;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 offset-md-5">
                                    <div class="card" style="font-weight:bold;background-color:#0b2c4d;color:white;font-size:16px;">
                                        <div class="card-header">
                                            Edit Teacher Details 
                                        <hr>
                                        <div class="card-body ">
                
                                            @if (Session::has('Record_updated'))
                                                <div class="alert alert-success" role="alert">
                                                   {{ Session::get('Record_updated') }}
                                                </div>
                                            @endif
                
                                            <form method="POST" action="{{ route('teacher.update') }}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $teacher->id }}" />  
                                            <div class="form-group">
                                                <label for="name">Full Name</label>
                                                <input type="text" name="name" value="{{ $teacher->name }}" class="form-control"/>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input type="text" name="address" value="{{ $teacher->address }}" class="form-control"/>
                                            </div>
                                            <br>
                                            <div class="form-group row">
                                                <label for="birthday" class="col-md-6 col-form-lable text-md-left">Date Of Birth</label>
                                                <div class="col-md-12">
                                                <input type="date" name="birthday" value="{{ $teacher->birthday }}" class="form-control datepicker" style="background-color: white"/>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <select class="form-control" id="gender" name="gender" value="{{ $teacher->gender }}">
                                                <option value="Male"{{ $teacher->gender =="Male" ? 'selected' : ''}}>Male</option>
                                                <option value="Female"{{ $teacher->gender =="Female" ? 'selected' : ''}}>Female</option>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label>Ethnic</label>
                                                <select class="form-control" id="ethnic" name="ethnic" value="{{ $teacher->ethnic }}">
                                                <option value="Sinhalese"{{ $teacher->ethnic =="Sinhalese" ? 'selected' : ''}}>Sinhalese</option>
                                                <option value="Tamils"{{ $teacher->ethnic =="Tamils" ? 'selected' : ''}}>Tamils</option>
                                                <option value="Muslims"{{ $teacher->ethnic =="Muslims" ? 'selected' : ''}}>Muslims</option>
                                                <option value="Burgers"{{ $teacher->ethnic =="Burgers" ? 'selected' : ''}}>Burgers</option>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="form-group ">
                                                <label>Religion</label>
                                                <select class="form-control" id="religion" name="religion" value="{{ $teacher->religion }}">
                                                <option value="Buddhism"{{ $teacher->religion =="Buddhism" ? 'selected' : ''}}>Buddhism</option>
                                                <option value="Hindu"{{ $teacher->religion =="Hindu" ? 'selected' : ''}}>Hindu</option>
                                                <option value="Islam"{{ $teacher->religion =="Islam" ? 'selected' : ''}}>Islam</option>
                                                <option value="Christian"{{ $teacher->religion =="Christian" ? 'selected' : ''}}>Christian</option>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <div class="custom-file" placeholder="">
                                                    <label for="file" >Profile Image</label>
                                                    <input type="file" name="file" class="form-control"  onchange="previewFile(this)"/>
                                                    <p style="font-size: 13px;color:rgb(68, 1, 1);">(Re-enter your profile image)</p>
                                                    <img id="previewImg" name="profileimage" src="{{ asset('profileimages') }}/{{ $teacher->profileimage }}" style="max-width:130px;margin-top:20px;"/>
                                                </div>
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <a href="" class="btn btn-primary ">Home</a>
                                            </form>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div><div id="body3">
                            <div class="foot">
                                <ul>
                                    <li><a href="#"><img src="/images/facebook.png" style=height:40px;width:40px></a></li>
                                    <li><a href="#"><img src="/images/instagram.png" style=height:40px;width:40px></a></li>
                                    <li><a href="#"><img src="/images/linkedin.png" style=height:40px;width:40px></a></li>
                                    <li><a href="#"><img src="/images/twitter.png" style=height:40px;width:40px></a></li>
                                </ul>
                            </div>
                            <h4 style= color:rgb(124,117,117);font-size:15px;padding:3px;text-align:center;margin-top:-30px;>
                                Copyright©2021 ABC National College</h4>
                        
                        </div></div>
                    </section>
                    </div></div>
            </div>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
                   
                    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                    <link rel="stylesheet" href="/resources/demos/style.css">
                    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

                    <script>
                        function previewFile(input){
                            var file=$("input[type=file]").get(0).files[0];
                
                            if(file){
                                var reader = new FileReader();
                                reader.onload = function(){
                                    $('#previewImg').attr("src",reader.result);
                                }
                                reader.readAsDataURL(file);
                            }
                         }
                             $( function() {
                                $( ".ethnic" ).selectmenu();
                            } );
                            $( function() {
                                $( ".religion" ).selectmenu();
                            } );
                    </script>
                        
        </body>
</html>