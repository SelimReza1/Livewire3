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
</div>
