<p>Inloggad som<strong> 
    <?php 
    session_start();
    if(isset($_SESSION['username'])){
        $user=$_SESSION['username'];
    echo "$user";
    }
    ?>
    </strong>
</p>
<form action="logout.php" method="post">
    <input type="submit" value="Logga ut"/>
</form>
