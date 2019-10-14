@extends('dashboard.layout.master')

@section('main')
    <div class="my-3">
        <h1 class="h3 text-gray-800">Navigatie</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Titel</h6>
        </div>
        <form action="{{ route('navbar.update') }}" method="POST">

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

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Navigatie items</h6>
        </div>
        <form action="{{ route('navbar.update') }}" method="POST">

            @csrf

            @method('PUT')

            <div class="card-body">
                <div class="input-group">
                    <input type="text" name="navbar_item1" class="form-control bg-light border-0" placeholder="Projecten" value="{{ $text->navbar_item1 }}">
                </div>

                <div class="input-group py-3">
                    <input type="text" name="navbar_item2" class="form-control bg-light border-0" placeholder="Profiel" value="{{ $text->navbar_item2 }}">
                </div>

                <div class="input-group">
                    <input type="text" name="navbar_item3" class="form-control bg-light border-0" placeholder="Contact" value="{{ $text->navbar_item3 }}">
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

