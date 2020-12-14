

            <?php snippet('menu') ?>
            <?php snippet('header') ?>

<main class="main">

<!-- Bereich INTRO / LEISTUNGEN -->

<section id="inhalt">
    <div class="grid-0">
          <h2 class="grid-inhalt"><?= $page->headline()->html() ?></h2>
          <h3 class="grid-inhalt"><?= $page->introtext()->html() ?> </h3>      
    </div>  

    <div class="cards" id="grid1">
                <?php foreach (page('portfolio')->children()->listed() as $portfolio): ?> 
         <article class="card"> 
            <figure> 
                <?php if ($cover = $portfolio->cover()): ?><?= $cover->resize(550, 700) ?>
            </figure> 
                 <?php endif ?>

            <div class="card_text">
                <p class="p_fett card_text--groesse"><?= $portfolio->headline() ?></p>
                    <div class="button-standard--abstand"><p class="card_text--groesse"><?= $portfolio->text()->html() ?><p>
                    </div>
              <button class="button_standard"> <a class="button_standard--link" href="<?= $portfolio->url() ?>"> mehr </a> </button>
            </div> 
        </article> 
                <?php endforeach ?>
    </div>
</section>

<!-- Bereich SELBSTDARSTELLUNG -->

<section id="section_home_selbstdarstellung" class="grid-0">
    <div class="section_container--home">
        <p><?= $page->selbstdarstellung() ?><p>
            <img class="selbstdarstellung_bild" src="<?= $page->selbstdarstellung_bild()->url() ?>" alt=""> 
    </div>
</section>

<!-- Bereich Team -->

<section id="section_team">
    <div class="grid-2">
        <img class="team_bild" src="<?= $page->team_bild()->url() ?>" alt=""> 
            <h3 class="team_headline"><?= $page->team_headline() ?></h3>
            <p class="spalte"><?= $page->team_bodytext() ?><p>        
    </div>
</section>

<!-- Bereich REFERENZEN -->

<section id="section_referenzen">
    <article class="grid-3">
                <?php foreach (page('referenzen')->children()->listed() as $referenzen): ?> 
        <figure class="referenzen-card--figure">
                <?php if ($cover = $referenzen->cover()): ?><?= $cover->resize(500, 500) ?>
            <figcaption class="referenzen_titel"><a id="referenzen_card--link" style="text-decoration: none; color: white"  href="<?= $referenzen->url() ?>"><h3><?= $referenzen->headline() ?></h3></a>
            </figcaption>
        </figure>
                 <?php endif ?>
                 <?php endforeach ?>     
     </article>
</section>

</main>

<footer class="footer"> Hier steht noch nichts</footer>
  
</body>
</html>
