<div class="container">
<h2><?php echo $page_title; ?></h2>


<?php if($status == true) { ?>

<p><?= __("The backup of your log completed successfully. The output can be found at"); ?>: <a href="<?php echo base_url().$filename; ?>"><?php echo base_url() . $filename; ?></a></p>

<p><?= __("You could automate this process by making it a cronjob."); ?></p>

<?php } else { ?>

<p><?= __("Something went wrong during the backup process. Check that the backup folder exists and is writeable by your web server user / group."); ?></p>

<?php } ?>

</div>
