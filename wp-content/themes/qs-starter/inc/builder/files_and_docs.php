<?php
/**
 * Files and Docs builder module
 * 
 * @package WordPress
 */

$data = isset( $args['data'] ) ? $args['data'] : array();

$main_title       = isset( $data['main_title'] ) ? $data['main_title'] : '';
$files_and_docs   = isset( $data['files_and_docs'] ) ? $data['files_and_docs'] : '';
?>

<?php if ( $files_and_docs || $main_title ) : ?>

<div class="builder-item" data-layout="<?php echo esc_html( $data['acf_fc_layout'] ); ?>">
	
	<div class="builder-item-inner">

		<div class="builder-item__row">

			<?php if( $main_title ) : ?>
				<div class="builder-item__title">
					<?php echo $main_title; ?>
				</div>
			<?php endif; ?>

			<?php if ( $files_and_docs ) : ?>
				
				<div class="files-docs-table">
					
					<div class="table-header">
						<div class="head">שם המסמך</div>
						<div class="head files-head">קבצים</div>
					</div>

					<div class="table-body">
						<?php foreach( $files_and_docs as $item ) : 
							$file_url = isset( $item['upload_file']['url'] ) ? $item['upload_file']['url'] : '';
							$mime_type = isset( $item['upload_file']['mime_type'] ) ? $item['upload_file']['mime_type'] : '';
							if( 'application/pdf' === $mime_type ) {
								$icon = THEME . '/images/file-pdf.png';
							} else if ('application/vnd.ms-excel' === $mime_type || 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' === $mime_type ) {
								$icon = THEME . '/images/file-excel.png';
							} else {
								$icon = THEME . '/images/file-word.png';
							}
							?>
							<div class="table-row">
								<div class="file-name">
									<div class="icon"><img src="<?php echo esc_url( $icon ); ?>"></div>
									<div class="title">
										<?php echo esc_html( $item['file_title'] ); ?>
									</div>
								</div>
								<div class="file-download">
									<a href="<?php echo esc_url( $file_url ); ?>" download>
										<span class="icon"></span>
										<span class="title">הורד קובץ</span>
									</a>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>

	</div>

</div>

<?php endif; ?>