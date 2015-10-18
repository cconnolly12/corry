<?php
/**
 * @description: Display Single Yelp Business using the Yelp Business API
 *  Only one business returned via this Yelp API
 * @api        : http://www.yelp.com/developers/documentation/v2/business
 * @created    : 03/06/13
 * @since      1.2
 */

$x = 0; ?>

<div class="yelp yelp-business <?php echo Yelp_Widget::ywp_profile_image_size( $profileImgSize, 'class' ); ?> yelp-business-api <?php echo "yelp-widget-" . $align; ?>"<?php if ( ! empty( $width ) ) {
	echo "style='width:" . $width . ";'";
} ?>>

	<?php
	//Display Google Map ABOVE Results Option
	if ( $googleMapPosition === 'above' ) {
		include( 'map.php' );
	}

	/**
	 * Display Business information
	 * (if user hasn't checked to not display)
	 */
	if ( $displayBizInfo !== '1' ) {
		include( 'business-info.php' );
	} ?>

	<?php
	/*
	 * Display Reviews
	 */
	if ( $reviewsOption == '1' ) {
		?>

		<div class="yelp-business-reviews<?php if ( $displayBizInfo === '1' ) {
			echo " no-business-info";
		} ?>">


			<?php foreach ( $businesses[0]->reviews as $review ) {

				//Review Filter
				if ( $reviewFilter == 'none' || $review->rating >= intval( $reviewFilter ) ) {
					?>

					<div class="yelp-review yelper-avatar-<?php echo $reviewsImgSize; ?> clearfix ">

						<div class="yelp-review-avatar">
							<img src="<?php echo $review->user->image_url; ?>" <?php
							switch ( $reviewsImgSize ) {
								case '100x100':
									echo "width='100' height='100'";
									break;
								case '80x80':
									echo "width='80' height='80'";
									break;
								case '60x60':
									echo "width='60' height='60'";
									break;
								case '40x40':
									echo "width='40' height='40'";
									break;
								default:
									echo "width='60' height='60'";
							} ?> alt="<?php echo $review->user->name; ?>'s Review" />
							<span class="name"><?php echo $review->user->name; ?></span>
						</div>


						<div class="yelp-review-excerpt">

							<?php if ( $hideRating !== '1' ) { ?>
								<img src="<?php echo $review->rating_image_url; ?>" alt="<?php echo $review->rating; ?> Stars" />
								<time><?php echo date( 'n/j/Y', $review->time_created ); ?></time>
							<?php } ?>
							<div class="yelp-review-excerpt-text">
								<?php echo wpautop( $review->excerpt ); ?>
							</div>
							<?php
							//Read More Review
							if ( $review->id && $hideReadMore !== "1" ) {
								if ( ! empty( $customReadMore ) ) {
									$reviewMoreText = $customReadMore;
								} else {
									$reviewMoreText = __( 'Read Full Review', 'ywp' );
								}

								?>
								<a href="<?php echo esc_attr( $businesses[ $x ]->url ) . "#review_" . $review->id; ?>" class="ywp-review-read-more" <?php echo $targetBlank . $noFollow; ?> title="<?php echo $reviewMoreText; ?>"><?php echo $reviewMoreText; ?></a>
							<?php } ?>

						</div>

					</div>

				<?php } //end if review filter ?>
			<?php } //end foreach ?>

		</div>

	<?php } ?>

	<?php //Display Google Map BELOW Results Option
	if ( empty( $googleMapPosition ) || $googleMapPosition === 'below' ) {
		include( 'map.php' );
	}
	?>

</div><!--/.yelp-business -->

