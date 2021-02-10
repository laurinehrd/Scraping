<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/png" href="assets/images/logoScrap.png"/>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Scrap</title>

</head>

<body>

<?php 
if(!empty($_SESSION['user']))
{
?>

<!-- header -->
<div class="navbar">
    <div class="icon-home">
        <a href="?action=dashboard">
            <img src="assets/images/home.png" alt="icon home">
        </a>
    </div>
    <div class="logo">
        <a href="">
            <img src="assets/images/logoScrap.png" alt="logo Scrap">
            <h1>Scrap</h1>
        </a>
    </div>
    <div class="account">
        <div class="text">
            <a href="?action=account">Mon compte</a>
            <a href="?action=disconnect">Se déconnecter</a>
        </div>
        <div class="icon">
            <a href="?action=account">
                <img src="assets/images/user.png" alt="icon user">
                <p class="text-center">
                    <?php echo $_SESSION['user']['firstname']; ?>
                </p>
            </a>
        </div>
    </div>
</div>
<!-- fin header -->

<?php 
} 
?>


<?= $content ?>

    





  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>
</html>