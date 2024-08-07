<div class="container" id="edit_band_dialog">
	<form>

		<input type="hidden" name="id" value="<?php echo $my_band->id; ?>">
		<div class="mb-3">
			<label for="bandInput"><?= __("Band"); ?></label>
			<input type="text" class="form-control" name="band" id="bandInput" aria-describedby="bandInputHelp" value="<?php if(set_value('band') != "") { echo set_value('band'); } else { echo $my_band->band; } ?>" required>
			<small id="bandInputHelp" class="form-text text-muted"><?= __("Name of Band (E.g. 20m)"); ?></small>
		</div>
		<div class="mb-3">
			<label for="bandGroup"><?= __("Bandgroup"); ?></label>
			<input type="text" class="form-control" name="bandgroup" id="bandGroup" aria-describedby="bandgroupInputHelp" value="<?php if(set_value('bandgroup') != "") { echo set_value('bandgroup'); } else { echo $my_band->bandgroup; } ?>" required>
			<small id="bandgroupInputHelp" class="form-text text-muted"><?= __("Name of bandgroup (E.g. hf, vhf, uhf, shf)"); ?></small>
		</div>
		<div class="mb-3">
			<label for="ssbqrg"><?= __("SSB QRG"); ?></label>
			<input type="text" class="form-control" name="ssbqrg" id="ssbqrg" aria-describedby="ssbqrgInputHelp" value="<?php echo $my_band->ssb; ?>" required>
			<small id="ssbqrgInputHelp" class="form-text text-muted"><?= __("Frequency for SSB QRG in band (must be in Hz)"); ?></small>
		</div>
		<div class="mb-3">
			<label for="dataqrg"><?= __("DATA QRG"); ?></label>
			<input type="text" class="form-control" name="dataqrg" id="dataqrg" aria-describedby="dataqrgInputHelp" value="<?php echo $my_band->data; ?>" required>
			<small id="dataqrgInputHelp" class="form-text text-muted"><?= __("Frequency for DATA QRG in band (must be in Hz)"); ?></small>
		</div>
		<div class="mb-3">
			<label for="cwqrg"><?= __("CW QRG"); ?></label>
			<input type="text" class="form-control" name="cwqrg" id="cwqrg" aria-describedby="cwqrgInputHelp" value="<?php echo $my_band->cw; ?>" required>
			<small id="cwqrgInputHelp" class="form-text text-muted"><?= __("Frequency for CW QRG in band (must be in Hz)"); ?></small>
		</div>

		<button type="button" onclick="saveUpdatedBand(this.form);" class="btn btn-primary"><i class="fas fa-plus-square"></i> <?= __("Save"); ?></button>

	</form>
</div>