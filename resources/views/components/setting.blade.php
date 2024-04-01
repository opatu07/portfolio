@props(['heading'])

<div class="max-w-40">
    <x-dropdown>

    <x-slot name="trigger">
        <button class="text-lg font-bold mb-5 pb-2 border-b max-w-40">
            {{ $heading }}
        </button>
    </x-slot>

    <x-dropdown-item
        href="/admin/posts"
        :active="request()->is('admin/posts')"
    >
        全ての投稿
    </x-dropdown-item>

    <x-dropdown-item
        href="/admin/posts/create"
        :active="request()->is('admin/posts/create')"
    >
        新しい記事を作る
    </x-dropdown-item>

    </x-dropdown>
</div>

<section class="py-8 max-w-4xl mx-auto">

    <div class="flex">
        <main class="flex-1">
            <x-panel>
                {{ $slot }}
            </x-panel>
        </main>
    </div>
    
</section>
