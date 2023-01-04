@extends('layouts.main')
@section('title', 'Create Event')
@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">

        <h1>Create Event</h1>
        <form action="/events" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Evento:</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Event Name">
            </div>
            <div class="form-group">
                <label for="title">City:</label>
                <input name="city" type="text" class="form-control" id="city" placeholder="City">
            </div>
            <div class="form-group">
                <label for="title">Private:</label>
                <select name="private" type="text" class="form-control" id="private" placeholder="private">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Description:</label>
                <textarea name="description" type="text" class="form-control" id="description" placeholder="Description"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Create Event">
        </form>
    </div>
@endsection
