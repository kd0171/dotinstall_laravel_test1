{{-- slotに入れたい内容はx-layout内に書いていく --}}
<x-layout>
    <x-slot name="title">
        Add New Post - My BBS
    </x-slot>

    <div class="back-link">
        {{-- &laquo; <a href="/">Back</a> --}}
        &laquo; <a href="{{ route('posts.index') }}">Back</a>
    </div>

    <h1>Add New Post</h1>

    <form method="post" action="{{ route('posts.store') }}">
        @csrf
        <div class="form-group">
            <label>
                Title
                <input type="text" name="title" value="{{ old('title') }}">
                {{-- oldは入力された内容が残る --}}
            </label>
            {{-- titleにエラーがあった場合の処理 --}}
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>
                Body
                <textarea name="body">{{ old('body') }}</textarea>
            </label>
            {{-- bodyにエラーがあった場合の処理 --}}
            @error('body')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-button">
            <button>Add</button>
        </div>
    </form>
</x-layout>
