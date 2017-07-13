@foreach($employers as $employer)
    <tr>
        <td>{{ $employer->full_name }}</td>
        <td>{{ $employer->date_beg_work }}</td>
        <td>{{ $employer->position->name }}</td>
        <td>{{ ($employer->parent)? $employer->parent->full_name : ''}}</td>
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
