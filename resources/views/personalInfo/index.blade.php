<x-layout>
    <x-slot name="content">
        <form method="POST" action="{{ route('personalInfo.store') }}">
            @csrf
            <div class="mb-3 col-sm-3">
                <label for="ic" class="form-label">IC</label>
                <input type="text" name="ic" class="form-control" id="ic">
            </div>
            <button>Create</button>
        </form>

            <div>{{$personals->user->firstname}}</div>

    </x-slot>
</x-layout>
