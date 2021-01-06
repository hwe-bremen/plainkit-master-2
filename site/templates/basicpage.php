<body>

            <?php snippet('menu') ?>
            <?php snippet('header_unterseiten') ?>

         
        <!-- INTRO HEAD -->

<section id="basic-page">

<article class="grid-blog">
  <p class="datum"><?= $page->published()->toDate('d.m.Y') ?></p>
  <div class="grid-inhalt">
                <span class="zierbalken-gruen"></span>
                        <h2 class="hero_head"><?= $page->headline()->html() ?></h2>
                <span class="zierbalken-gruen"></span>
  </div>

        <!-- BODYTEXT -->


        <?= $page->image()->crop(800, 600) ?>
          <h3><?= $page->introtext()->html() ?> </h3>   
            <p><?= $page->haupttext()->kirbytext() ?></p>
         
       <!-- SLIDER "siema" ONE -->

  <div class="siema">
            <?php foreach ($files = $page->gallery()->toFiles() as $file): ?> 
        <div>
            <img class="gallery" src="<?= $file->url() ?>" alt=""> 
           
        </div>  
            <?php endforeach ?>  
  
      </div>
  <span class="button">
      <button class="prev button_slider">zurück</button>
      <button class="next button_slider">weiter</button>
  </span>

  <span class="abschluss"><?= $page->abschluss()->kirbytext() ?></span>

        <!-- GALLERY ZWEI -->

  <div class="gallery-zwei-nobox">
            <?php foreach ($files = $page->gallery_zwei()->toFiles() as $file): ?> 
      <div class="gallery_zwei">
            <img class="gallery" src="<?= $file->url() ?>" alt=""> 
      </div>  
            <?php endforeach ?>  
  
  </div>

 </article> 

</section> 



</main>

<footer class="footer"> Hier steht noch nichts</footer>

<!-- ADD BUTTON Slider "siema" -->


<!-- ADD Slider "siema" -->

<?= js('assets/js/siema.min.js') ?>


<<<<<<< HEAD
=======



>>>>>>> 26e53b74dc3b510400168ff01eddb846fa040714
<script>
const mySiema = new Siema({
      selector: '.siema',
	  
  duration: 200,
  easing: 'ease-out',
  perPage: {
	  250: 1,
<<<<<<< HEAD
	  600: 2,
=======
	  750: 2,
>>>>>>> 26e53b74dc3b510400168ff01eddb846fa040714
  },
  startIndex: 0,
  draggable: true,
  multipleDrag: true,
  threshold: 20,
  loop: false,
  rtl: false,
  onInit: () => {},
  onChange: () => {},
});


// Add a function that generates pagination to prototype
Siema.prototype.addPagination = function() {
  for (let i = 0; i < this.innerElements.length; i++) {
    const btn = document.createElement('button');
    btn.textContent = i;
    btn.addEventListener('click', () => this.goTo(i));
    this.selector.appendChild(btn);
  }
}

// Trigger pagination creator
mySiema.addPagination();


// nex prev button
document.querySelector('.prev').addEventListener('click', () => mySiema.prev());
document.querySelector('.next').addEventListener('click', () => mySiema.next());

</script>





				

</body>
</html>