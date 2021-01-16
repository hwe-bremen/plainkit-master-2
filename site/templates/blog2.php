<body>

            <?php snippet('menu') ?>
            <?php snippet('header_unterseiten') ?>


<section id="blog" >


<!-- Bereich BLOG -->  
  <article class="grid-blog">
  <p class="datum"><?= $page->published()->toDate('d.m.Y') ?></p>
  
        <?= $page->image() ?>


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