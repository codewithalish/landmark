<div>
    @if($liked)

        <button wire:click="dislike"> dislike</button>
    @else
        <button wire:click="like"> like</button>
    @endif
</div>
