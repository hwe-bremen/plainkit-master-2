<body>

            <?php snippet('menu') ?>
            <?php snippet('header_unterseiten') ?>


<section id="basic-page-main" class="grid-blog-main">

        <h2 class="basic-page-main_head"><?= $page->headline()->html() ?></h2>
        <h3><?= $page->introtext()->html() ?></h3>

</section> 

<section id="card_liste">
<?php foreach (page('referenzen')->children()->listed() as $referenzen): ?> 

<article>
<?php if ($cover = $referenzen->cover()): ?><?= $cover->resize(400) ?>
  <?php endif ?>

  <p><?= $referenzen->introtext()->html()->excerpt(250) ?></p>
  <button class="button_standard"> <a class="button_standard--link" href="<?= $referenzen->url() ?>"> mehr </a> </button>
    


  </article> 


 
               <?php endforeach ?>  




</section>


</main>

<footer class="footer"> Hier steht noch nichts</footer>


</body>
</html>