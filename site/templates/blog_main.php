<body>

                <?php snippet('menu') ?>
                <?php snippet('header_unterseiten') ?>
                <?php

                $filterBy = get('filter');
                $unfiltered = $page->children()->listed();
                $blog = $unfiltered
                        ->when($filterBy, function($filterBy) {
                          return $this->filterBy('tags', $filterBy);
                        }); 
                  
                        $filters = $unfiltered->pluck('tags', null, true);                        
                       
                ?> 


<section id="basic-page-main" class="grid-0">

        <div class="grid-inhalt">
                <span class="zierbalken-gruen"></span>
                        <h2 class="hero_head"><?= $page->headline()->html() ?></h2>
                <span class="zierbalken-gruen"></span>
        </div>
       

       
</section> 

<!-- Blog-Schlagwörter-->

<nav class="nav_filter">
        <a href="<?= $page->url() ?>">All</a>
        <?php foreach ($filters as $filter): ?>
        <a href="<?= $page->url() ?>?filter=<?= $filter ?>"><?= $filter ?></a>
        <?php endforeach ?>
</nav>

<!-- Blog-Cards-->
<section id="card_liste">
         <?php foreach ($blog as $blog): ?>
                <a href="<?= $blog->url() ?>">
        <article class="blog_liste--style">
                <?= $blog->blocks()->toBlocks() ?>
                        <small><?= $blog->tags()->html() ?></small>         
                        
                               
                        
        </article> 
        </a> 
        <?php endforeach ?>
</section>


</main>

<footer class="footer"> Hier steht noch nichts</footer>


</body>
</html>