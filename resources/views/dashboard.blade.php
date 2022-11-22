<x-layout>
    <x-slot name="content">
        <div>
            Hello, welcome to dashboard, click on view link to view table
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">TOC/PPI</th>
                <th scope="col">Batch</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">1</th>
                <td>{{ $user->firstname }}</td>
                <td>{{ $user->firstname }}</td>
                <td>{{ $user->ppi }}</td>
                <td>{{ $user->batch }}</td>

            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $users->links() !!}
        </div>
    </x-slot>
</x-layout>
