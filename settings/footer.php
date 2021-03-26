 <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Hakkımızda</h6>
            <p class="text-justify"> <?php echo $hakkimizda; ?></p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Kategoriler</h6>
            <ul class="footer-links">
              <?php echo $kategoriler;?>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Hızlı Linkler</h6>
            <ul class="footer-links">
              <li><a href="<?php echo $link1;?>"><?php echo $link1i;?></a></li>
              <li><a href="<?php echo $link2;?>"><?php echo $link2i;?></a></li>
              <li><a href="<?php echo $link3;?>"><?php echo $link3i;?></a></li>
              <li><a href="<?php echo $link4;?>"><?php echo $link4i;?></a></li>
              <li><a href="<?php echo $link5;?>"><?php echo $link5i;?></a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
         <a href="<?php echo $sitelink; ?>"><?php echo $siteismi; ?></a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="<?php echo $facebook; ?>"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="<?php echo $twitter; ?>"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="<?php echo $dribbble; ?>"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="<?php echo $linkedin; ?>"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>