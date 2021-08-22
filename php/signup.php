<!DOCTYPE html>
<html lang="en">
<head>
        <title>QUESER</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="css/materialize.css"/>
        <link rel="stylesheet" type="text/css" href="css/materialize.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
        <style>
                ul {

                  list-style-type: none;
                  margin: 0;
                  padding: 0;
                  overflow: hidden;
                  background-color: #333;
                }
                
                li {
                  float: left;
                }
                
                li a, .dropbtn {
                  display: inline-block;
                  color: white;
                  text-align: center;
                  padding: 14px 16px;
                  text-decoration: none;
                }
                
                li a:hover, .dropdown:hover .dropbtn {
                  background-color: red;
                }
                
                li.dropdown {
                  display: inline-block;
                }
                
                .dropdown-content {
                  display: none;
                  position: absolute;
                  background-color: #f9f9f9;
                  min-width: 160px;
                  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                  z-index: 1;
                }
                
                .dropdown-content a {
                  color: black;
                  padding: 12px 16px;
                  text-decoration: none;
                  display: block;
                  text-align: left;
                }
                
                .dropdown-content a:hover {background-color: #f1f1f1;}
                
                .dropdown:hover .dropdown-content {
                  display: block;
                }
        img {
          display: block;
          margin-left: auto;
          margin-right: auto;
        }
        
.e1_69 {
	overflow:hidden;
}
.e1_69 { 	background-color:rgba(40.37499949336052, 36.16927117109299, 36.16927117109299, 1);
	width:100%;
	height:160px;
	position:relative;
}
.e1_70 { 

	width:748px;
	height:171.3208465576172px;
	position:absolute;
	left:0px;
	top:0px;
}
.e1_71 { 
	color:rgba(255, 255, 255, 1);
	width:109.43891906738281px;
	height:44.52406692504883px;
	position:absolute;
	left:1150px;
	top:29.037416458129883px;
	font-family:Rokkitt;
	;
	font-size:18px;
	letter-spacing:0;
}
.e1_72 { 
	color:rgba(255, 255, 255, 1);
	width:177.71275329589844px;
	height:44.52406692504883px;
	position:absolute;
	left:61.245635986328125px;
	top:55.17112350463867px;
	font-family:Rokkitt;
	text-align:left;
	font-size:18px;
	letter-spacing:0;
}
.e1_73 { 
	color:rgba(255, 255, 255, 1);
	width:369.4819030761719px;
	height:52.26737976074219px;
	position:absolute;
	left:500px;
	top:128.7327117919922px;
	font-family:Rokkitt;
	text-align:center;
	font-size:20px;
	letter-spacing:0;
}
.e1_74 { 
	width:40.16107940673828px;
	height:38.716575622558594px;
	position:absolute;
	left:1150px;
	top:53.235321044921875px;
	background-image:url("twitter_icon.png");
	background-repeat:no-repeat;
	background-size:cover;
}
.e1_75 { 
	width:40.16107940673828px;
	height:38.716575622558594px;
	position:absolute;
  left:1200px;
	top:58.07486343383789px;
	background-image:url("instagram_icon.png");
	background-repeat:no-repeat;
	background-size:cover;
}
.e1_76 { 
	width:40.16107940673828px;
	height:38.716575622558594px;
	position:absolute;
  left:1250px;
	top:55.17112350463867px;
	background-image:url("facebook_icon.png");
	background-repeat:no-repeat;
	background-size:cover;
}

    .footer {
       position: fixed;
        padding-left: 200px;
       width: 100%;
       background-color:black;
       color: white;
      
    }
    .form1{border:3px solid pink;top:100px;border-radius:8px;padding:25px;background-color:rgb(238, 230, 230);text-align:center;width:60%;font-style:bold;margin:250px}
#input1{padding:4px;font-size:20px;color:}
.login01:a hover{color:pink;background-color:yellow}
 span{color: #FF0000;}
        </style>
</head>



<body>
<center><img src="ublogo.jpg"height="85"width="85" alt="logo"></center>
        <ul>
        <li><a href="http://localhost/php/Home.php">HOME</a></li>
                <li><a href="#home">LECTURER</a></li>
                <li><a href="http://localhost/php/login.php">STUDENT</a></li>
                <li><a href="#contact">About Us</a></li>
                <li class="dropdown" style="float: right">
                  <a href="javascript:void(0)" class="dropbtn">ACCOUNT</a>
                  <div class="dropdown-content">
                    <a href="http://localhost/php/signup.php">CREATE ACCOUNT</a>
                    <a href="http://localhost/php/login.php">SIGN IN</a>
                   
                  </div>
                </li>
              </ul>

    
<h1 style="text-align:center;color:Blue;Border:5px solid grey;width:50%;padding:20px;border-radius:6px;background-color: aqua; position:absolute;left:300px">SIGNUP FORM</h1>
    <form class="form1" action="signup.php" method="POST" id="input1"><br><br>
        <label>Full Name:</label><span>*</span>        
        <input name="name"  id="input1"type="text" placeholder="enter your name here..." style="width:70%"><br><br>
        <label>Gender:</label> <span>*</span>
        <input name="gender" id="input1" type="radio" >Male
        <input name="gender"  id="input1" type="radio">Female<br><br>
        <label>Matricule number:</label><span>*</span>
        <input name="matricule"  id="input1" type="text"style="width:50%"><br><br>
        <label>Faculty:</label>
        <input name="Faculty" id="input1" type="text"style="width:50%"><br><br>
        <label>Department:</label><span>*</span>
        <input name="Department"  id="input1" type="text"style="width:50%"><br><br>
        <label>Level:</label><span>*</span>
        <select name="level" id="input1" >
            <option select="select">200</option>
            <option>300</option>
            <option>400</option>
            <select><br><br>
        <label>Email Address:</label><span>*</span>
        <input name="Email"  id="input1" type="Email"style="width:50%"><br><br>
        <label>Phone number:</label><span>*</span>
        <input name="phone"  id="input1" type="number"style="width:50%"><br><br>
       
        <label>Create Password</label><span>*</span>
        <input name="password" id="input1" type="password" max-size="20"style="width:50%">
    <p>
        <input name="Submit"  id="input1" type="submit" value="Submit">
        <input name="clear"  id="input1" type="reset" value="Clear">
    </p>
<br>
    <center><a href="login.php" class="login01">I already have an Account</a></center>
        
    </form>
    <?php
    $fullname=$gender =$matric =$faculty=$department=$level=$email=$phone=$password="";  

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
  
$fullname = test_input($_POST["name"]);
      
$gender = test_input($_POST["gender"]);
          
        
          
      
$matric = test_input($_POST["matricule"]);
         
          
$faculty = test_input($_POST["Faculty"]);
         
$department = test_input($_POST["Department"]);
         
$level = test_input($_POST["level"]);
         
$email = test_input($_POST["Email"]);
          
$phone = test_input($_POST["phone"]);

$password = test_input($_POST["password"]);
  }
  
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "student_info";


  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "INSERT INTO student_info (Name, Gender, Matr.No, Faculty, Department, level, Email, Phone, Password, Num)
  VALUES ( 'name', 'gender', 'matricule', 'faculty', 'department', 'level', 'email', 'phone', 'password')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();






  ?>

 <center><marquee>A PLATFORM FOR TEACHERS AND STUDENT IN THE DEPARTMENT OF COMPUTER SCIENCE IN THE UNIVERSITY OF BUEA</marquee></center>
  <!--beginning of footer-->
  <footer class="page-footer">



<div class=e1_69 >
    <div class="e1_71"></div><b  class="e1_71" style="text-align:right">FOLLOW US</b>
    <span  class="e1_72">ABOUT LECTURERS</span>\
    <span  class="e1_73">©COPYRIGHT CONTINENTAL 2021</span>
    <div class="e1_74"></div>
    <div class="e1_75"></div>
    <div class="e1_76"></div>
  </div>

		  <!--end of footer-->

  
    </body>

</html>
       