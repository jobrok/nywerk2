@props(['show' => false, 'title' => '', 'maxWidth' => '2xl'])

@php
$maxWidthClass = match($maxWidth) {
    'sm' => 'max-w-sm',
    'md' => 'max-w-md', 
    'lg' => 'max-w-lg',
    'xl' => 'max-w-xl',
    '2xl' => 'max-w-2xl',
    '3xl' => 'max-w-3xl',
    '4xl' => 'max-w-4xl',
    '5xl' => 'max-w-5xl',
    '6xl' => 'max-w-6xl',
    '7xl' => 'max-w-7xl',
    default => 'max-w-2xl'
};
@endphp

<div x-show="{{ $show }}" x-transition.opacity class="fixed inset-0 z-50 flex items-center justify-center p-6"
     aria-modal="true" role="dialog" @keydown.escape.window="{{ $show }} = false">
    <div class="absolute inset-0 bg-black/60" @click="{{ $show }} = false"></div>
    <div x-show="{{ $show }}" x-transition.scale.opacity
         class="relative w-full {{ $maxWidthClass }} bg-white text-black border-[3px] border-black">
        <div class="flex items-start justify-between p-5 border-b border-black/20">
            <h3 class="text-2xl font-semibold" x-text="{{ $title }} || 'Modal'">Modal</h3>
            <button
                class="ml-4 inline-flex items-center justify-center border-[3px] border-black px-3 py-1 text-sm bg-white hover:bg-black hover:text-white transition-colors"
                @click="{{ $show }} = false" aria-label="Close">
                Close
            </button>
        </div>
        <div class="p-6 space-y-4">
            {{ $slot }}
        </div>
    </div>
</div>