<?php include_once (ROOT.'/views/header.php'); ?>

<div>
    <form method="post" action="#">
    <fieldset>
        <label for="title">Title:</label>
        <textarea name="title" cols="40" rows="10"></textarea>
        <label for="content">content:</label>
        <textarea name="content" cols="40" rows="10"></textarea>

    </fieldset>
    <input type="submit" name="submit" value="send">


</form>
</div>

<?php include_once (ROOT.'/views/footer.php'); ?>
