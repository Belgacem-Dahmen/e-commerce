<?php
include './includes/functions.php';
include './includes/header.php';
//connexon BDD
connectDb($servername,$username,$password,$dbName);

if(isset($_POST['submit'])){ //Validation du formulaire
  $name=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $adresse=$_POST['adresse'];
  $telephone=$_POST['telephone'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $confirmPassword=$_POST['confirmPassword'];
  
};


//preparer la requete
//$requete='INSERT INTO `users` (`nom`, `prenom`, `email`, `password`, `service`) VALUES ( 'test', 'test', 'test@test.test', '123456789', 'MMP');;'
//exectuter ma requete 


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
