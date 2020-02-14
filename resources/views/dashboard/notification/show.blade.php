@extends('dashboard.layout.master')

@section('title', 'Notificatie ' . $notification->id . ' bekijken')

@section('main')
    <div class="card shadow mb-4">
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">Nummer</dt>
                <dd class="col-sm-9">{{ $notification->id }}</dd>

                <dt class="col-sm-3">Ontvangen op</dt>
                <dd class="col-sm-9">{{ \Carbon\Carbon::parse($notification->created_at)->format('d-m-Y H:m') }}</dd>

                <dt class="col-sm-3">Verstuurd door</dt>
                <dd class="col-sm-9">{{ $notification->name }}</dd>

                <dt class="col-sm-3 text-truncate">Email</dt>
                <dd class="col-sm-9"><a href="mailto:{{ $notification->email }}">{{ $notification->email }}</a></dd>

                <dt class="col-sm-3 text-truncate">Bericht</dt>
                <dd class="col-sm-9">{{ $notification->message }}</dd>
            </dl>
        </div>
        <div class="card-footer">
            <a href="{{ route('notification.index') }}" type="button" class="btn btn-primary">Terug</a>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">
                Verwijder
            </button>
        </div>
    </div>

    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bericht verwijderen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Weet je zeker dat je dit bericht wil verwijderen?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Nee</button>
                    <form action="{{ route('notification.delete', $notification) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Verwijder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
