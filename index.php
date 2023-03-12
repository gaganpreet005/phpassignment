<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dynamic Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
      form {
  width: 400px;
  margin: 0 auto;
  font-family: Arial, sans-serif;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"], input[type="tel"] {
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 3px;
  margin-bottom: 10px;
  width: 100%;
}

button[type="submit"] {
  background-color: #4CAF50;
  border: none;
  color: #fff;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 3px;
  cursor: pointer;
  margin-top: 10px;
}

hr {
  margin: 20px 0;
  border: none;
  border-top: 1px solid #ccc;
}

    </style>
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
<div class="container mt-3">
  
<form method="post" action="view_content.php">
<label for="id">Student Name:</label>
<input type="text" id="id" name="name" required><br><hr>
<label for="id">Student ID:</label>
<input type="text" id="id" name="id" required><br><hr>

<label for="phone">Phone:</label>
<input type="tel" id="phone" name="phone" required><br><hr>

<label for="course">Course:</label>
<input type="text" id="course" name="course" required><br><hr>

<label for="semester">Semester:</label>
<input type="text" id="semester" name="semester" required><br>

<button type="submit">Save</button>

      

			
		</form> 
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