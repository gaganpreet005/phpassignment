<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dynamic Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  
    <header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src=https://th.bing.com/th/id/OIP.M1rKW-3bk5R1JEylL3j9UwHaHk?w=167&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" width="55" height="55">
</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/Gagan/?#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.georgiancollege.ca/admissions/forms/#forms">Forms</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Academics
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://www.georgiancollege.ca/admissions/apply/">How to apply</a></li>
            <li><a class="dropdown-item" href="https://www.georgiancollege.ca/admissions/confirm-seat/">Confirm seat</a></li>
            <li><a class="dropdown-item" href="https://www.georgiancollege.ca/admissions/register/">Register for Cource</a></li>
            <li><a class="dropdown-item" href="https://www.georgiancollege.ca/admissions/credit-transfer/">Credit Transfer</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.georgiancollege.ca/finance-and-fees/ ">Fees and Financials</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.georgiancollege.ca/student-life/ ">Student life</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.georgiancollege.ca/admissions/contact/#contact-info ">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> 
</ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>

      </form>
    </div>
  </div>
</nav>
</header>

<main>
<?php
$insert = false;
if(isset($_POST['name'])){
//Connecting to the Database

$server="localhost";
$username="root";
$password="";

//Creating the Connections
$con=mysqli_connect($server,$username,$password);

//Creating Database
// $sql="CREATE DATABASE assignment";
// mysqli_query($conn,$sql);

//Creating Table

// $tbl ="CREATE TABLE  `Assignment`.`Employee_info`(`EmpID` INT(10) NOT NULL AUTO_INCREMENT,`Employee_Name` VARCHAR(25) NOT NULL,`Salary_recieved` DOUBLE(10) NOT NULL";
// $result=mysqli_query($conn,$tbl);

if(!$con){
  die("Sorry we failed to connect".mysqli_connect_errno());
}
else{
  echo"Table is Succefully Cerated <br>";
}

$name = $_POST['name'];
$id = $_POST['id'];
$phone = $_POST['phone'];
$course = $_POST['course'];
$semester = $_POST['semester'];
$sql="INSERT INTO `student_detail`.`student` (`Student_name`, `Student_id`, `Phone_number`, `Cource`, `Semester`, `date`) VALUES ('$name', '$id', '$phone', '$course', '$semester', current_timestamp());  "   ;
  //echo $sql;

if($con->query($sql)== True){
  //  echo "Sucessfully inserted";
  $insert = true;
}
else{
  echo "Error: $sql <br> $con->error";
 
}

$con->close();
}

  if($insert == true)
 echo "Thanks for Submition <br>"
 
?>
</main>
 
    <footer>
		<p>&copy; 2023 My Website</p>
	</footer>
    <?php
    
    ?>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>