<?php if ($page->hasPrevListed()): ?>
<a class="pagination" href="<?= $page->prevListed()->url() ?>">vorherige Seite</a>
<?php endif ?>

<?php if ($page->hasNextListed()): ?>
<a class="pagination" href="<?= $page->nextListed()->url() ?>">nächste Seite</a>
<?php endif ?>