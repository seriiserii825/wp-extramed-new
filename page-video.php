<?php
get_header('sub-banner');
?>
    <!--Start Content-->
    <div class="content">
        <div class="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="our-location">
							<?php if (have_posts()): ?>
								<?php the_post(); ?>
								<?php the_content(); ?>
							<?php else: ?>
							<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Content-->

<?php
get_footer();

