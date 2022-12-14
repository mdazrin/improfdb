<x-layout>
    <x-slot name="content">
        <div class="container-lg">
            <form method="get">
                <div class="d-flex flex-row">
                    <div class="p-2">
                        <label>Search Bar</label>
                        <input type="text" name="check-user">
                    </div>
                    <div class="p-2">
                        <button class="btn btn-primary btn-sm">Search</button>
                    </div>
                </div>
            </form>


                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">@sortablelink('firstname')</th>
                        <th scope="col">@sortablelink('lastname')</th>
                        <th scope="col">@sortablelink('ppi')</th>
                        <th scope="col">@sortablelink('batch')</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->firstname }}</td>
                            <td>{{ $user->lastname }}</td>
                            <td>{{ $user->ppi }}</td>
                            <td>{{ $user->batch }}</td>
                            <td><img class="img-thumbnail avatar" src="{{ (asset($user->image->url)) }}"/></td>
                            <td><form action="{{ route('users.store')}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <h1>header</h1>
                                        <input type="file" name="avatar" class="form-control-file">
                                    </div>

                                    <div class="d-grid">
                                        <button class="btn btn-primary">Store</button>
                                    </div>
                                </form></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>

            <ul class="pagination">
                {!! $users->links('pagination::bootstrap-5') !!}
            </ul>

        </div>
    </x-slot>
</x-layout>
