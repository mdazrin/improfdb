<x-layout>
    <x-slot name="content">
        <form action="{{ route('users.store')}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="mb-3">
                <h1>header</h1>
                <input type="file" name="avatar" class="form-control-file">
            </div>

            <div class="d-grid">
                <button class="btn btn-primary">Store</button>
            </div>
        </form>
    </x-slot>
</x-layout>
