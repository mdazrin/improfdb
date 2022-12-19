<x-layout>
    <x-slot name="content">
        <div class="container">
            <form method="POST" action="{{ route('personalInfo.update',$personal)}}" >
                @csrf
                @method('patch')
                <a>{{$personal->ic}}</a>

                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                @endif
            </form>
        </div>
    </x-slot>
</x-layout>
