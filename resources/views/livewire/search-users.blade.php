<div>
    <input wire:model="search" type="text" placeholder="Search users..."/>

    <button wire:click="$emit('postAdded')">click</button>


    <h1>{{$result}}</h1>

    <ul>
        @foreach($users as $user)
            <li>{{ $user->id }}</li>
        @endforeach
    </ul>
</div>
