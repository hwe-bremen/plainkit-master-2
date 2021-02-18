

            <?php snippet('menu') ?>
            <?php snippet('header') ?>



<!-- Bereich INTRO / LEISTUNGEN -->


<?php snippet('leistungen') ?>


<!-- Bereich SELBSTDARSTELLUNG -->

<section id="section_home_selbstdarstellung" class="grid-0">
    <div class="section_container--home">
        <p><?= $page->selbstdarstellung()->kirbytext() ?><p>
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

<!-- Bereich BLOG -->

<section id="section_blog">
<div class="cards" id="grid1b">
        <?php foreach (page('blogs')->children()->listed() as $blog): ?>     
                <a href="<?= $blog->url() ?>">
        <article class="blog_liste--style">
                <?= $blog->blocks()->toBlocks() ?>                      
        </article> 
        </a> 
        <?php endforeach ?>
    </div>
</section>

</main>

<footer class="footer"> Hier steht noch nichts</footer>
  
</body>
</html>
