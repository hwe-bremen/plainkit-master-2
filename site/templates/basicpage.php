<body>

            <?php snippet('menu') ?>
            <?php snippet('header_unterseiten') ?>


<section id="basic-page">

  <article class="grid-blog">
  <p class="datum"><?= $page->published()->toDate('d.m.Y') ?></p>
      <h2 class="basic-page_head"><?= $page->headline()->html() ?></h2>
        <?= $page->image() ?>
        <h3><?= $page->introtext()->html() ?> </h3>
     
       <?= $page->textarea()->kirbytext() ?>
      <a href="<?= url('blog') ?>">Back…</a>
    </article> 
</section> 


</main>

<footer class="footer"> Hier steht noch nichts</footer>


</body>
</html>