<body>

            <?php snippet('menu') ?>
            <?php snippet('header_portfolio') ?>


<section id="inhalt_portfolio">
    <div id="intro_portfolio" class="portfolio_grid-0">
      <h2 class="portfolio_head"><?= $page->text()->html() ?></h2>
       <div id="portfolio_bild"><?= $page->image()->crop(600) ?></div>
       <div id="portfolio_textarea">  <p><?= $page->textarea()->html() ?> </p> </div>
      
    </div> 
</section> 

</main>

<footer class="footer"> Hier steht noch nichts</footer>


</body>
</html>