<x-layout>
    <x-slot name="content">
        <main class="form-signin w-30 m-auto container-sm">
            @foreach($users as $user)
            <form method="get" action={{ route('user-profile') }}>
                <h1 class="h3 mb-3 fw-normal">User Profile</h1>
                @csrf


                <input type="text" name="search" class="form-control" value="{{request('search')}}">


                <!--Improf_Profiles -->
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



                <!--Profile_Infos -->
                <div class="form-floating">
                    <input type="text" class="form-control" id="batch" value={{ $user->ic }} name="batch">
                    <label for="floatingInput">IC</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="batch" value={{ $user->mailing_address }} name="batch">
                    <label for="floatingInput">Mailing Address</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="batch" value={{ $user->date_of_birth }} name="batch">
                    <label for="floatingInput">Date Of Birth</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="batch" value={{ $user->tel_no }} name="batch">
                    <label for="floatingInput">Tel No</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="batch" value={{ $user->bank_account }} name="batch">
                    <label for="floatingInput">Bank Account</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="batch" value={{ $user->bank_name }} name="batch">
                    <label for="floatingInput">Bank Name</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="batch" value={{ $user->sex }} name="batch">
                    <label for="floatingInput">Sex</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="batch" value={{ $user->birthday_month }} name="batch">
                    <label for="floatingInput">Birthday Month</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="batch" value={{ $user->facebook }} name="batch">
                    <label for="floatingInput">Facebook</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="batch" value={{ $user->twitter }} name="batch">
                    <label for="floatingInput">Twitter</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="batch" value={{ $user->instagram }} name="batch">
                    <label for="floatingInput">Instagram</label>
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
