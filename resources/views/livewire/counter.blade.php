<div>
    <h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>
    <h1>{{ $count }}</h1>
    <div x-data="{ count: 0 }">
        <button x-on:click="count++">Increment</button>

        <span x-text="count"></span>
    </div>

    <button wire:click="increment">Plus</button>
    <button wire:click="decrement">Minus</button>
</div>
