<div>

    <form wire:submit='add'>
        <input type="text" wire:model.live='todo'>
        <button type="submit" class="btn btn-sm btn-primary">Add</button>
    </form>


    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>

</div>
