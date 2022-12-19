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
                    <th scope="col">@sortablelink('current_address')</th>
                    <th scope="col">@sortablelink('zon')</th>
                    <th scope="col">@sortablelink('state')</th>
                    <th scope="col">@sortablelink('district')</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($locations as $location)
                    <tr>
                        <td>{{ $location->current_address }}</td>
                        <td>{{ $location->zon }}</td>
                        <td>{{ $location->state }}</td>
                        <td>{{ $location->district }}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>

            <ul class="pagination">
                {!! $locations->links('pagination::bootstrap-5') !!}
            </ul>

        </div>
    </x-slot>
</x-layout>
