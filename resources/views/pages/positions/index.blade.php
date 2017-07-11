@extends('layouts.app')

@section('content')
    <div class="btn-group">
        <a class="btn btn-default" id="modal-add-department" href="#modal-container-add-position" role="button" class="btn" data-toggle="modal">
            Add
        </a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Position name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($positions as $position)
            <tr>
                <td>{{ $position->name }}</td>
                <td>
                    <a class="btn btn-default modal-edit-position" href="#modal-container-edit-position" role="button" class="btn" data-toggle="modal" data-id="{{ $position->id }}" data-name="{{ $position->name }}">
                        Edit
                    </a>
                    <a class="btn btn-default modal-del-position" href="#modal-container-del-position" role="button" class="btn" data-toggle="modal" data-id="{{ $position->id }}" data-name="{{ $position->name }}">
                        Del
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @include('pages.positions.add')
    @include('pages.positions.edit')
    @include('pages.positions.del')
@endsection