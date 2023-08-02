<?php
include('connect.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Crud</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="create.php" class="text-light">Adicionar Pessoa</a>
        </button>
        <table class="table">
            <thead>
                
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $sql="select * from pessoa";
                $result = mysqli_query($con,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                    $id =  $row['id_pessoa'];
                    $nome = $row['nome'];
                    $email = $row['email'];
                    echo '<tr>
                    <th scope="col">#</th>
                    <th scope="col">'.$nome.'</th>
                    <th scope="col">'.$email.'</th>
                    <td>
                    <button class="btn btn-primary"><a class="text-light" href="update.php?update_id='.$id.'">Update</a></button>
                    <button class="btn btn-danger " ><a class="text-light" href="delete.php?delete_id='.$id.'">Delete</a></button>
                    </td>
                    </tr>';
                    }
                }
            ?>
           
    </tr>
</tbody>
</table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>