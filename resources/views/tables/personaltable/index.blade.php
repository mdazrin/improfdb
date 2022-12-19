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
                    <th scope="col">@sortablelink('mailing_address')</th>
                    <th scope="col">@sortablelink('date_of_birth')</th>
                    <th scope="col">@sortablelink('tel_no')</th>
                    <th scope="col">@sortablelink('bank_account')</th>
                    <th scope="col">@sortablelink('bank_name')</th>
                    <th scope="col">@sortablelink('sex')</th>
                    <th scope="col">@sortablelink('birthday_month')</th>
                    <th scope="col">@sortablelink('facebook')</th>
                    <th scope="col">@sortablelink('twitter')</th>
                    <th scope="col">@sortablelink('instagram')</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->mailing_address }}</td>
                        <td>{{ $user->date_of_birth }}</td>
                        <td>{{ $user->tel_no }}</td>
                        <td>{{ $user->bank_account }}</td>
                        <td>{{ $user->bank_name }}</td>
                        <td>{{ $user->sex }}</td>
                        <td>{{ $user->birthday_month }}</td>
                        <td>{{ $user->facebook }}</td>
                        <td>{{ $user->twitter }}</td>
                        <td>{{ $user->instagram }}</td>

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
