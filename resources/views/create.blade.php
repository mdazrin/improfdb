<x-layout>
    <x-slot name="content">
        <form action="{{ route('basic.store') }}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3">
                <label>Image:</label>
                <input type="file" name="avatar" class="form-control-file">
            </div>

            <div class="d-grid">
                <button class="btn btn-primary">Store</button>
            </div>
        </form>
    </x-slot>
</x-layout>
