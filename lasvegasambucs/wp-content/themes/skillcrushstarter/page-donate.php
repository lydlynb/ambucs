<?php
/**
* Template Name: About Page
*
* The template for displaying services offered.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
get_header(); ?>

<section class="donate-page">
	<div class="main-content">
		<div class="content">

			<section id="top-section">
        <div class="full-width">

					<?php while ( have_posts() ) : the_post();?>
							<div class="general-content">
								<?php the_content(); ?>
							</div>
					<?php endwhile; // end of the loop. ?>
        </div>
      </section>

      <section id="middle-section">
        <div class="full-width">
					<h2>Want to Sponsor an Amtryke?</h2>

					<div class="half-width">
						<img class="donate-img" src="<?php echo get_template_directory_uri(); ?>/img/donate.png" alt="Girl on Bike">
          </div>

          <div class="half-width">
						<p>A donation of $700 will sponsor an Amtryke for a deserving child.<br>
							In return you will receive:</p>
            <ul>
							<li>Sponsor name attached to Amtryke and posted on social media</li>
							<li>An invitation to the giveaway event</li>
							<li>Framed photo of child from the event</li>
						</ul>
          </div>
        </div>
      </section>

      <section id="bottom-section">
				<div class="full-width">
					<h2>Ways to Donate</h2>

							<p>Click below to donate through paypal or venmo.</p>

              <a href="<?php echo 'http://www.paypal.com' ?>" target="_blank" class="button">Paypal</a>
							<a href="<?php echo 'http://www.venmo.com' ?>" target="_blank" class="button">Venmo</a>

						<p class="checks">Alternately, donation checks can be made out to <strong>"Las Vegas AMBUCS"</strong> and mailed to:</p>
	 					<p class="address">Las Vegas AMBUCS<br>
	 						1000 Rancho Circle<br>
	 						Las Vegas, NV 89107</p>

					<p class="disclaimer"><strong>Please let us know if your donation is being made in honor of, in memory of, or
						in support of a specific person or wish list rider so we can recognize it appropriately.</strong></p>
				</div>
      </section>

		</div>
	</div>
</section>

<?php get_footer(); ?>
