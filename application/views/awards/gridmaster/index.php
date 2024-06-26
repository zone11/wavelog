<div class="container">
        <!-- Award Info Box -->
        <br>
        <div id="awardInfoButton">
            <script>
            var lang_awards_info_button = "<?php echo lang('awards_info_button'); ?>";
            var lang_award_info_ln1 = "<?php echo lang('awards_us_gridmaster_description_ln1'); ?>";
            var lang_award_info_ln2 = "<?php echo lang('awards_us_gridmaster_description_ln2'); ?>";
            var lang_award_info_ln3 = "<?php echo lang('awards_us_gridmaster_description_ln3'); ?>";
            var lang_award_info_ln4 = "<?php echo lang('awards_us_gridmaster_description_ln4'); ?>";
            </script>
            <h2><?php echo $page_title; ?></h2>
            <button type="button" class="btn btn-sm btn-primary me-1" id="displayAwardInfo"><?php echo lang('awards_info_button'); ?></button>
        </div>
        <!-- End of Award Info Box -->
		<?php if($this->session->flashdata('message')) { ?>
			<!-- Display Message -->
			<div class="alert-message error">
			  <p><?php echo $this->session->flashdata('message'); ?></p>
			</div>
		<?php } ?>
</div>


<div id="gridmapcontainer">
	<div id="gridsquare_map" class="map-leaflet" style="width: 100%; height: 800px"></div>
</div>
<div class="coordinates d-flex">
        <div class="cohidden"><?php echo lang('gen_hamradio_latitude')?>: </div>
        <div class="cohidden col-auto text-success fw-bold" id="latDeg"></div>
        <div class="cohidden"><?php echo lang('gen_hamradio_longitude')?>: </div>
        <div class="cohidden col-auto text-success fw-bold" id="lngDeg"></div>
        <div class="cohidden"><?php echo lang('gen_hamradio_gridsquare')?>: </div>
        <div class="cohidden col-auto text-success fw-bold" id="locator"></div>
        <div class="cohidden"><?php echo lang('gen_hamradio_distance')?>: </div>
        <div class="cohidden col-auto text-success fw-bold" id="distance"></div>
        <div class="cohidden"><?php echo lang('gen_hamradio_bearing')?>: </div>
        <div class="cohidden col-auto text-success fw-bold" id="bearing"></div>
</div>
<script>var gridsquaremap = true;
var type = "worked";
var dxcc = '<?php echo $dxcc; ?>';
<?php
    echo 'var jslayer ="' . $layer .'";';
    echo "var jsattribution ='" . $attribution . "';";
    echo "var homegrid ='" . strtoupper($homegrid[0]) . "';";

    echo 'var gridsquares_gridsquares = "' . $gridsquares_gridsquares . '";';
    echo 'var gridsquares_gridsquares_worked = "' . $gridsquares_gridsquares_worked . '";';
    echo 'var gridsquares_gridsquares_lotw = "' . $gridsquares_gridsquares_lotw . '";';
    echo 'var gridsquares_gridsquares_paper = "' . $gridsquares_gridsquares_paper . '";';
?>
</script>
