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
                    <th scope="col">@sortablelink('course')</th>
                    <th scope="col">@sortablelink('intake')</th>
                    <th scope="col">@sortablelink('grade_year')</th>
                    <th scope="col">@sortablelink('academic_level')</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->course }}</td>
                        <td>{{ $user->intake }}</td>
                        <td>{{ $user->grade_year }}</td>
                        <td>{{ $user->academic_level }}</td>
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
