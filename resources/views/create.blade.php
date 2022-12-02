<x-layout>
    <x-slot name="content">
        <form action="{{ route('basic.store') }}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="mb-3">
                <label>FirstName</label>
                <input type="text" name="firstname" class="form-control">
            </div>
            <div class="mb-3">
                <label>Lastname</label>
                <input type="text" name="lastname" class="form-control">
            </div>
            <div class="mb-3">
                <label>PPI</label>
                <input type="text" name="ppi" class="form-control">
            </div>
            <div class="mb-3">
                <label>Batch</label>
                <input type="text" name="batch" class="form-control">
            </div>

            <div class="mb-3">
                <label>Image:</label>
                <input type="file" name="avatar" class="form-control">
            </div>

            <div class="d-grid">
                <button class="btn btn-primary">Store</button>
            </div>
        </form>
    </x-slot>
</x-layout>
