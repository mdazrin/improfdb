<x-layout>
    <x-slot name="content">
            <div class="d-flex justify-content-center flex-column min-vh-100 align-items-center">
                <form class="d-flex justify-content-center flex-column border rounded" method="post" action={{ route('login') }}>
                    @csrf
                    <div class="mx-auto">
                        <img class="img-fluid img-thumbnail" src="{{ asset('storage/images/Improf.png')}}" alt="Improf Logo" width="300" height="300">
                    </div>
                    <div class="m-1 mx-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control  align-items-center" id="name" name="name">
                    </div>
                    <div class="m-1 mx-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control  align-items-center" id="password" name="password">
                    </div>
                    <div class="m-1 mx-3">
                        <button class="btn btn-lg btn-primary" type="submit">Sign in</button>
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
