<div class="content">

        <div class="article">
            <h1><?=coverField($post['title'])?></h1>
            <div><?=coverField($post['content'])?></div>
            <hr>
            <a href="delete.php?id=<?=$post['post_id']?>">Remove</a>
            <br><br>
            <a href="edit.php?id=<?=$post['post_id']?>">Edit</a>
        </div>
</div>
<hr>
<a href="index.php">Move to main page</a>