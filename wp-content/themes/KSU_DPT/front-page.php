<?php
/**
 * Template for static front page
 *
 * @package KSU_DPT
 */

get_header(); ?>
<!-- Input metaslider for custom plugin if needed right here -->
	<div>
	<ul class="example-orbit wow bounceInDown" data-orbit data-options="animation:fade;timer_speed:15000;pause_on_hover:false;slide_number:false;">
	  <li>
	    <a href="/about/"><img src="/wp-content/themes/KSU_DPT/images/slider1.png" alt="slide1" /></a>
	  </li>
	  <li class="active">
	    <img src="/wp-content/themes/KSU_DPT/images/slider2.jpg" alt="slide2" />
	  </li>
	  <li>
	    <img src="/wp-content/themes/KSU_DPT/images/slider3.jpg" alt="slide3" />
	  </li>
	</ul>
	</div>
	  <div class="row full-width" data-equalizer><br />
	    <div class="small-12 medium-8 columns data-equalizer-watch">
	    <?php $args = array( 'numberposts' => 1 ); $lastposts = get_posts( $args ); foreach($lastposts as $post) : setup_postdata($post); ?> <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		  <div class="panel">
		     <?php the_excerpt(); ?><?php endforeach; ?>
	      </div>
	    </div>
	    <div class="small-12 medium-4 columns data-equalizer-watch">
	    <?php $args = array( 'post_type' => 'alerts', 'posts_per_page' => 1 ); $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); echo '<div class="fiat-alert">'; ?><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	      <div class="panel">
	      	 <a class="red" href="<?php the_permalink(); ?>"><?php echo excerpt(68); echo '</div>'; ?></a><?php endwhile; wp_reset_query(); ?>
          </div>
	    </div>
	   </div><!-- Close row -->

	<div class="section">
      <div class="row full-width text-center" data-equalizer>
		 <div class="large-4 medium-4 columns">
			<div class="panel" data-equalizer-watch>
				<img src="/wp-content/themes/KSU_DPT/images/students.png">
				<h1>Students</h1>
				<p>Students at Kennesaw State have a variety of parking options available including on-campus parking and off-campus park and rides lots. Students are required to make a parking selection at the beginning of each fall semester through OwlExpress</p>
				<a href="/student-parking/" class="button ksu">Learn More</a>
		    </div>
	     </div>
		 
		 <div class="large-4 medium-4 columns">
		     <div class="panel" data-equalizer-watch>
		 		<img src="/wp-content/themes/KSU_DPT/images/faculty.png">
		 		<h1>Faculty/Staff</h1>
		 		<p>Kennesaw State employees have more than 2,000 parking spaces available across both campuses. Employees may also take advantage of our off-campus park and ride lots at reduced rate. Most on-campus staff lots are located close to classroom buildings.</p>
		 		<a href="/facultystaff-parking/" class="button ksu">Learn More</a>
		     </div>
		 </div>
		  
		 <div class="large-4 medium-4 columns">
		     <div class="panel" data-equalizer-watch>
		 		<img src="/wp-content/themes/KSU_DPT/images/visitors.png">
		 		<h1>Visitors/Alumni</h1>
		 		<p>We welcome all visitors, parents and alumni to our beautiful campuses! From sports competitions to fine arts performances, both the Kennesaw Campus and Marietta Campus host many events. We provide convenient visitor parking in our pay-to-park areas.</p><br>
		 		<a href="/visitors/" class="button ksu">Visiting Us?</a>
		     </div>
		  </div>
        </div>
     </div>
     
     <div id="section">
     <div class="row full-width text-center">
     		<div class="large-4 medium-4 columns">
     				<img class="wow fadeIn" src="/wp-content/themes/KSU_DPT/images/shuttle.png">
     		</div>
     		<div class="large-4 medium-4 columns">
     				<img class="wow fadeIn" src="http://placehold.it/400x200">
     		</div>
     		<div class="large-4 medium-4 columns">
     				<img class="wow fadeIn" src="http://placehold.it/400x200">
     		</div>
	</div>
	<br />
	<div class="row full-width text-center">
     		<div class="large-4 medium-4 columns">
     				<img class="wow fadeIn" src="http://placehold.it/400x200">
     		</div>
     		<div class="large-4 medium-4 columns">
     				<img class="wow fadeIn" src="http://placehold.it/400x200">
     		</div>
     		<div class="large-4 medium-4 columns">
     				<img class="wow fadeIn" src="http://placehold.it/400x200">
     		</div>
     </div>
     </div>
     </div>
     
     <div id="section-colored">
     	<div class="row full-width">
      	 <div class="small-12 medium-6 large-6 animated fadeIn columns">
      	 <h6>Meet B.O.B.</h6>
      	 <img src="/wp-content/themes/KSU_DPT/images/bob_front.png" class="show-for-small-only">
      	 <p>KSU offers <strong>B.O.B.</strong>, a convenient transportation shuttle service to its students. The shuttle offers service between campus and various local area apartments, Town Center Mall and the Perch (KSU Sports &amp; Rec Park).</p>
      	 <p class="hide-for-medium-only">The shuttle is FREE to ride for all KSU students, faculty and staff with a valid KSU ID. Only individuals who are currently enrolled and possess a current KSU ID or shuttle pass may ride the shuttle.</p>
      	 <h1 class="hide-for-medium-only">The benfits of B.O.B.</h1>
      	 <ul class="hide-for-medium-only">
      	  <li>Predefined shuttle stops per semester</li>
      	  <li>Apartment transportation</li>
      	  <li>Minimal wait times</li>
      	  <li>100% <strong>FREE</strong> to use</li>
      	  <li>Random Giveaways for riding!</li>
      	 </div>
      	 <div class="large-6 medium-6 hide-for-small-only animated fadeIn columns">
      	 	<a href="/transportation/meet-bob/"><img class="wow fadeIn" data-wow-delay="500ms" src="/wp-content/themes/KSU_DPT/images/bob_front.png"></a>
      	 </div>
     	</div>
     </div>
     
     <div id="section">
       <div class="row full-width">
      	<div class="small-12 large-6 columns">
      			<div class="wow fadeIn flex-video" data-wow-delay="500ms">
      			        <iframe width="420" height="315" src="//player.vimeo.com/video/93184945?byline=0&amp;portrait=0&amp;color=ffcc00" frameborder="0" allowfullscreen></iframe>
      			</div>
      	</div>
      	 <div class="small-12 large-6 columns">
      	  <div class="valign-middle">
      	 	<h6 class="text-center hide-for-medium-only">Watch our awesome video.</h6>
      	 	<h1 class="text-center">Everything you need to know about Parking on Campus.</h1>
      	  </div>
      	 </div>
       </div>
     </div>
     
     <div id="section-colored">
	   <div class="row full-width">
	 	 <div class="large-6 medium-6 small-12 small-centered medium-uncentered columns">
     	 <h6>Growing Smarter</h6>
     	 <p>Kennesaw State University is the third-largest university in Georgia and continues to grow. Our parking facilities can accommodate more than 12,000 vehicles, and we ensure there are sufficient, safe and secure parking and transportation services to support the needs of the KSU campus community.</p>
     	 <h2 class="hide-for-medium-only">Did you know?</h2>
     	 <ul class="hide-for-medium-only">
     	 <li>Kennesaw State has 4 parking decks, the first were the East and West Decks, built in 2005. Next was the North Deck in 2007 and then the largest Deck, Central Deck, in 2008</li>
     	 <li>The Central Deck is the third largest free standing parking structure in Georgia!</li>
     	 <li>Did you know that open parking begins at 6PM on weekdays?</li>
     	 <li>Did you know every student must make a parking selection?</li>
     	 <li>Did you know you can check out temporary parking credential’s if you forget yours?</li>
     	 </ul>
     	 </div>
     	 <div class="large-6 medium-6 small-12 columns">
     	 	<img class="wow fadeIn" data-wow-delay="500ms" src="/wp-content/themes/KSU_DPT/images/centraldeck.png">
     	 </div>
       </div>
     </div>
     
     <!--<div id="section"> 
     <div class="row full-width">
      	<div class="small-12 columns">
      		<h2>Our Mission</h2>
      		<p>Our purpose is to ensure there are sufficient, safe, and secure parking facilities and transportation services to support the needs of the KSU campus community. We endeavor to operate within a fiscally sustainable business model that generates appropriate reserves to support all associated costs of operations.</p>
      		<h2>Our Vision</h2>
      		<p>Our vision is to enhance campus infrastructure using transportation demand management to improve traffic flow, increase parking capacity, and retain optimal green space. We strive to maintain constant vigilance for continuous improvement and innovation.</p>
      	 </div>
     </div>
     </div>-->
     
     <div id="section">  
      <div class="row full-width show-for-medium-up">
       <div class="medium-6 columns">
        <a href="http://kennesaw.transloc.com" target="_blank"><img class="wow fadeIn" data-wow-delay="500ms" src="/wp-content/themes/KSU_DPT/images/wheres_bob.png"></a>
       </div>
       <div class="medium-6 columns"><br />
       	<a href="http://kennesaw.transloc.com" target="_blank"><h6>Locate a B.O.B. Shuttle.</h6>
       	<h1>B.O.B. has multiple routes. Find yours.</h1>
       	<p>See a B.O.B. shuttle map in real-time. Now you can find a way to class with no hassle.</p></a>
       </div>
      </div>
     </div>
     
     <div id="section">  
      <div class="row full-width show-for-small-only">
       <div class="small-12 columns">
       	<a href="http://kennesaw.transloc.com" target="_blank"><h6 class="text-center">Locate a B.O.B. Shuttle.</h6>
       	<h4 class="text-center">B.O.B. has multiple routes.<br />Find yours.</h4>
       	<p class="text-center">See a B.O.B. shuttle map in real-time. Now you can find a way to class with no hassle.</p></a>
       </div>
       <div class="small-12 columns">
        <a href="http://kennesaw.transloc.com" target="_blank"><img class="wow fadeIn" data-wow-delay="500ms" src="/wp-content/themes/KSU_DPT/images/wheres_bob.png"></a>
       </div>
      </div><!--Close Row-->
     </div><!--Close section-->
     </div>

	<?php get_footer(); ?>
