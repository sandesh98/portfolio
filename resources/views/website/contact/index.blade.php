@extends('website.layout.master')

@section('main')
    <div id="inner">
        <section class="behind-header desktop">
            <div style="background-image: url({{ asset('website/images/contact/01.jpg') }});" class="bg faded"></div>
            <div class="vbottom desktop fh">
                <div class="container">
                    <div class="grid mb-xl">
                        <div class="col-4">
                            <h3 class="mt-0">Laat een bericht achter</h3>
                        </div>
                        <div class="col-2"><a href="mailto:sandeshb981@gmail.com">sandeshb981@gmail.com</a></div>
                        <div class="col-2"><span class="label label-white">06 81342775</span></div>
                    </div>
                    <form action="{{ route('contact.store') }}" method="post" id="form" class="vbottom-desktop grid default-form no-spacing lined-form mb-xl">
                        @csrf
                        <div class="col-3">
                            <input required type="text" placeholder="Naam" name="name" id="name" class="form-control">
                        </div>
                        <div class="col-3">
                            <input required type="email" placeholder="Email" name="email" id="email" class="form-control">
                        </div>
                        <div class="col-3">
                            <textarea required placeholder="Bericht" name="message" id="message" class="small form-control"></textarea>
                        </div>
                        <div class="col-3">
                            <input id="send" type="submit" value="Verzenden" class="btn btn-primary">
                        </div>
                    </form>

                    <div class="text-center">
                        <h3 id="response"></h3>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function () {

            $('#send').click(function (e) {
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "{{ route('contact.store') }}",
                    dataType: "json",
                    data: {
                        _token: "{{ csrf_token() }}",
                        name: $('#name').val(),
                        email: $('#email').val(),
                        message: $('#message').val(),
                    },
                    success: function (data) {
                        $('#response').html(data);

                        $('#form')[0].reset();
                    },
                    error: function () {
                        $('#response').html('Vul de velden correct in');
                    }
                });
            });
        });
    </script>
@endpush
