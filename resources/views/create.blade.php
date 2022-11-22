<x-layout>
    <x-slot name="content">
            <form method="post" action="/login">
                @csrf
                <input type="text" name="name" id="name" value="{{old('name')}}">
                <input type="password" name="password" id="password">
                <button type="submit">Submit</button>
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                @endif

            </form>
    </x-slot>
</x-layout>
