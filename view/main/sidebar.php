<div id="sidebar" class="s-content__sidebar large-4 column">

    <div class="widget widget--search">
        <h3 class="h6">Search</h3>
        <form action="#">
            <input type="text" value="Search here..." onblur="if(this.value == '') { this.value = 'Search here...'; }" onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search">
            <input type="submit" value="" class="submit-search">
        </form>
    </div>

    <div class="widget widget--categories">
        <h3 class="h6">Categories.</h3>
        <ul>
            <?
            /**
             * @var array $categories */
            foreach ($categories as $category):?>
            <li><a href="posts.php?category_id=<?=$category['category_id']?>" title=""><?=$category['name']?></a></li>
            <?endforeach;?>
        </ul>
    </div>
</div> <!-- end sidebar -->

