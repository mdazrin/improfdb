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
                    <th scope="col">@sortablelink('pas_no')</th>
                    <th scope="col">@sortablelink('involvement')</th>
                    <th scope="col">@sortablelink('cawangan')</th>
                    <th scope="col">@sortablelink('kawasan')</th>
                    <th scope="col">@sortablelink('negeri')</th>
                    <th scope="col">@sortablelink('interest_one')</th>
                    <th scope="col">@sortablelink('interest_two')</th>
                    <th scope="col">@sortablelink('interest_three')</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->pas_no }}</td>
                        <td>{{ $user->involvement }}</td>
                        <td>{{ $user->cawangan }}</td>
                        <td>{{ $user->kawasan }}</td>
                        <td>{{ $user->negeri }}</td>
                        <td>{{ $user->interest_one }}</td>
                        <td>{{ $user->interest_two }}</td>
                        <td>{{ $user->interest_three }}</td>

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
