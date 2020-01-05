<?php

namespace PixelYourSite\SuperPack;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use PixelYourSite;

?>

<?php foreach ( PixelYourSite\Ads()->getPixelIDs() as $index => $ads_id ) : ?>
	<?php
	
	if ( $index === 0 ) {
		continue; // skip default ID
	}
	
	?>

    <div class="row mt-3">
        <div class="col-3"></div>
        <div class="col-7">
			<?php PixelYourSite\Ads()->render_pixel_id( 'ads_ids', 'AW-123456789', $index ); ?>
        </div>
        <div class="col-2">
            <button type="button" class="btn btn-sm remove-row">
                <i class="fa fa-trash-o" aria-hidden="true"></i>
            </button>
        </div>
    </div>

<?php endforeach; ?>

<div class="row mt-3" id="pys_superpack_google_ads_id" style="display: none;">
	<div class="col-3"></div>
	<div class="col-7">
		<input type="text" name="" id="" value="" placeholder="AW-123456789" class="form-control">
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
                id="pys_superpack_add_google_ads_id">
            Add Extra Google Ads Tag
        </button>
    </div>
</div>


<script type="text/javascript">
    jQuery(document).ready(function ($) {
        
        $('#pys_superpack_add_google_ads_id').click(function (e) {
            
            e.preventDefault();

            var $row = $('#pys_superpack_google_ads_id').clone()
                .insertBefore('#pys_superpack_google_ads_id')
                .attr('id', '')
                .css('display', 'flex');

            $('input[type="text"]', $row)
                .attr('name', 'pys[google_ads][ads_ids][]');
            
        });

        $(document).on('click', '.remove-row', function () {
            $(this).closest('.row').remove();
        });
        
    });
</script>