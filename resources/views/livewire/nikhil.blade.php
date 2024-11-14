<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="upload">
        <input type="file" wire:model="file">
        @error('file') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">Upload</button>
    </form>

    @if ($file)
        <p>File preview:</p>
        <img src="{{ $file->temporaryUrl() }}" width="200">
    @endif
</div>