<?php 
if (isset($_POST["envoyer"])) {
    extract($_POST);
    $id = mysqli_connect();
    $req="select * from";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <h1> premier pas avec Github! </h1>
    <form action="" method="post">
        <input type="text" name="nom" placeholder="nom">
        <input type="text" name="prenom" placeholder="prenom">
        <input type="text" name="email" placeholder="email">
        <input type="password" name="mdp" placeholder="mot de passe">
        <input type="submit" name="envoyer">

    </form>
</body>
</html>