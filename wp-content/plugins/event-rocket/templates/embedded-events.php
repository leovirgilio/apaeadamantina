<?php defined( 'ABSPATH' ) or exit() ?>
	</br>
<div class="eventrocket embedded-event post">
	<div class="post-thumb"> <?php echo tribe_event_featured_image() ?> </div>
	<?php the_title() ?>
	<div class="schedule"> <?php echo tribe_events_event_schedule_details() ?> </div>
	<!-- <div class="summary"> <?php the_excerpt() ?> </div> -->
	<a href="<?php the_permalink() ?>">conferir este evento</a>
	</br>
</div>