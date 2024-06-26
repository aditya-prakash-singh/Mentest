<?php
$servername = "localhost";
$username = "urstapoj_ankush";
$password = "Ankush@123#";
$database = "urstapoj_mentest";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 


// Check if the 'id' parameter exists in the URL
if (isset($_GET['id'])) {
    // Get the value of 'id'
    $id = $_GET['id'];

    // Now you can use $id in your PHP code
   // echo "The ID from the URL is: " . htmlspecialchars($id);
   echo $id;
} else {
    echo "No ID parameter found in the URL.";
}


// SQL query to fetch data from the counsellor table
$sql = "SELECT * FROM counsellor where id=$id ";
$result = $conn->query($sql);



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Counsellor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body style="margin:50px 80px 50px 80px;background-color:#fedbc5;color:black;">
    <div class="align-middle p-4" style="border:1px solid black;border-radius:26px">

    <form class="row g-3" action="userappoint.php" method="POST">
        
         <input type="hidden" name="counsellorid" value="<?php echo htmlspecialchars($id); ?>">
      <div class="col-md-5">
        <label for="inputEmail4" class="form-label">Name</label>
        <input type="text" class="form-control" id="inputEmail4" name="name" placeholder="Enter your Name" required>
      </div>
        <div class="col-md-5">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Enter your Email" required>
        </div>
        <div class="ps-3 col-md-2">
          <label for="" class="form-">Gender</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" id="flexRadioDefault1" value="male" name="gender">
          <label class="form-check-label " for="flexRadioDefault1">Male</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" id="flexRadioDefault2" value="female" name="gender" checked>
          <label class="form-check-label" for="flexRadioDefault2">Female</label>          
        </div>
      </div>
      <div class="col-md-5">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" id="inputCity" name="city" placeholder="Enter your City" required>
      </div>
      <div class="col-md-5">
        <label for="inputCity" class="form-label">State</label>
        <input type="text" class="form-control" id="inputCity" name="state" placeholder="Enter your State" required>
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label">Zip</label>
        <input type="text" class="form-control" id="inputZip" name="zip" placeholder='Pincode' required>
      </div>
      <div class="col-md-2">
        <label for="inputPhone" class="form-label">Phone</label>
        <input type="number" class="form-control" id="inputPhone" name="phone" min='6000000000' placeholder="Phone Number" max='9999999999' required>
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label"><a href="self.php">Assesment Score</a> </label>
        <select id="inputState" class="form-select" required name="score">
          <option value="" selected disable>Select</option>
          <option value="excellent">Excellent Health  [110-120]</option>
          <option value="good">Good Health  [80-110]</option>
          <option value="fair">Fair Health  [50-80]</option>
          <option value="improve">Need Improvement  [20-50]</option>
          <option value="poor">Poor Health  [Below 20]</option>        
        </select>
      </div>
        <div class="col-md-5 pt-4 ms-5">
          <button type="submit" class="btn btn-success btn-lg" style="border-radius:200px;color:aliceblue;width:350px">Book Counsellor</button>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
