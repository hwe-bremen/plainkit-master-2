<body>

                <?php snippet('menu') ?>
                <?php snippet('header_unterseiten') ?>
                <?php

                $filterBy = get('filter');
                $unfiltered = $page->children()->listed();
                $referenzen = $unfiltered
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
        <h3 class="grid-inhalt"><?= $page->introtext()->html() ?></h3>
        <span class="grid-body"><?= $page->bodytext()->kirbytext() ?></span>
       
</section> 


<nav class="nav_filter">
        <a href="<?= $page->url() ?>">All</a>
        <?php foreach ($filters as $filter): ?>
        <a href="<?= $page->url() ?>?filter=<?= $filter ?>"><?= $filter ?></a>
        <?php endforeach ?>
</nav>


<section id="card_liste">
                        <?php foreach ($referenzen as $referenzen): ?>
<article>

         <?php if ($cover = $referenzen->cover()): ?><?= $cover->resize(800, 500) ?>
         <?php endif ?>
            <p><?= $referenzen->headline()->html() ?></p>
               <p class="card_text--groesse"><?= $referenzen->introtext()->html()->excerpt(250) ?></p>
               <small><?= $referenzen->tags()->html() ?></small>
                
  <button class="button_standard"> <a class="button_standard--link" href="<?= $referenzen->url() ?>"> mehr </a> </button>
    
</article> 


        <?php endforeach ?>

</section>


</main>

<footer class="footer"> Hier steht noch nichts</footer>


</body>
</html>