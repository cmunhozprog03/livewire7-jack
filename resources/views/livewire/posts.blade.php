<div>
    <label>Title</label>
    <input wire:model='title' type="text" class="form-control">
    <br>
    <label>Content</label>
    <textarea wire:model='content' class="form-control"></textarea>
    <br>
    <button wire:click='save' class="btn btn-primary">Save</button>
</div>
