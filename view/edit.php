<div class="form">
    <form method="post">
        Article Title:<br>
        <input type="text" name="title" value="<?=coverField($fields['title'])?>"><br><br>
        Article Content:<br>
        <input type="text" name="content" value="<?=coverField($fields['content'])?>"><br><br>
        <button>Send</button>
    </form>
</div>
<br>
<hr>
<a href="index.php">Move to main page</a>