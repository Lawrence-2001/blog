<div class="content">

        <div class="article">
            <h1><?=escapingFields($post['title'])?></h1>
            <div><?=escapingFields($post['content'])?></div>
            <br>
            <div>Category: <?=escapingFields($post['name'])?></div>
            <hr>
            <a href="<?=BASE_URL?>delete/<?=$post['post_id']?>">Remove</a>
            <br><br>
            <a href="<?=BASE_URL?>edit/<?=$post['post_id']?>">Edit</a>
        </div>
</div>
<hr>
<a href="<?=BASE_URL?>">Move to main page</a>