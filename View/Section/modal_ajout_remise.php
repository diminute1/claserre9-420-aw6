<!-- The Modal -->
<div class="modal modal fade" id="ajouterRemise">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Ajouter une remise</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form class="" action="?action=AjouterRemise&id=<?=$_REQUEST['id']?>" method="post">
                  <input type="date" class="form-control datepicker" min="<?=date("Y-m-d")?>" name="date" value="">
                  <br><br>
                  <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div
