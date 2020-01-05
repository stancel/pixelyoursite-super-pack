<?php

namespace PixelYourSite\SuperPack;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use PixelYourSite;

?>

<?php foreach ( PixelYourSite\Facebook()->getPixelIDs() as $index => $pixel_id ) : ?>
	<?php
	
	if ( $index === 0 ) {
		continue; // skip default ID
	}
	
	?>

    <div class="row mt-3">
        <div class="col-3"></div>
        <div class="col-7">
			<?php PixelYourSite\Facebook()->render_pixel_id( 'pixel_id', 'Facebook Pixel ID', $index ); ?>
        </div>
        <div class="col-2">
            <button type="button" class="btn btn-sm remove-row">
                <i class="fa fa-trash-o" aria-hidden="true"></i>
            </button>
        </div>
    </div>

<?php endforeach; ?>

<div class="row mt-3" id="pys_superpack_facebook_pixel_id" style="display: none;">
	<div class="col-3"></div>
	<div class="col-7">
		<input type="text" name="" id="" value="" placeholder="Facebook Pixel ID" class="form-control">
	</div>
	<div class="col-2">
		<button type="button" class="btn btn-sm remove-row">
			<i class="fa fa-trash-o" aria-hidden="true"></i>
		</button>
	</div>
</div>

<div class="row my-3">
    <div class="col-3"></div>
    <div class="col-7">
        <button class="btn btn-sm btn-block btn-primary" type="button"
                id="pys_superpack_add_facebook_pixel_id">
            Add Extra Facebook Pixel ID
        </button>
    </div>
</div>


<script type="text/javascript">
    jQuery(document).ready(function ($) {
        
        $('#pys_superpack_add_facebook_pixel_id').click(function (e) {

            e.preventDefault();
            
            var $row = $('#pys_superpack_facebook_pixel_id').clone()
                .insertBefore('#pys_superpack_facebook_pixel_id')
                .attr('id', '')
                .css('display', 'flex');
            
            $('input[type="text"]', $row)
                .attr('name', 'pys[facebook][pixel_id][]');
            
        });

        $(document).on('click', '.remove-row', function () {
            $(this).closest('.row').remove();
        });
        
    });
</script>