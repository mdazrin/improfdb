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
                    <th scope="col">@sortablelink('employer')</th>
                    <th scope="col">@sortablelink('field_of_work')</th>
                    <th scope="col">@sortablelink('occupation')</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->employer }}</td>
                        <td>{{ $user->field_of_work }}</td>
                        <td>{{ $user->occupation }}</td>


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
