<section id="inhalt">
    <div class="grid-0">

        <div class="grid-inhalt">
                <span class="zierbalken-gruen"></span>
                        <h2 class="hero_head"><?= $page->headline()->html() ?></h2>
                <span class="zierbalken-gruen"></span>
        </div>


          <h3 class="grid-inhalt"><?= $page->introtext()->html() ?> </h3>      
    </div>  

    <!-- LEISTUNGEN: CARDS -->

    <div class="cards" id="grid1">
                <?php foreach (page('portfolio')->children()->listed() as $portfolio): ?> 
         <article class="card"> 
            <figure class="cards_inhalt"> 
                <?php if ($cover = $portfolio->cover()): ?><?= $cover->resize(550, 700) ?>
            </figure> 
                 <?php endif ?>

            <div class="card_text cards_inhalt">
                <h2 class="card_text--groesse"><?= $portfolio->headline() ?></h2>
                    <div class="button-standard--abstand"><p class="card_text--groesse"><?= $portfolio->introtext()->html()->excerpt(180) ?><p>
                    </div>
              <button class="button_standard"> <a class="button_standard--link" href="<?= $portfolio->url() ?>"> mehr </a> </button>
            </div> 
        </article> 
                <?php endforeach ?>
    </div>
</section>
