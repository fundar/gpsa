<section class="stripe sombra">
</section>
<section class="stripe about-4">
    <div class="container">
       <div class="row">
            
         <?php $service_query = new WP_Query('page_id=240');
         while ( $service_query->have_posts() ) : $service_query->the_post(); ?>
         <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
           <div class="animate zoom load">                                                                              				
                 <div>						
                        <?php the_content(); ?>
                 </div> 	<!-- end .post_content -->                                                                                                                                                         
         </article> <!-- end .entry -->
        <?php endwhile; // end of the loop. ?>
           
	   </div>
    </div>
</section>
<section class="stripe" style="padding-bottom: 0px ! important;">
        <div class="footer-contact">
	<div class="container">
	<div class="row">
	    <a class="buttoncontact" href="/contact/">Contact Us</a>	
	</div>
	</div>
    </div>


</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="footerbottom">
		<div class="col-md-5">
                     <h2 id="footerlogo"><a><img src="<?php $logo=vibe_get_option('logo'); echo (isset($logo)?$logo:VIBE_URL.'/images/logo.png'); ?>"></a></h2>
		     <h2 id="footerlogo"><a class="logo-fundar" target="_blank" href="http://fundar.org.mx/"><img src="http://gpsaknowledge.org/wp-content/uploads/2014/08/fundar-logo.png"></a></h2>
                </div>
                <div class="col-md-7 sitemap">
                    <div class="col-md-2">
			<div class="footerwidget">
			    <h4 class="footertitle"><a href="http://gpsaknowledge.org/about/">About</a></h4>
			    <div class="textwidget"></div>
		        </div>
		    </div>
		    <div class="col-md-2">
			<div class="footerwidget">
			    <h4 class="footertitle"><a href="/news-events/">News and Events</a></h4>
			    <div class="textwidget"></div>
		        </div>
		    </div>
		    <div class="col-md-2">
			    <div class="footerwidget">
				<h4 class="footertitle"><a href="/category/knowledge-repository/">Knowledge Repository</a></h4>
				<div class="textwidget">
				</div>
		            </div>
		    </div>
		    <div class="col-md-2">
			<div class="footerwidget">
			    <h4 class="footertitle"><a href="/networking/">Networking</a></h4>
				<div class="textwidget">
				    <ul>
				    <li><a href="/blog">Blog</a></li>
				    <!--<li><a>Tell us about your story</a></li>-->
				    <!--<li><a>Related Initiatives</a></li>-->
				    <li><a href="/networking#roster-of-practitioners">Roster of Practitioners</a></li>
				    </ul>
				</div>
		       </div>
		    </div>		    
		    <div class="col-md-2">
			<div class="footerwidget">
			    <h4 class="footertitle"><a href="/learning-activities/">Learning Activities</a></h4>
				<div class="textwidget">
				    <!--
				    <ul>
				    <li><a>E-courses</a></li>
				    <li><a>Members directory</a></li>
				    </ul>
				    -->
				</div>
		       </div>
		    </div>
		    <div class="col-md-2">
			<div class="footerwidget">
			    <h4 class="footertitle"><a href="/knowldge-exchange/">Knowledge Exchange</a></h4>
				<div class="textwidget">
				    <ul>
				    <li><a href="/forums">Forums</a></li>
				    <li><a href="/event-type/webinars">Webinars</a></li>
				    </ul>
				</div>
		        </div>
		    </div>
		</div>
            </div>
        </div>
    </div> 
    <div id="scrolltop">
        <a><i class="icon-arrow-1-up"></i><span><?php _e('top','vibe'); ?></span></a>
    </div>
</footer>
<div id="footerbottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">              
                <?php $copyright=vibe_get_option('copyright'); echo (isset($copyright)?$copyright:'&copy; 2013, All rights reserved.'); ?>
            </div>
            <div class="col-md-12">
                <div id="footermenu">
                </div>    
            </div>
        </div>
    </div>
</div>
</div><!-- END PUSHER -->
</div><!-- END MAIN -->
	<!-- SCRIPTS -->
<?php
wp_footer();
?>
   
<?php
echo vibe_get_option('google_analytics');
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  //ga('create', 'UA-21808432-6', 'gpsaknowledge.org');
 <?php
 // New Google Analytics code to set User ID.
 if ( get_current_user_id() > 0 )  {
  $gacode = "ga('create', 'UA-21808432-6', { 'userId': '%s' });";
  echo sprintf($gacode, get_current_user_id());
 } else {
  $gacode = "ga('create', 'UA-21808432-6', 'gpsaknowledge.org');";
  echo sprintf($gacode);
 }?>


 
  ga('send', 'pageview');


</script>



<script type="text/javascript">
	jQuery(document).ready( function () {
		jQuery("#alternar-respuesta-ej1").on("click", function(e){
		    	jQuery("#respuesta-ej1").slideToggle();
				return false;		    	
		    })
			});
</script>
<script type="text/javascript">
	jQuery(document).ready( function () {
		jQuery("#alternar-respuesta-ej2").on("click", function(e){
		    	jQuery("#respuesta-ej2").slideToggle();
				return false;		    	
		    })
			});
</script>



<script type="text/javascript">

jQuery(document).ready( function () {
		jQuery("#button").on("click", function(e){
		ga('send', 'event', 'button', 'click', $(this).attr('href'));
		    })
			});


</script>


<script type="text/javascript">

/**
 * Utility to wrap the different behaviors between W3C-compliant browsers
 * and IE when adding event handlers.
 *
 * @param {Object} element Object on which to attach the event listener.
 * @param {string} type A string representing the event type to listen for
 *     (e.g. load, click, etc.).
 * @param {function()} callback The function that receives the notification.
 */
 


 function addListener(element, type, callback) {
 if (element.addEventListener) element.addEventListener(type, callback);
 else if (element.attachEvent) element.attachEvent('on' + type, callback);
}
	
</script>













</body>
</html>
