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
                <dd class="col-sm-9">{{ $notification->email }}</dd>

                <dt class="col-sm-3 text-truncate">Bericht</dt>
                <dd class="col-sm-9">{{ $notification->message }}</dd>
            </dl>
        </div>
    </div>
@endsection