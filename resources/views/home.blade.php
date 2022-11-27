<x-layout>
    <x-slot name="content">
        <main class="form-signin w-30 m-auto container-sm">
            <form method="post" action="/login">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="name" placeholder="name@example.com">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                @endif
            </form>
        </main>
    </x-slot>
</x-layout>
