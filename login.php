<?php

include './includes/header.php';
$cnx = new mysqli("localhost","admin","admin","ipda");




   if(isset($_POST['submit'])){ //Validation du formulaire
  $email=$_POST['email'];
  $password=$_POST['password'];
  //var_dump($_POST);

  $q="SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($cnx, $q);

  while ($row = $result->fetch_assoc()) {
    //printf("%s (%s)\n", $row["email"],$row["password"]);
    if ($row["email"] == $email and $row["password"]==md5($password)){
      //echo("Vous etes connecté");
      header('location:index.php');
    }else{
      echo ("sorry baby");
    }
}
  //var_dump($result);

   }
?>

<div class="container-fluid col-4 mt-5">
<form method="POST" action="login.php">
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Se connecter </button>
</form>

</div>

<?php

include './includes/footer.php';
?>