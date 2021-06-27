<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
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
    font-family: 'Oswald', sans-serif; 
}

#body1{
    background-color: black;
    width:100%;
    height: 150px;
    margin: 0;
    padding: 0;
    position: relative;
}

#body2{
    background-image: url('/images/teacher7.jpg');
    width:100%;
    height: 550px;
    background-size: cover;
}
#body3{
    background-color: black;
    width:100%;
    height: 200px;
    position: relative; 
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

.foot ul{
    display: flex;
    padding:65px;
    list-style: none;
    margin-left: 525px;  
}
.nav ul li{
    padding-left: 20px;
    padding-right: 10px; 
}

.foot ul li{
    padding-left: 10px;
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

.foot ul li a{
    text-decoration: none;
    padding:10px;
    border-radius: 5px;
}

.nav ul li a:hover{
    color:black;
    background-color: rgb(124, 117, 117);
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
                    <li><a href="#">Home</a></li>
                    <li><a href="/admin/AddNew">Add New</a></li>
                    <li><a href="/admin/ViewList">View List</a></li>
                    <li><a href="{{ route('auth.logout') }}">Logout</a></li>
                </ul>
            </div>
        </div></div>

        <div><div id="body2"></div></div>
        
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
    </div>
</body>
</html>