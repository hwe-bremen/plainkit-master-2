<body>

            <?php snippet('menu') ?>
            <?php snippet('header_unterseiten') ?>


<!-- Bereich BLOG -->  
<p class="datum"><?= $page->published()->toDate('d.m.Y') ?></p>   
<?php foreach ($page->layout()->toLayouts() as $layout): ?>
<section class="grid_blogbeitrag" id="<?= $layout->id() ?>">
  <?php foreach ($layout->columns() as $column): ?>
  <div class="column column_spalte" style="--span:<?= $column->span() ?>">
    <div class="blocks">
      <?= $column->blocks() ?>
    </div>

  </div>
  <?php endforeach ?>
  <a href="<?= url('blogs') ?>">Back…</a>
</section>
<?php endforeach ?>
             




















</main>

<footer class="footer"> Hier steht noch nichts</footer>


</body>
</html>