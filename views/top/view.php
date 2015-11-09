<?php include_once ROOT.'/views/header.php'; ?>
<script type="text/javascript">
    window.onload = function()
    {
        window.scrollTo( 0, 550 );
    }
</script>
<div>

    <h1><?php echo $topItem['title']; ?></h1>
    <p><?php echo $topItem['short_content'];?></p>
    <p><?php echo $topItem['date'];?></p><p><?php echo $topItem['author_name'];?></p>
    <p><?php echo $topItem['content'];?></p>
    <p><?php echo $topItem['like']; ?></p>
    <a href="/top/">Back to Blog</a>



</div>



<?php include_once ROOT.'/views/footer.php'; ?>
