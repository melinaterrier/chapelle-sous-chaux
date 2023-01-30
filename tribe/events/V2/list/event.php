<?php
/**
 * View: List Event
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/list/event.php
 *
 * See more documentation about our views templating system.
 *
 * @link http://evnt.is/1aiy
 *
 * @version 5.0.0
 *
 * @var WP_Post $event The event post object with properties added by the `tribe_get_event` function.
 *
 * @see tribe_get_event() For the format of the event object.
 */

$container_classes = [ 'tribe-common-g-row', 'tribe-events-calendar-list__event-row' ];
$container_classes['tribe-events-calendar-list__event-row--featured'] = $event->featured;

$event_classes = tribe_get_post_class( [ 'tribe-events-calendar-list__event', 'tribe-common-g-row', 'tribe-common-g-row--gutters' ], $event->ID );
?>
<div <?php tribe_classes( $container_classes ); ?>>

	<div class="tribe-events-calendar-list__event-wrapper tribe-common-g-col">
		<article <?php tribe_classes( $event_classes ) ?>>
			<div class="tribe-events-calendar-list__event-details tribe-common-g-col">

				<header class="tribe-events-calendar-list__event-header">
                    <?php $this->template( 'list/event/title', [ 'event' => $event ] ); ?>
                    <div class="event_caption">
                        <?php $this->template( 'list/event/date', [ 'event' => $event ] ); ?>
						<svg width="27" height="3" viewBox="0 0 27 3" fill="none" xmlns="http://www.w3.org/2000/svg">
							<line x1="1" y1="1.31299" x2="26" y2="1.31299" stroke="#E8E8DC" stroke-width="2" stroke-linecap="round"/>
						</svg>
                        <?php $this->template( 'list/event/venue', [ 'event' => $event ] ); ?>
                    </div>
				</header>

			</div>

			<?php $this->template( 'list/event/featured-image', [ 'event' => $event ] ); ?>

		</article>
	</div>

</div>
