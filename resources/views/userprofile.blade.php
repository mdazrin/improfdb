<x-layout>
    <x-slot name="content">
        <main class="form-signin w-30 m-auto container-sm">
            @foreach($users as $user)
            <form method="post" action="/userprofile">
                <h1 class="h3 mb-3 fw-normal">User Profile</h1>
                @csrf
                <div class="form-floating">
                    <input type="text" name="firstname" class="form-control" id="firstname" value={{ $user->firstname }}>
                    <label for="floatingInput">Firstname</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="lastname" value={{ $user->lastname }} name="lastname">
                    <label for="floatingInput">Lastname</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="ppi" value={{ $user->ppi }} name="ppi">
                    <label for="floatingInput">TOC/PPI</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="batch" value={{ $user->batch }} name="batch">
                    <label for="floatingInput">Batch</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Update</button>
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                @endif
            </form>
            @endforeach
        </main>
    </x-slot>
</x-layout>
