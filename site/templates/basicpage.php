<body>

            <?php snippet('menu') ?>
            <?php snippet('header_unterseiten') ?>


<section id="basic-page">

  <article class="grid-blog">
  <p class="datum"><?= $page->published()->toDate('d.m.Y') ?></p>
  <div class="grid-inhalt">
                <span class="zierbalken-gruen"></span>
                        <h2 class="hero_head"><?= $page->headline()->html() ?></h2>
                <span class="zierbalken-gruen"></span>
        </div>
        <?= $page->image()->crop(800, 600) ?>
        <h3><?= $page->introtext()->html() ?> </h3>
     
       <p><?= $page->haupttext()->kirbytext() ?></p>
     
       <ul>
       <?php foreach ($page->images() as $file): ?> 
        <li>
        <img class="gallery" src="<?= $file->url()?>" alt=""> 
       </li>  
       <?php endforeach ?>  
       </ul>
       <p><?= $page->abschluss()->kirbytext() ?></p>

    </article> 
</section> 


</main>

<footer class="footer"> Hier steht noch nichts</footer>


</body>
</html>