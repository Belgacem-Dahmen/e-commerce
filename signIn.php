<?php
include './includes/functions.php';
include './includes/header.php';
//connexon BDD
//connectDb($servername,$username,$password,$dbName);
//$cnx=connectDb("localhost","admin","admin","ipda");
$cnx = new mysqli("localhost","admin","admin","ipda");




   if(isset($_POST['submit'])){ //Validation du formulaire
  $name=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $adresse=$_POST['adresse'];
  $telephone=$_POST['telephone'];
  $service=strtoupper($_POST['service']);
  $email=$_POST['email'];
  $password=md5($_POST['password']);
  
  $q="INSERT INTO users (nom,prenom,adresse,telephone,service,email,password) Values ('$name','$prenom','$adresse','$telephone','$service','$email','$password')";
  if ($cnx->query($q) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $q . "<br>" . $cnx->error;
}

$cnx->close();
  //var_dump($_POST);
  //addUser($name,$prenom,$adresse,$telephone,$service,$email,$password);
};




?>




<div class="container-fluid col-4 mt-3">
<form method="POST" action="signIn.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Nom</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nom">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="prenom">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Adresse</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="adresse">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Teléphone</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="telephone">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Service</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="service">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="confirmPassword" id="exampleInputPassword1">
  </div>

 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

</div>


<?php

include './includes/footer.php';
?>
