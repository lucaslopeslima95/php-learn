<?php
include('connect.php');
if(isset($_POST['salvar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "insert into pessoa(nome,email) values ('$nome','$email')";
    $result = mysqli_query($con,$sql);
    if($result){
      header('location:display.php');
    }else{
      die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Create</title>
</head>

<body>
  <form action="" method="post">
    <div class="container mt-5">
      <div class="card">
        <div class="card-header">
          <h3>Cadastro</h3>
        </div>
        <div class="card-body">
          <div class="mb-3 form-group">
            <label for="InputNome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" id="InputNome" >
          </div>
          <div class="mb-3 form-group">
            <label for="InputEmail" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="InputEmail" >
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" name="salvar" class="btn btn-primary">Salvar</button>
          </div>
  </form>
  </div>
  </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>