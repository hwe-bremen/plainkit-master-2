<body>

            <?php snippet('menu') ?>
            <?php snippet('header_unterseiten') ?>


<section id="blog" >

  <article class="grid-blog">
  <p class="datum"><?= $page->published()->toDate('d.m.Y') ?></p>
      <h2 class="blog_head"><?= $page->headline()->html() ?></h2>
        <?= $page->image() ?>
        <h3><?= $page->introtext()->html() ?> </h3>
  
       <span class="grid_blog--bodytext">
       <?= $page->blocks()->toBlocks() ?>
              <a href="<?= url('blog') ?>">Back…</a>
        </span>
    </article> 
</section> 


</main>

<footer class="footer"> Hier steht noch nichts</footer>


</body>
</html>