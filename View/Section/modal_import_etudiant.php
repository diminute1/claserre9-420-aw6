<!-- The Modal -->
<div class="modal modal fade" id="importeretudiant">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Importer une liste d'étudiants</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h5>A faire</h5>
				<div class="d-flex flex-row-reverse mx-5 my-5">
					<form action="?action=newlist" method="post" enctype="multipart/form-data">
						<div class="input-group mb-3">
							<div class="custom-file">
								<input type="hidden" name ="id" value=<?=$_REQUEST['id']?>>
								<input name="file" type="file" accept=".csv,.txt" class="custom-file-input" id="customFile">
								<label class="custom-file-label" for="customFile">Importer une liste</label>
							</div>
							<div class="input-group-append">
								<button type="submit"  class="btn btn-primary" type="button">OK</button>
							</div>
						</div>
					</form>
				</div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>