@extends('dashboard.layout.master')

@section('title', 'Notificaties')

@section('main')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Alle notificaties</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>naam</th>
                        <th>Bericht</th>
                        <th>Ontvangen</th>
                        <th>Bekijken</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Naam</th>
                        <th>Bericht</th>
                        <th>Ontvangen</th>
                        <th>Bekijken</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($notifications ?? '' as $notification)
                    <tr>
                        <td>{{ $notification->id }}</td>
                        <td>{{ $notification->name }}</td>
                        <td>{{ Str::limit($notification->message, 20) }}</td>
                        <td>{{ $notification->created_at->toFormattedDateString() }}</td>
                        <td><a href="{{ route('notification.show', $notification->id) }}"><i class="fa fa-arrow-alt-circle-right"></i></a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endpush