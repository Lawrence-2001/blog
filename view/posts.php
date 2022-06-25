<? foreach($articles as $id => $article): ?>
    <article class="entry">

    <header class="entry__header">

        <h2 class="entry__title h1">
            <a href="index.php?c=post&id=<?=$article['post_id']?>" title=""><?=escapingFields($article['title'])?></a>
        </h2>

        <div class="entry__meta">
            <ul>
                <li><!--date--></li>
                <li><a href="#" title="" rel="category tag"><!--Category name--></a></li>
                <li><!--Author name--></li>
            </ul>
        </div>

    </header>

    <div class="entry__content">
        <p>
            <?=escapingFields($article['content'])?>
        </p>
    </div>

</article> <!-- end entry -->
<? endforeach; ?>

