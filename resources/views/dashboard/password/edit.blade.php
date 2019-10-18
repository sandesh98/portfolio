@extends('dashboard.layout.master')

@section('main')
    <div class="my-3">
        <h1 class="h3 text-gray-800">Wachtwoord</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Wachtwoord wijzigen</h6>
        </div>

        <form action="{{ route('dashboard.password.update') }}" method="POST">

            @csrf

            @method('PUT')

            <div class="card-body">
                <div class="input-group">
                    <input type="password" name="password" class="form-control bg-light border-0" placeholder="Voer nieuw wachtwoord in...">
                </div>

                <button type="submit" class="btn btn-success btn-icon-split mt-3">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Opslaan</span>
                </button>
            </div>
        </form>
    </div>
@endsection

