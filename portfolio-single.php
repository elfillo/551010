<?php
	/*
	Template Name: Отчет о ремонте
	*/
?>
<?php
	$id = $post->ID;
	$content = carbon_get_post_meta($post->ID, 'container');
	$draw = new \Constructor\Constructor($content);
?>
<?php get_header(); ?>
<section class="section">
	<div class="container container_regular">
        <div class="breadcrumb">
	        <?php echo do_shortcode('[breadcrumbs]')?>
        </div>
		<div class="repair-report-wrapper">
			<div class="repair-report-header">
				<div class="cover"><img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>" alt="#"></div>
				<div class="text">
					<div class="title"><?php echo $post->post_title?></div>
					<div class="report"><?php echo carbon_get_post_meta($post->ID, 'repair-report')?></div>
					<div class="price"><?php echo carbon_get_post_meta($post->ID, 'repair-price')?></div>
					<div class="pdf">
                        <?php $pdfUrl = carbon_get_post_meta($post->ID, 'repair-pdf')?>
                        <?php if(!empty($pdfUrl)):?>
						<div class="show">
							<a href="<?php echo $pdfUrl?>" target="_blank" class="button button_yellow">Посмотреть смету</a>
						</div>
						<a href="<?php echo $pdfUrl?>" download class="button-download">Скачать</a>
                        <?php else:?>
                            <div class="button button-disabled">Посмотреть смету</div>
                        <?php endif?>
					</div>
				</div>
			</div>
			<div class="repair-report-body">
                <div class="repair-gallery">
                    <?php foreach (getPostGallery($post) as $item):?>
                      <div class="item"><img src="<?php echo $item?>" alt="#"></div>
                    <?php endforeach;?>
                </div>
            </div>
		</div>
	</div>
</section>
<?php $draw->page();?>
<?php get_footer(); ?>