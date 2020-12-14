
<header id="header_bereich"> 


<?= $images = page('home/headerbilder')->images()->shuffle()->first(); ?>


    <div id="head_line">
        <h1 id= "head_header"><?= $page->header_headline() ?></h1>
        <h3 id= "head_text"><?= $page->headertext() ?></h3>
    </div>
</header>



