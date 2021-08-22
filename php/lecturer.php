<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lECTURER</title> 

</head>
<body>
    <?php
    
    ?>
     <!--- downloadpdf  course NOTES--->
    <center>
       <h2 style="color: green;">Welcome To CONTINENTAL</h2>
        <p>
            <b>Click below to download PDF</b>
        </p>
        <a href="courses.php">Download PDF Now</a>
    </center>
    <!---List of courses uploaded by lecturer--->
    <ul>
      <li><a href="csc208.html">csc208</a> </li>
      <li><a href="csc210.html">csc210</a></li>
      <li><a href="csc214.html">csc214</a></li>
      <li> <a href="csc212.html">csc212</a></li>
    </ul>
    <!--- Availability--->
    Lecturer's class  day
                   <form action="hidden">
                    <div>
                    <input title="This placeholder provide you with all your school
                    Days of the week" placeholder="days" list="Days" name="Day">
                    <datalist id="Days">
                        <option value="Tuesday"></option>
                        <option value="Wednesday"></option>
                        <option value="Thursday"></option>
                        <option value="Friday"></option>
                    </datalist>
                 </div>
                </form> 
    
</body>
</html>