<x-layout>
    <x-slot name="content">
        <div class="container">


            <img class="img-thumbnail img-fluid container-sm" alt="User avatar" style="width:300px;height:300px;" src="{{ (asset($user->image->url))}}"/>
            <h1>{{$user->firstname}}</h1>
            <h1>{{$user->lastname}}</h1>
            <h1>{{$user->ppi}}</h1>
            <h1>{{$user->batch}}</h1>
        </div>
    </x-slot>
</x-layout>
