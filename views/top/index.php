<?php include_once ROOT.'/views/header.php'; ?>

<?php  foreach($topList as $topItem): ?>
    <div>

        <h1><?php echo $topItem['title']; ?></h1>
        <p><?php echo $topItem['short_content'];?></p>
        <p><?php echo $topItem['data'];?></p><p><?php echo $topItem['author_name'];?></p>
        <a href="/news/<?php echo $topItem['id'];?>">Read More</a>



    </div>
<?php endforeach ?>



<?php include_once ROOT.'/views/footer.php'; ?>
