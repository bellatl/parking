<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package KSU_DPT
 */
?>

<footer class="footer hide-for-print">
  <div class="row full-width">
    <div class="small-12 medium-3 large-6 columns">
      <h3>A DIVISION OF:</h3>
      <h3>Auxiliary Services and Programs</h3>
      <p>What are we, and who are we? To state it simply, Auxiliary Services and Programs (ASaP) addresses the nuts and bolts of daily campus life. Under our umbrella are the departments that provide the essential elements of campus life to students, faculty, and staff to make every day a success at Kennesaw State University.</p>
    </div>
    <div class="small-12 medium-3 large-3 columns">
      <h4>Quick Links</h4>
      <ul class="footer-links">
        <li><a href="#">What I Do</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">FAQ's</a></li>
      <ul>
    </div>
    <div class="small-12 medium-3 large-3 columns">
      <h4>Questions</h4>
      <ul class="footer-links">
        <li><h4><a href="#">Parking Questions</a></h4></li>
        <li><h4><a href="#">Call Us! MON-FRI 7am-5:30pm</a></h4></li>
        <li><h1><a href="#">470.578.6506</a></h1></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
      <ul>
    </div>
  </div>
</footer>
           
	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php get_sidebar('footer'); ?>
		<div class="row full-width">
			<div class="small-12 columns">
				<p class="text-left hide-for-print">
					&copy; <?php echo date('Y'); ?> <a href="http://www.kennesaw.edu">Kennesaw State University</a>. All rights reserved.
				</p>
			</div>
		</div>
	</footer>
  <!--<a class="exit-off-canvas"></a>-->

  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>