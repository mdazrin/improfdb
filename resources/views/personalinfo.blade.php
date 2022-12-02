<x-layout>
    <x-slot name="content">
        <div>
            Hello, welcome to dashboard, click on view link to view table
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Mailing Address</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Tel No</th>
                <th scope="col">Bank Account</th>
                <th scope="col">Bank Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Birthday Month</th>
                <th scope="col">Facebook</th>
                <th scope="col">Twitter</th>
                <th scope="col">Instagram</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">1</th>
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
        <div class="d-flex justify-content-center">
            {!! $users->links() !!}
        </div>
    </x-slot>
</x-layout>
