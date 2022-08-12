 

@extends('Layouts.navLayout')

@section('content')
             

  
    <style>
        .profile_dd{
            top: 58px; 
            right: 290px;
            height: auto;
        }
        #navbar .active{
            border: 1px solid;
            color: white;
        }
        
        .inputfield select{
            cursor: pointer;
        }
        .inputfield1{
            display: none;
            cursor: pointer;
        }
        .dropdown-container{
            display: block;
        }
        .column {
            float: left;
            width: 30%;
            background-color: rgb(224, 235, 240);
            margin-top: 0;
            padding-top: 3%;
            height: auto;
        }
        .containerBox{
            background-color: #9db9c0;
        }

        .column1 {
            float: left;
            display: block;
            width: 50%;
            background-color: white;
            margin-top: 0;
            padding: 10px;
            margin-left: 23%;
        }
         
        .body-container {
            background: #ffffff;
            margin-top: 0;
        }
        .column a{
            border-radius: 4px;
        }
 
        body {
            font-family: 'Nunito', sans-serif;
            padding-left: 8%;
            padding-right: 8%;
        }
        .sticky {
            width: 71.3%;
        }
        
        footer{
            width: 98%;
        }

        @media screen and (max-width:600px) {
                
            body {
                padding-right: 2%;
                font-family: "Times New Roman", Times, serif;
            }
            .profile_dd{
                top: 58px; 
                right: 40px;
                /* margin-right: 500px; */
                height: auto;
            }
            
            .sticky {
                width: 78.5%;
            }
            .column {
                display: block;
                float: left;
                /* width: 100%; */
                background-color: rgb(224, 235, 240);
                margin-top: 0;
                padding-top: 3%;
                height: auto;
                margin-left: 0;
                width: 95%;
            }  
            .column1 {
                display: flex;
                float: center;
                width: 80%;
                margin-top: 0;
                /* margin: 50px; */
                /* padding: 30px; */
            }
            footer{
                width: 90%;
                margin-right: 20px;
            }
            
            .body-container a {
                font-size: 12px;

            }
            .body-container {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }
            .navbar2 {
                width: 40%;
                margin-left: 50px;

            }
            .navbar2 ul{
                width: 40%;
                margin-left: 25px;
                /* padding-left: 80px; */
            }
            #columns{
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }

            
        }
        
        .dropspanCurrent { 
            padding: 8px 8px 8px 10px;
            text-decoration: none;
            font-size: 22px;
            display: block;
            background: transparent;
            text-align: center;
            color: black;
            margin-top: 5px;
        }
        
        .navbar2{
            display: flex;
            float: left;
            width: 91.2%;
            margin-right: 50px;
            background-color: rgb(224, 235, 240);
            padding-top: 5px;
            padding-left: 80px;
            height: auto;
            border: 1px solid lightblue;
            
        }

        .navbar2 a {
            text-align:center;
            float: left;
            display: block;
            padding: 8px 8px 8px 15px;
            color: rgb(0, 0, 0);
            text-decoration: none;
            font-size: 16px;
            transition: 0.3s;
        }

        /* When you mouse over the navigation links, change their color */
        .navbar2 a:hover {
            background-color: rgb(85, 85, 221);
            color: #f1f1f1;
        }

    </style>
 
    <section id="columns">
        <span class="dropspanCurrent" >Clearance Form</span></br>

        <div class="navbar2">
        
            <ul style="margin-top: 0;">
                @if($regStud)
                <a href="/clearance/regular student" id="regStudA">Regular Student</a>
                @endif
                @if($extnStud)
                <a href="/clearance/extension student" id="extnStudA">Extension Student</a>
                @endif
                @if($disStud)
                <a href="/clearance/distance student" id="disStudA">Distance Student</a>
                @endif
                @if($teacher)
                <a href="/clearance/teacher" id="teacherA">Teacher</a>
                @endif
                @if($adminstaff)
                <a href="/clearance/admin staff" id="adminStaffA">Admin Staff</a>
                @endif
            </ul>
            </br>

        </div>
        <div class="body-container">
            

  
        <style>
            
            #regStudA {
                background-color: blue;
                color: white;
            } 
            #regStudA:hover {
                opacity: 0.8;
                color: black;
            } 
        </style>
    

    <div class="column1" >

    
        <div class="wrapper" style="margin-top: 0;">

            <div class="title">Regular Student Form</div>
            <div class="form">
                <form action="" method="post">

                    <div class="inputfield"> 
                        <label>Name</label> </br>
                        <input type="text" class="input" name="name" placeholder="Enter Your Name" value="{{ old('name') }}"> </br>
                        <span style="color: red;">@error('name'){{ $message }} @enderror</span>
                    </div>  
                        
                    <div class="inputfield">
                        <label>ID</label></br>
                        <input type="text" class="input" name="id" placeholder="Enter Your ID" value="{{ old('email') }}"> </br>
                        <span style="color: red;">@error('id'){{ $message }} @enderror</span>
                    </div>  

                    <div class="inputfield">
                        <label>Gender</label></br>
                        <div class="custom_select">
                            <select id="gender" name="gender">
                                <option selected disabled>Select</option>

                                <option value="Male"  @if(old('gender') === 'Male') selected @endif>Male</option>
                                <option value="Female"  @if(old('gender') === 'Female') selected @endif>Female</option>
                            </select></br>
                            <span style="color:red;">@error('gender'){{ $message }} @enderror</span>

                        </div>
                    </div> 

                    <div class="inputfield">
                        <label>Year</label></br>
                        <input type="text" class="input" name="year" placeholder="Enter Year" value="{{ old('email') }}"></br>
                        <span style="color: red;">@error('year'){{ $message }} @enderror</span>
                    </div>

                    <div class="inputfield">
                        <label>Reason</label></br>
                        <div class="custom_select">
                            <select id="reason" name="reason">
                                <option selected disabled>Select</option>
                                <option value="end_of_year">End of Acadamic Year</option>
                                <option value="withdrow">Withdrow</option>
                                <option value="transfer">Transfer</option>
                                <option value="readmission">Readmission</option>
                            </select></br>
                            <span style="color: red;">@error('reason'){{ $message }} @enderror</span>
                        </div>
                    </div> 

                       
                    <div class="inputfield" style="margin-top: 20px;">
                        <input type="submit" value="Submit" class="btn">
                    </div>
                </form>
                
            </div>
        </div>	
    
    </div>


@endsection

