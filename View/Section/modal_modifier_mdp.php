<!-- The Modal -->
<div class="modal modal fade" id="modifiermdp">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modifier le mot de passe</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div>
                    <form class="form" method="post" action="">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Ancien mot de passe :</span>
                            </div>
                            <input type="password" class="form-control" aria-describedby="basic-addon3" name="oldmdp" required>
                        </div>
						<div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Nouveau mot de passe :</span>
                            </div>
                            <input type="password" class="form-control" aria-describedby="basic-addon3" name="newmdp" required>
                        </div>
						<div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Répéter nouveau mot de passe :</span>
                            </div>
                            <input type="password" class="form-control" aria-describedby="basic-addon3" name="newmdp_rpt" required>
                        </div>
						
                        <div class="form-group text-center mx-auto mt-3"><button class="btn btn-success btn-sm" type="submit" name="action" value="changerMotdePasse">Changer le mot de passe</button></div>
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