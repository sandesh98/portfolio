@extends('dashboard.layout.master')

@section('main')
    <div class="d-flex justify-content-between align-content-center my-3">
        <h1 class="h3 text-gray-800">Navigatie</h1>

        <button type="submit" class="btn btn-success btn-icon-split mt-3 -mt">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
            <span class="text">Opslaan</span>
        </button>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Titel</h6>
        </div>
        <form action="{{ route('navbar.update') }}" method="POST" id="form">

            @csrf

            @method('PUT')

            <div class="card-body">
                <div class="input-group">
                    <input type="text" name="title" class="form-control bg-light border-0" placeholder="Sandesh" value="{{ $text->title }}">
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

