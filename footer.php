</div>
</div>
<div id="shc-footer panel">
    <div class="row panel-footer">
        <div class="col-md-4 shc-footer-main-info">
            <img src="http://www.seattle-hc.frcrescioni.net/wp-content/uploads/2016/11/shc_logo.png" class="img-circle" />       
                <h4 class="#">Seattle Hiroshima Club</h4>
                <h6 class="#">1000 Main St, Seattle WA 98104</h6>
                <h6 class="#">1 800 636 252</h6>
            <form class="navbar-form" role="search" method="get" id="searchform" action="http://www.seattle-hc.frcrescioni.net">
                <div>
                    <input type="text" class="form-control search-bar srch-txt" placeholder="Search" name="s" id="s">
                    <button type="submit" class="btn btn-default" id="searchsubmit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </div>
            </form>
                <div class="btn-group">
                    <button type="button" class="btn btn-danger"><a href="#top">Back To Top</a></button>
                </div>
        </div>
        <div class="col-md-2 shc-nav-footer">
            <?php wp_nav_menu( array ( 'theme_location' => 'footer' )); ?>
        </div>
        <div class="col-md-2 shc-nav-footer">
            <?php wp_nav_menu( array ( 'theme_location' => 'footer-pt2' )); ?>
        </div>
        <div class="col-md-4 shc-footer-last">
            
            <ul class="shc-nav-footer">
            <li class="footer-contact-nav"><a href="/contact">Contact</a></li>
            <li>Linda Ishii</li>
            <li>seattlehiroshimaclub@gmail.com</li>
            <li>360 787 9020</li>
            </ul>
            
            <!--<span>
                <i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i>
                <i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i>                
                <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
                <i class="fa fa-youtube-play fa-3x" aria-hidden="true"></i>
            </span>-->
            
            
        </div>
    </div>
</div>
        <!-- WP footer begin -->
        <?php wp_footer(); ?>
        <!-- WP footer eng -->
    </body>
</html>