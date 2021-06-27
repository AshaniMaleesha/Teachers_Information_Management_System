<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New</title>
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

#body2{
   height: 200px;
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

tr:nth-child(even){background-color:rgb(26, 24, 24)}
tr:nth-child(odd){background-color:#0b2c4d;}
 </style>
     </head>
        <body>  
            <div>
                <div>
                    <div id="body1">
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
                    </div>
                </div>
            
                <div><div id="body2">
                    <section style="padding-top:30px;">
                        <div class="card-header" style="text-align: center;color:black;background-color: rgb(167, 161, 161);font-weight:bold;font-size:18px;">
                            View Of All The Teachers Details</div>
                            <br>
                            <br>
                            @if (Session::has('record_deleted'))
                            <div class="alert alert-success" role="alert">
                               {{ Session::get('record_deleted') }}
                            </div>
                            @endif
                            <table class="table table-striped" style="color: white;font-weight:bold;" >
                                <thead style="color: rgb(143, 134, 134);font-weight:bold;bakground-color:white;">
                                    <tr >
                                        <th style="width:250px;">Name</th>
                                        <th style="width:200px;">Address</th>
                                        <th>Date_of_birth</th>
                                        <th>Gender</th>
                                        <th>Ethnic Group</th>
                                        <th>Religion</th>
                                        <th>Profile Image</th>
                                        <th style="width:200px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teachers as $teacher)
                                        <tr style="color: rgb(167, 161, 161);"> 
                                            <td>{{ $teacher->name }}</td>
                                            <td>{{ $teacher->address }}</td>
                                            <td>{{ $teacher->birthday }}</td>
                                            <td>{{ $teacher->gender }}</td>
                                            <td>{{ $teacher->ethnic }}</td>
                                            <td>{{ $teacher->religion }}</td>
                                            <td><img src="{{ asset('profileimages') }}/{{ $teacher->profileimage }}" style="max-width: 80px;height:80px;"/></td>   
                                            <td>
                                                <a href="/editTeacher/{{ $teacher->id }}" class="btn btn-info">Edit</a>
                                                <a href="/deleteTeacher/{{ $teacher->id }}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                                        
                    </section> 
                </div></div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
           
        </body>
</html>