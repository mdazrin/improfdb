<x-layout>
    <x-slot name="content">
        <form action="{{ route('users.update',['user'=>$user->id]) }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Image:</label>
                <img src="">
                <input type="file" name="avatar" class="form-control-file">
            </div>

            <div class="d-grid">
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </x-slot>
</x-layout>
