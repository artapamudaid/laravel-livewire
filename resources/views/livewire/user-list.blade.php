<div>
    <h1>User List</h1>

    <input type="search" wire:model.defer="search" placeholder="Search User ...">
    <button wire:click="searchUser">Search</button>

    <p>Filter {{ $search }}</p>

    @foreach ($users as $user)
    <p>{{ $user->name }}</p>
    @endforeach
</div>