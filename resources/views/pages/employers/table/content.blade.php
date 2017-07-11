<div class="content">
    <div class="btn-group">
        <a class="btn btn-default" id="modal-add-department" href="#modal-container-add-employer" role="button" class="btn" data-toggle="modal">
            Add
        </a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Full name</th>
            <th>Begin date of work</th>
            <th>Position</th>
            <th>Boss full name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employers as $employer)
            <tr>
                <td>{{ $employer->full_name }}</td>
                <td>{{ $employer->date_beg_work }}</td>
                <td></td>
                <td></td>
                <td>
                    <a class="btn btn-default modal-edit-employer" href="#modal-container-edit-employer" role="button" class="btn" data-toggle="modal" data-employer="{{ $employer }}">
                        Edit
                    </a>
                    <a class="btn btn-default modal-del-employer" href="#modal-container-del-employer" role="button" class="btn" data-toggle="modal" data-employer="{{ $employer }}">
                        Del
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>