<div>
    <form id="form" class="vbottom-desktop grid default-form no-spacing lined-form mb-xl">
        @csrf
        <div class="col-3">
            <input wire:model.lazy="name" type="text" placeholder="Naam" name="name" id="name" class="form-control">
            @error('name') <p class="show-error">{{ $message }}</p> @enderror

        </div>
        <div class="col-3">
            <input wire:model.lazy="email" type="email" placeholder="Email" name="email" id="email" class="form-control">
            @error('email') <p class="show-error">{{ $message }}</p> @enderror
        </div>
        <div class="col-3">
            <textarea wire:model.lazy="message" placeholder="Bericht" name="message" id="message" class="small form-control"></textarea>
            @error('message') <p class="show-error">{{ $message }}</p> @enderror
            <input wire:model="info" placeholder="Info" name="info" class="d-none">
        </div>
        <div class="col-3">
            <input wire:click="send" id="send" type="submit" value="Verzenden" class="btn btn-primary">
        </div>
    </form>

    @if(session()->has('success'))
        <div class="text-center">
            <h3 id="response">{{ session('success') }}</h3>
        </div>
    @endif

</div>
