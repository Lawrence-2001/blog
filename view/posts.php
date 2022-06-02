<? foreach($articles as $id => $article): ?>
    <article class="entry">

    <header class="entry__header">

        <h2 class="entry__title h1">
            <a href="article.php?id=<?=$article['post_id']?>" title=""><?=$article['title']?></a>
        </h2>

        <div class="entry__meta">
            <ul>
                <li>July 12, 2019</li>
                <li><a href="#" title="" rel="category tag">Ghost</a></li>
                <li><!--Author name--></li>
            </ul>
        </div>

    </header>

    <div class="entry__content">
        <p>
            <?=$article['content']?>
        </p>
    </div>

</article> <!-- end entry -->
<? endforeach; ?>


<a href="add.php">Add article</a>
<hr>
<div class="articles">
	<? foreach($articles as $id => $article): ?>
		<div class="article">
			<h2><?=$article['title']?></h2>
			<a href="article.php?id=<?=$article['post_id']?>">Read more</a>
		</div>

	<? endforeach; ?>


</div>