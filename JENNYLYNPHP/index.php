<?php require_once 'includes/header.php'
?>

<h1 class="text-center">Registration for IT Conference</h1>
<form>
<div class="form-group">
    <label for="exampleInputfirstname">FIRST NAME</label>
    <input type="firstname" class="form-control" id="exampleInputfirstname" aria-describedby="firstnameHelp">
  </div>

  <div class="form-group">
    <label for="exampleInputlastname">LAST NAME</label>
    <input type="lastname" class="form-control" id="exampleInputlastname" aria-describedby="lastnameHelp">
 </div>

 <div class="form-group">
    <label for="exampleInputspecialty">SPECIALTY</label>
 <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <small class="form-check-label" for="defaultCheck1">
    DATABASE ADMIN
</small>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
  <small class="form-check-label" for="defaultCheck2">
   SOFTWARE DEVELOPER
</small>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
  <small class="form-check-label" for="defaultCheck2">
   WEB ADMINISTRATOR
</small>
</div>
<div class="form-group">
<label for="date of birth">Date of birth</label>
<input type="date" id="birthday" name="birthday"><br><br>

<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <meduim id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</meduim>
  </div>

<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>



  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php require_once 'includes/footer.php'?>

  </head>
  <body>
     



