
<div class="container" id="create_contest">

<br>
	<?php if($this->session->flashdata('message')) { ?>
		<!-- Display Message -->
		<div class="alert-message error">
		  <p><?php echo $this->session->flashdata('message'); ?></p>
		</div>
	<?php } ?>

		<?php if($this->session->flashdata('notice')) { ?>
			<div id="message" >
			<?php echo $this->session->flashdata('notice'); ?>
			</div>
		<?php } ?>

		<?php $this->load->helper('form'); ?>

		<?php echo validation_errors(); ?>

		<form>
		<div class="mb-3">
		    <label for="contestInput"><?= __("Name"); ?></label>
		    <input type="text" class="form-control" name="contestname" id="contestInput" aria-describedby="contestInputHelp" required>
		    <small id="contestInputHelp" class="form-text text-muted"><?= __("Name of the Contest"); ?></small>
		  </div>

		  <div class="mb-3">
		    <label for="adifcontestInput"><?= __("ADIF Name"); ?></label>
		    <input type="text" class="form-control" name="adifcontestname" id="adifcontestInput" aria-describedby="adifcontestInputHelp">
		    <small id="adifcontestInputHelp" class="form-text text-muted"><?= __("Name of Contest in ADIF-specification"); ?></small>
		  </div>

			<button type="button" onclick="createContest(this.form);" class="btn btn-primary btn-sm"><i class="fas fa-plus-square"></i> <?= __("Create"); ?></button>

		</form>
</div>
