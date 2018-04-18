    <footer>
      <div class="container">
        <div class="row footer-widgets">

          <!-- Start Subscribe & Social Links Widget -->
         
          <!-- .col-md-3 -->
          <!-- End Subscribe & Social Links Widget -->


          <!-- Start Twitter Widget -->
          
          <!-- .col-md-3 -->
          <!-- End Twitter Widget -->


          <!-- Start Flickr Widget -->
         
          <!-- .col-md-3 -->
          <!-- End Flickr Widget -->


          <!-- Start Contact Widget -->
          <div class="col-md-12">
<!--
            <div class="footer-widget contact-widget">
              <h4><img src="images/footer-margo.png" class="img-responsive" alt="Footer Logo" /></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              <ul>
                <li><span>Phone Number:</span> +01 234 567 890</li>
                <li><span>Email:</span> company@company.com</li>
                <li><span>Website:</span> www.yourdomain.com</li>
              </ul>
            </div>
-->
          </div>
          <!-- .col-md-3 -->
          <!-- End Contact Widget -->


        </div>
        <!-- .row -->

        <!-- Start Copyright -->
        <div class="copyright-section">
          <div class="row">
            <div class="col-md-12">
							<?php
                            require 'connect.php';
							$query = mysqli_query($link,"SELECT * FROM `creativecommons` where cc_open = '1'");
							while($row = mysqli_fetch_array($query)) { ?>
								<div class="radio">
										<label>


							<img src="../../pic/cc/<?php echo $row['cc_pic_id']; ?>">&nbsp;&nbsp;&nbsp;<font color = "#FFFFFF"> พิพิธภัณฑ์อิเล็กทรอนิกส์	พัฒนาโดย ศูนย์เทคโนโลยีอิเล็กทรอนิกส์และคอมพิวเตอร์แห่งชาติ</font>
											<br>
											<br>

										</label>
								</div>

							<?php }
							?>
			</div>  
<!--
            <div class="col-md-6">
               <p>พิพิธภัณฑ์อิเล็กทรอนิกส์พัฒนาโดย ศูนย์เทคโนโลยีอิเล็กทรอนิกส์และคอมพิวเตอร์แห่งชาติ</p>
            </div>
-->

          </div>
        </div>
        <!-- End Copyright -->

      </div>
    </footer>