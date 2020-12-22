<body>

            <?php snippet('menu') ?>
            <?php snippet('header_unterseiten') ?>

            <?php 
                $referenzen = $page
                        ->children()
                        ->listed()
     
          ?> 


<section id="basic-page-main" class="grid-0">

        <div class="grid-inhalt">
                <span class="zierbalken-gruen"></span>
                        <h2 class="hero_head"><?= $page->headline()->html() ?></h2>
                <span class="zierbalken-gruen"></span>
        </div>
        <h3 class="grid-inhalt"><?= $page->introtext()->html() ?></h3>


       
        
</section> 

<section id="card_liste">
      


                        <?php foreach ($referenzen as $referenzen): ?>
<article>

         <?php if ($cover = $referenzen->cover()): ?><?= $cover->resize(800, 500) ?>
         <?php endif ?>
            <p><?= $referenzen->headline()->html() ?></p>
               <p class="card_text--groesse"><?= $referenzen->introtext()->html()->excerpt(250) ?></p>
                
  <button class="button_standard"> <a class="button_standard--link" href="<?= $referenzen->url() ?>"> mehr </a> </button>
    
</article> 


        <?php endforeach ?>

</section>


</main>

<footer class="footer"> Hier steht noch nichts</footer>


</body>
</html>