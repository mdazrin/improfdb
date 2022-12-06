<x-layout>
    <x-slot name="content">
        <div class="container-lg">
            <form method="get">
                <div class="container">
                    <label>Search Bar</label>
                    <input type="text" name="check-user">
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary btn-sm w-25">Update</button>
                </div>
            </form>


                <table class="table table-bordered">
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
                            <td><img class="img-thumbnail img-fluid" src="{{ (asset($user->image->url)) }}" width="300" height="300"/></td>

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
