<div>
    <form wire:submit='submit'>
        <div>
            <label for="count">Bird Count</label>
        <input wire:model='count' type="number" />
        </div>
<br>
        <div>
            <label for="note">Note </label>
        <textarea wire:model='note'></textarea>
        </div>
        <br>
        <button>Add a new bird entry</button>
    </form>

    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
    @endif

    <h1> All Bird Entries</h1>

    @foreach ($entries as $entry)
        <div>{{ $entry->count}}</div>
        <div>{{ $entry->note}}</div>
    @endforeach
</div>
