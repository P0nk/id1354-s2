<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'fragments/head.php'; ?>
    </head>
    <body>
        <div class="document">
            <div class="banner">
                <?php include 'fragments/banner.php' ?>
            </div>
            <nav>
                <?php include 'fragments/nav.php'; ?>
            </nav>
            <div class="main">
                <?php
                $page = "Köttbullar";
                include 'recipe.php';
                ?>
            </div>
        </div>
    </body>
</html>