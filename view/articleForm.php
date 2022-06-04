<? foreach($errors as $error): ?>
    <div class="error">
        <p><? if($error!==true) echo $error ?></p>
    </div>
<? endforeach; ?>

<div class="form">
    <form method="post">
        Article Title:<br>
        <input type="text" name="title" value="<?=escapingFields($fields['title'])?>"><br><br>
        Article Content:<br>
        <input type="text" name="content" value="<?=escapingFields($fields['content'])?>"><br><br>
        <button>Send</button>
    </form>
</div>
<br>
<hr>
<a href="index.php">Move to main page</a>