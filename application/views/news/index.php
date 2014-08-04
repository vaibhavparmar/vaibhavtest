
<a href=<?php echo site_url('news/create'); ?>><h3>add news</h3></a>
<h2 style="text-align: center;">All News List</h2>
<?php foreach ($news as $news_item): ?>
<div class="main" >
    <h2><?php echo $news_item['title'] ?></h2>
    <div class="mainbody">
        <?php echo $news_item['text'] ?>
    </div>
    
</div>
<?php endforeach ?>
 </br>
