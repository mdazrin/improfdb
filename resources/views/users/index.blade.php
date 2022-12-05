<x-layout>
    <x-slot name="content">
        <div>
            <img class="img-thumbnail img-fluid container-sm" alt="User avatar" style="width:300px;height:300px;" src="{{ (asset($user->image->url))}}"/>
            <h1>{{$user->image->url}}</h1>
        </div>
    </x-slot>
</x-layout>
