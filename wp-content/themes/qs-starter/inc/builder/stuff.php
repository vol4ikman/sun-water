<?php
/**
 * Stuff builder module
 * 
 * @package WordPress
 */

$data = isset( $args['data'] ) ? $args['data'] : array();

$layout               = $data['acf_fc_layout'];
$main_title           = isset( $data['main_title'] ) ? $data['main_title'] : '';
$stuff_members        = isset( $data['stuff_members'] ) ? $data['stuff_members'] : array();
$stuff_departments    = isset( $data['stuff_departments'] ) ? $data['stuff_departments'] : array();

?>

<?php if( $main_title || $select_faq_posts ) : ?>

<div class="builder-item" data-layout="<?php echo esc_html( $layout ); ?>">
	
	<div class="builder-item-inner">
		<div class="builder-item__row">
			
			<?php if( $main_title ) : ?>
				<div class="builder-item__title">
					<?php echo $main_title; ?>
				</div>
			<?php endif; ?>

			<?php if ( $stuff_members ) : ?>
				<ul class="stuff-list">
					<?php foreach( $stuff_members as $item ) : ?>
						<li>
							<div class="stuff-inner">
								<div class="stuff-title"><?php echo esc_html( get_the_title($item) ); ?></div>
								<div class="stuff-role"><?php echo wp_kses_post( get_field( 'role', $item ) ); ?></div>
								<div class="stuff-desc"><?php echo wp_kses_post( get_field( 'role_description', $item ) ); ?></div>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>

			<?php if ( $stuff_departments ) : ?>

				<div class="stuff_departments-devider"></div>

				<ul class="faq-list stuff_departments">
					<?php foreach( $stuff_departments as $item ) :
							$email               = get_field( 'email', 'department_' . $item->term_id );
							$fax                 = get_field( 'fax', 'department_' . $item->term_id );
							$address             = get_field( 'address', 'department_' . $item->term_id );
							$phone               = get_field( 'phone', 'department_' . $item->term_id );
							$service_type        = get_field( 'service_type', 'department_' . $item->term_id );
							$shipping_address    = get_field( 'shipping_address', 'department_' . $item->term_id );
							$work_hours          = get_field( 'work_hours', 'department_' . $item->term_id );
							$phone_hours         = get_field( 'phone_hours', 'department_' . $item->term_id );
						?>
						<li>
							<div class="question">
								<div class="question-inner">
									<div class="title"><?php echo esc_html( $item->name ); ?></div>
									<button class="indicator"></button>
								</div>
							</div>

							<div class="answer">
								<div class="department-content">

									<div class="column">
										<?php if ( $email ) :?>
											<div class="meta">
												<div class="label">דואר אלקטרוני</div>
												<div class="data"><?php echo esc_html($email); ?></div>
											</div>
										<?php endif; ?>

										<?php if ( $fax ) :?>
											<div class="meta">
												<div class="label">פקס</div>
												<div class="data"><?php echo esc_html($fax); ?></div>
											</div>
										<?php endif; ?>

										<?php if ( $address ) :?>
											<div class="meta">
												<div class="label">כתובת</div>
												<div class="data"><?php echo wp_kses_post($address); ?></div>
											</div>
										<?php endif; ?>
									</div>

									<div class="column">
										<?php if ( $phone ) :?>
											<div class="meta">
												<div class="label">טלפון</div>
												<div class="data"><?php echo esc_html($phone); ?></div>
											</div>
										<?php endif; ?>

										<?php if ( $service_type ) :?>
											<div class="meta">
												<div class="label">סוגי השירות</div>
												<div class="data"><?php echo esc_html($service_type); ?></div>
											</div>
										<?php endif; ?>

										<?php if ( $shipping_address ) :?>
											<div class="meta">
												<div class="label">כתובת למשלוח דואר</div>
												<div class="data"><?php echo wp_kses_post($shipping_address); ?></div>
											</div>
										<?php endif; ?>
									</div>

									<div class="column">
										<?php if ( $work_hours ) :?>
											<div class="meta">
												<div class="label">שעות קבלת הקהל</div>
												<div class="data"><?php echo wp_kses_post($work_hours); ?></div>
											</div>
										<?php endif; ?>

										<?php if ( $phone_hours ) :?>
											<div class="meta">
												<div class="label">שעות מענה טלפוני</div>
												<div class="data"><?php echo wp_kses_post($phone_hours); ?></div>
											</div>
										<?php endif; ?>
									</div>

								</div>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>
	</div>

</div>

<?php endif; ?>