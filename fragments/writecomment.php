<form action="addcomment.php" class="writecomment" method="post">
    <p><textarea name="comment" rows="4" cols="30" 
                 placeholder="Skriv kommentar..." maxlength="400"></textarea></p>
    <p><input type="submit" name="sendcomment" value="Skicka"/></p>
    <input type="hidden" name="page" value=<?php echo "\"$page\""; ?>/>

</form>

