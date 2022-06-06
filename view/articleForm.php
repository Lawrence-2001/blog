<? foreach($errors as $error): ?>
    <div class="error">
        <p><? if($error!==true) echo $error ?></p>
    </div>
<? endforeach; ?>

<div class="form">
    <form method="post">
        Article Title:<br>
        <input type="text" name="title" value="<?= escapingFields($fields['title']) ?>"><br><br>
        Article Content:<br>
        <input type="text" name="content" value="<?= escapingFields($fields['content']) ?>"><br><br>
        Category:<br>
        <select name="category_id">
            <? foreach ($categories as $category): ?>
                <option
                        value="<?= $category['category_id'] ?>"
                    <? echo(selectOption($category['category_id'], $category_id)); ?>
                >
                    <?= $category['name'] ?>
                </option>
            <? endforeach; ?>
        </select>
        <button>Send</button>
    </form>
</div>
<br>
<hr>
<a href="index.php">Move to main page</a>