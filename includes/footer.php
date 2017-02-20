<footer class="black">
  <div class="container">
    <nav class="l-navlinks flex just-between flex-center flex-wrap">
      <div class="col-md-6">
        <a href="/"><h1 class="brand-light opacity-hover-opaque"><?php echo $coname;?></h1></a>
        <ul class="social">
          <li><a href="#"><i class="fa fa-2x fa-facebook"></i></a></li>
          <li><span class="text-accent">|</span></li>
          <li><a href="#"><i class="fa fa-2x fa-twitter"></i></a></li>
          <li><span class="text-accent">|</span></li>
          <li><a href="#"><i class="fa fa-2x fa-linkedin"></i></a></li>
        </ul>
      </div>
      <div class="col-md-6">
        <ul class="text-left">
          <?php include(includes.'main-nav.html'); ?>
        </ul>
      </div>
    </nav>
  </div>
  <div class="copyright">
    <p class="font-12">&copy;<script type="text/javascript">document.write(new Date().getFullYear());</script> <?php echo $conamellc;?> <span class="text-accent">|</span> <?php echo $contactphone;?> <span class="smart-break"><span class="text-accent">|</span> <?php echo $addressStreet;?> <span class="text-accent">|</span> <?php echo $addressCityState;?> </span> <span class="smart-break"><span class="text-accent">|</span> <a href="#">Privacy Policy</a> <span class="text-accent">|</span> <a href="#">Terms of Use</a></span></p>
  </div>
</footer>
</body>
</html>
