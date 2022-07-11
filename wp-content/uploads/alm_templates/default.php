<div class="px-4 py-3 column-job">
<div data-bs-toggle="modal" data-bs-target="#modal_<?php echo str_replace(' ', '_', get_sub_field('job_title', 138, false)); ?>">
<div class="row align-items-center">
<div class="col-6">
<p class="mb-0"><?php the_sub_field('job_title', false, false); ?></p>
</div>
<div class="col-3"><p class="mb-0"><?php the_sub_field('status', false, false); ?></p></div>
<div class="col-3"><p class="mb-0"><?php the_sub_field('location', false, false); ?></p></div>
</div>
</div>
<div class="modal fade " id="modal_<?php echo str_replace(' ', '_', get_sub_field('job_title', 138, false)); ?>" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel"><?php the_sub_field('job_title', 138, false); ?></h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<p><?php the_sub_field('description', 138, false); ?></p>
</div>
</div>
</div>
</div>
</div>