<!-- Tambah -->
<div class="modal fade" id="tambah">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Tambah Season</h4>
			</div>
			<form class="form-horizontal" method="post" action="<?=base_url('Backend/Settings/Seasons/Tambah/')?>">
				<div class="modal-body">
					<div class="form-group">
						<label for="season" class="col-sm-3 control-label">Season</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" name="season" id="season" placeholder="Season" required>
						</div>
					</div>
					<div class="form-group">
						<label for="status" class="col-sm-3 control-label">Status</label>

						<div class="col-sm-9">
							<select class="form-control" name="status" id="status" required>
								<option value="0">Tidak Ditampilkan</option>
								<option value="1" selected>Ditampilkan</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- End Tambah -->


<?php foreach ($tblSeasons as $a) : ?>
	<!-- Edit -->
	<div class="modal fade" id="edit-<?=$a->id_setting_season?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Edit Season</h4>
				</div>
				<form class="form-horizontal" method="post" action="<?=base_url('Backend/Settings/Seasons/Edit/'.$a->id_setting_season)?>">
				<div class="modal-body">
					<div class="form-group">
						<label for="season" class="col-sm-3 control-label">Season</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" name="season" id="season" placeholder="Season" value="<?=$a->season?>" required>
						</div>
					</div>
					<div class="form-group">
						<label for="status" class="col-sm-3 control-label">Status</label>

						<div class="col-sm-9">
							<select class="form-control" name="status" id="status" required>
								<option value="0" <?php if ($a->status == '0'){echo 'selected';}?>>Tidak Ditampilkan</option>
								<option value="1" <?php if ($a->status == '1'){echo 'selected';}?>>Ditampilkan</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success">Update</button>
				</div>
				</form>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- End Edit -->
<?php endforeach; ?>

