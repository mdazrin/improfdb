<x-layout>
    <x-slot name="content">
        <div class="px-4 py-5 my-5 text-center">
            <img class="img-fluid img-thumbnail" src="{{ asset('storage/images/Improf.png')}}" alt="Improf Logo" width="300" height="250">
            <h1 class="display-5 fw-bold">Improf Database System</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">
                    This site is the database system for Improf. Please login to enter
                </p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="{{ route('login') }}">
                        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">
                            Login
                        </button>

                    </a>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>
