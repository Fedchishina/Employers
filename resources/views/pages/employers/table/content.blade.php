<div class="content">
    <div class="btn-group btn-add">
        <a class="btn btn-default" id="modal-add-department" href="#modal-container-add-employer" role="button" class="btn" data-toggle="modal">
            Add
        </a>
    </div>
    <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
            <input type="text" name="searchVal" class="form-control" value="{{ Request::get('searchVal') ? Request::get('searchVal'): '' }}"/>
        </div>
        <button type="submit" class="btn btn-default">
            Submit
        </button>
    </form>

    <table class="table table-bordered table-employers">
        <thead>
        <tr>
            <th data-order="full_name">
                Full name
                <span class="btn-sort btn-asc"></span>
                <span class="btn-sort btn-desc"></span>
            </th>
            <th data-order="date_beg_work">
                Begin date of work
                <span class="btn-sort btn-asc"></span>
                <span class="btn-sort btn-desc"></span>
            </th>
            <th data-order="positions.name">
                Position
                <span class="btn-sort btn-asc"></span>
                <span class="btn-sort btn-desc"></span>
            </th>
            <th data-order="employers.full_name">
                Boss full name
                <span class="btn-sort btn-asc"></span>
                <span class="btn-sort btn-desc"></span>
            </th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @include('pages.employers.table.tbody')
        </tbody>
    </table>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/treeview.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</div>