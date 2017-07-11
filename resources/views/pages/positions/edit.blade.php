<div class="modal fade" id="modal-container-edit-position" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="/position/edit" method="POST" role="form">
            {{csrf_field()}}
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        Editing position
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">
                            Position name
                        </label>
                        <input type="text" class="form-control" id="name" name="name"/>
                    </div>
                    <div class="form-group">
                        <input type="hidden" value="" name="id">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>