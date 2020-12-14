<main class="main">
    <header id="header_bereich_portfolio"> 

<div id="divbild_portfolio">

<?php if($image = $page->image()): ?>
<image class="headerbild_portfolio" src= "<?= $image->url() ?>"  alt="">
<?php endif ?>

</div>

<div id="head_line_portfolio"><h1 id= "head_header_portfolio"><?= $page->headline() ?></h1></div>

</header>