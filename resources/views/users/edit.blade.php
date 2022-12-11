<x-layout>
    <x-slot name="content">
        <div class="container">
            <form action="{{ route('users.update',['user'=>$user->id]) }}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3 col-sm-3">
                    <img src="{{ (asset($user->image->url))}}" class="img-thumbnail avatar">
                    <input type="file" name="avatar" class="form-control" id="formFile">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="firstname" class="form-label">Firstname</label>
                    <input type="text" name="firstname" class="form-control" id="firstname" value="{{old('firstname',optional($user ?? null)->firstname) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="lastname" class="form-label">Lastname</label>
                    <input type="text" name="lastname" class="form-control" id="lastname" value="{{old('lastname',optional($user ?? null)->lastname) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="ppi" class="form-label">PPI/TOC</label>
                    <input type="text" name="ppi" class="form-control" id="ppi" value="{{old('ppi',optional($user ?? null)->ppi) }}">
                </div>
                <div class="mb-3 col-sm-3">
                    <label for="batch" class="form-label">Batch</label>
                    <input type="text" name="batch" class="form-control" id="batch" value="{{old('batch',optional($user ?? null)->batch) }}">
                </div>

                <div class="d-grid col-sm-3">
                    <button class="btn btn-primary">Update</button>
                </div>
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                @endif
            </form>
        </div>
    </x-slot>
</x-layout>
