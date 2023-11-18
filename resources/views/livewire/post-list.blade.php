<div id="posts" class="px-3 lg:px-7 py-6">
    <div dir="ltr" class="flex justify-between items-center border-b border-gray-100">
        <div class="text-gray-500">
            @if ($this->activeCategory() || $search)
                <button class="text-gray-500 text-base ml-2" wire:click="clearFilters()">X</button>
            @endif
            @if ($search)
                بحث عن....<label class="text-emerald-700 font-bold text-xl">{{ $search }}</label>
            @endif
            @if ($this->activeCategory())
                <x-badge :textColor="$this->activeCategory->text_color" :bgColor="$this->activeCategory->bg_color">
                    {{ $this->activeCategory->title }}
                </x-badge>
            @endif
        </div>
        <div class="flex items-center space-x-4 font-light">
            <x-checkbox wire:model.live='popular' />
            <x-label>متداول</x-label>
            <button class="{{ $sort === 'asc' ? 'text-gray-900 border-b border-gray-700' : 'text-gray-500' }} py-4"
                wire:click="setSort('asc')">
                الأقدم
            </button>
            <button
                class="{{ $sort === 'desc' ? 'text-gray-900 border-b border-gray-700' : 'text-gray-500' }}  py-4 ml-3"
                wire:click="setSort('desc')">الأحدث</button>
        </div>
    </div>
    <div class="py-4">
        @foreach ($this->posts as $post)
            <x-posts.post-item wire:key="{{$post->id}}" :post="$post" />
        @endforeach
    </div>
    <div class="my-3">
        {{ $this->posts->onEachSide(1)->links() }}
    </div>
</div>
