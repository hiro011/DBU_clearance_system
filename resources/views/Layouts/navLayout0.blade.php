<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Table Edit</title>
 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/main.css">
        <meta charset="UTF-8">

        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="/css/bootstrap-min.css">
        
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> -->
        <script src="/jquery/jquery.js"></script>
        <script src="/jquery/ajax-jquery.js"></script>
        <script src="/jquery/jquery-2.js"></script>


        <script src="/jquery/jquery.js"></script>
        <script src="/jquery/ajax-jquery.js"></script>

        <style>
            .navbar2 a {
                padding: 8px 8px 8px 32px;
                color: rgb(0, 0, 0);
                text-decoration: none;
                font-size: 22px;
                display: flex;
                float: left;
                transition: 0.3s;
            }

            /* When you mouse over the navigation links, change their color */
            .navbar2 a:hover {
                background-color: rgb(85, 85, 221);
                color: #f1f1f1;
            }

            /* On smaller screens, where height is less than 450px, */
            @media screen and (max-height: 600px) {
            
                .navbar2 a {
                font-size: 18px;
                }
            
                .navbar2,
                {
                width: 100%;
                padding-top: 15px;
                }

                footer {
                width: 93.5%;
                }
            }

            .navbar_right{
                display: flex;
                list-style: none;
                box-sizing: border-box;
                font-family: 'Montserrat';
            }
            .topnav a.active:hover {
                opacity: 0.6;
            }
            
            .profile img{
                width: 45px;
                height: 50px;
            }

            .profile .down-icon{
                width: 25px;
                height: 20px;
            }

            .profile .icon_wrap{
                position: relative;
                display: flex;
                align-items: center;
                cursor: pointer;
                border-radius: 5px;
                padding-right: 20px;
                padding-left: 5px;
                background: linear-gradient(120deg, #1e7585, #0997bb, #19caf7);
            }
           
            .profile_dd{
                position: absolute;
                position: fixed;
                top: 60px; 
                right: 28px;
                /* margin-right: 220px;
                margin-top: 8px; */
                user-select: none;
                background: white;
                border: 1px solid #c7d8e2;
                width: 150px;
                height: auto;
                display: none;
                border-radius: 8px;
                box-shadow: 10px 10px 35px rgba(0,0,0,0.125),
                            -10px -10px 35px rgba(0,0,0,0.125);
               
                align-items: left;
                z-index: 1;
            }

            .profile_dd:before{
                content: "";
                position: absolute;
                top: -20px;
                right: 15px;
                border: 5px solid;
                border-color: transparent transparent #fff transparent;
                width: 10px;

            }
 
            .profile_dd .profile_ul  a{
                color: black;
                padding: 8px 0px 8px 0px;
                text-decoration: none;
                border-radius: 5px;
                font-size: 18px;
                display: block;
                transition: 0.3s;
                position: relative;
                width: 100%;
            }

            .profile_dd .spanText{
                color: black;
                font-size: 15px;
                padding: 10px;
            }

            .profile_dd .profile_ul  a:hover{
                color: #3b80f9;
                background: transparent;
                background: #d3dff8;
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0;
                cursor: pointer;
            }

            .profile .icon_wrap:hover{
                color: #3b80f9;
                opacity: 0.8;
            }
            
            .profile:hover .profile_dd{
                display: block;
            }
            
            .navbar_left a{
                padding: 0;
                width: 60px;
                height: 45px;
                border: none;
            }
            .navbar_left a:hover{
                opacity: 0.6;
            }
            .navbar_left img{
                width: 70px;
                height: 50px;
                border-radius: 8px;
            }

            table {
                display: block;
                border-collapse: collapse;
                border-spacing: 0;
                width: 100%;
                border: 2px solid #ddd;
                margin-bottom: 0;
                background-color: transparent;
                background-color: #fff;
                height: 500px;
                overflow-y: scroll;
                overflow-x: auto;
            }
            th, td {
                text-align: left;
                line-height: 1.42857143;
                vertical-align: top;
                border-bottom-width: 2px;
            }

            tr:nth-child(even){background-color: #f2f2f2}
            table tr:nth-child(){
            counter-reset: rowNumber;
            }
            table tr {
            counter-increment: rowNumber;
            }
            table tr td:first-child::before {
            content: counter(rowNumber);
            min-width: 1em;
            margin-right: 0.5em;
            }
        
            tr:hover {
                background-color: #f5f5f5
            }
    
            @media screen and (max-width:600px) {
                .table {
                    width: 100%;
                    margin-bottom: 15px;
                    overflow-y: hidden;
                    -ms-overflow-style: -ms-autohiding-scrollbar;
                    border: 1px solid #ddd;
                    margin-bottom: 0;
                }
    
                th, td {
                    border: 0;
                }
    
            }
             
        </style>
    </head>

    <body>

        <div class="containerBox">
            <div>

                <section id="navbar">
                    <div class="topnav">

                        <div class="navbar_left">
                            <a class="active" href="/" style="padding: 0;"><img src="/img/DBU-logo.png" alt="dbu-logo" ></a>
                            <span>DBU Clearance</span> 
                            <span > Processing System</span>

                        </div>

                        <div class="navbar_right">
                            @if(session()->has('LoggedUser'))
                                <div class="profile">
                                    <div class="icon_wrap">
                                        
                                        <img src="/img/profile_pic.svg" alt="profile_pic">
                                        <img src="/img/caret-down-outline.svg" alt="profile_pic" class="down-icon">

                                    </div>

                                    <div class="profile_dd">
                                        @if(session()->has('LoggedUser'))

                                            @if($LoggedUser['role']==='Admin')
                                                <span class="spanText">Admin</span>
                                            @endif
                                            @if($LoggedUser['role']==='Officer')
                                                <span class="spanText">Officer</span>
                                            @endif
                                            @if($LoggedUser['role']==='User')
                                                <span class="spanText">Clearance User</span>
                                            @endif
                                        
                                            <span class="spanText" style="text-align: left;">{{$LoggedUser['name']}}</span> </br>
                                        @endif
                                        <div class="profile_ul">
                                            <a class="logout" href="{{ route('auth.logout') }}">
                                                <img src="/img/logout-pic.png" alt="logout icon" style="width: 20px; height: 20px; margin-top: 5px; margin-right: 5px; margin-left: 5px;">
                                                Logout
                                            </a>

                                        </div>
                                    </div>
                                </div>

                                
                            @endif
                            <div class="about-btn">
                            <a id="link" href="/about">About</a>
                            </div>
                        </div>
                    
                    </div>  
            
                    <!-- script for navbar -->
                    
                    <script>
                        window.onscroll = function () { myFunction() };

                        var navbar = document.getElementById("navbar");
                        var sticky = navbar.offsetTop;

                        function myFunction() {
                            if (window.pageYOffset > sticky) {
                            navbar.classList.add("sticky")
                            } else {
                            navbar.classList.remove("sticky");
                            }
                        }
                    </script>
                
                </section>

                @yield('content')
              
            </div>

            <footer>
                @Copyright 2022 DBU Clearance System
            </footer>
          
        </div>

    </body>
</html>
