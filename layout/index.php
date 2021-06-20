<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistem Musik Sederhana JOOS RD">
    <meta name="author" content="RaniDipaAnggini">
    <meta name="keyword" content="sistem, musik, lagu, sederhana, track, html, html5">
    <title>Sistem Musik Sederhana</title>
    <link rel="stylesheet" href="<?php echo ASSET; ?>css/style.css">
</head>
<body>
    <main>
        <header>
            <img src="<?php echo ASSET; ?>images/header2.jpg" alt="[IMG]">
        </header>
        <nav>
            <ul>
               <li>
                   <a href="index.php">Home</a>
               </li>
               <li>
                   <a href="index.php?page=login_form" >Login</a>
               </li>
           </ul>
        </nav>
        <section class="content">
        <?php
                if (isset($_GET['page'])) {
                    include $_GET['page'] . ".php";
                } else {
                    include "main_index.php";
                }

            ?>
        </section>
        <footer>
            Copyright &copy; Rani Dipa Anggini 2021
        </footer>
    </main>
</body>
</html>