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
                    <th scope="col">@sortablelink('marriage_status')</th>
                    <th scope="col">@sortablelink('spouse_name')</th>
                    <th scope="col">Picture</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->marriage_status }}</td>
                        <td>{{ $user->spouse_name }}</td>
                        <td><img class="img-thumbnail avatar" src="{{ (asset($user->image->url)) }}"/></td>

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
