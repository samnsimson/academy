<div class="course-rating" data-url="<?php echo AJAX_URL; ?>" data-action="themex_rating" data-id="<?php the_ID(); ?>" data-score="<?php echo round(ThemexCourse::$data['course']['rating']['value']); ?>" <?php if(ThemexCourse::$data['course']['rating']['readonly']) { ?>data-readonly="true"<?php } ?>></div>
