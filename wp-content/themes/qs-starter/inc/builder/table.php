<?php
/**
 * Table builder module
 * 
 * @package WordPress
 */

$data = isset( $args['data'] ) ? $args['data'] : array();

$layout           = $data['acf_fc_layout'];
$main_title       = isset( $data['main_title'] ) ? $data['main_title'] : '';
$table_columns    = isset( $data['table_columns'] ) ? $data['table_columns'] : array();
$table_rows       = isset( $data['table_rows'] ) ? $data['table_rows'] : array();
?>

<?php if( $main_title || $table_columns || $table_rows ) : ?>

<div class="builder-item" data-layout="<?php echo esc_html( $layout ); ?>">
	
	<div class="builder-item-inner">
		<div class="builder-item__row">
			
			<?php if( $main_title ) : ?>
				<div class="builder-item__title">
					<?php echo $main_title; ?>
				</div>
			<?php endif; ?>

			<?php if ( $table_columns && $table_rows ) : ?>
				<table class="builder-table">
					<?php if ( $table_columns ) : ?>
						<thead>
							<tr>
								<?php foreach( $table_columns as $thead ) : ?>
									<th><?php echo wp_kses_post( $thead['table_head'] ); ?></th>
								<?php endforeach; ?>
							</tr>
						</thead>
					<?php endif; ?>

					<?php if ( $table_rows ) : ?>
						<tbody>
							
							<?php foreach( $table_rows as $row ) : ?>
								<tr class="devider">
									<td colspan="4"></td>
								</tr>
								<tr>
								 	<td><?php echo wp_kses_post( $row['col1'] ); ?></td>
									<td><?php echo wp_kses_post( $row['col2'] ); ?></td>
									<td><?php echo wp_kses_post( $row['col3'] ); ?></td>
									<?php if ( isset( $row['col4'] ) ) : ?>
										<td><?php echo wp_kses_post( $row['col4'] ); ?></td>
									<?php endif; ?>
									<?php if ( isset( $row['col5'] ) ) : ?>
										<td><?php echo wp_kses_post( $row['col5'] ); ?></td>
									<?php endif; ?>
								</tr>
							<?php endforeach; ?>
							
						</tbody>
					<?php endif; ?>
				</table>
			<?php endif; ?>

			
		</div>
	</div>

</div>

<?php endif; ?>