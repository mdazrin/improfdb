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
                <th scope="col">Picture</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">1</th>
                <td>{{ $user->firstname }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->ppi }}</td>
                <td>{{ $user->batch }}</td>
                <td>
                    <img class="img-thumbnail img-fluid container-sm" style="width:300px;height:300px;" src="{{$user->getFirstMediaUrl()}}"/>
                </td>

            </tr>
            @endforeach
            </tbody>
        </table>
         <div class="d-flex justify-content-center">
           {!! $users->links() !!}
        </div>
    </x-slot>
</x-layout>
