<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<form action="./formsubmit.php" method="POST" class="col-4 mx-auto mt-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Number</label>
    <input name="number" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<form action="./timestable.php" method="POST" class="col-4 mx-auto mt-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Times table</label>
    <input name="timestable" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<form action="./factorial.php" method="POST" class="col-4 mx-auto mt-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Factorial</label>
    <input name="factorial" type="factorial" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<form action="./traingle.php" method="POST" class="col-4 mx-auto mt-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Traingle</label>
    <input name="traingle" type="traingle" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<form action="./validmail.php" method="POST" class="col-4 mx-auto mt-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<form action="./charlen.php" method="POST" class="col-4 mx-auto mt-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Massege</label>
    <input name="massege" type="massege" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<form action="./balance.php" method="POST" class="col-4 mx-auto mt-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Balance</label>
    <input name="balance" type="balance" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<form action="./greaternum.php" method="POST" class="col-4 mx-auto mt-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Number1</label>
    <input name="Num1" type="num1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
 
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Number2</label>
    <input name="Num2" type="num2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Number3</label>
    <input name="Num3" type="num3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</body>
</html>