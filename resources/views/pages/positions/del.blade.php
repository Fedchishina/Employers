<div class="modal fade" id="modal-container-del-position" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="/position/del" method="POST" role="form">
            {{csrf_field()}}
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        Are you sure want to delete the position?
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" value="" name="id">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        No
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Yes
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>