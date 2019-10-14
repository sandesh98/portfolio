@extends('dashboard.layout.master')

@section('main')
    <div class="my-3">
        <h1 class="h3 text-gray-800">Profiel</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Introductie text</h6>
        </div>
        <form action="{{ route('profile.update') }}" method="POST">

            @csrf

            @method('PUT')

            <div class="card-body">
                <div class="input-group">
                    <textarea class="about_me" name="about_me">{{ $text->about_me }}</textarea>
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

@push('script')
    <script>
        tinymce.init({
            selector:'textarea.about_me',
            width: 900,
            height: 450
        });
    </script>
@endpush
