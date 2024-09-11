<div class="overflow-hidden max-h-full">

    <div class="flex items-center justify-between px-4 py-3 border-b border-gray-200">
        @if(isset($title))
        <h3 class="text-lg leading-6 font-medium text-neutral-800">
            {{ $title }}
        </h3>
        @endif

        <button type="button"
            wire:click="$dispatch('closeModal')"
            class="flex items-center justify-center text-sm font-semibold text-gray-800 border border-transparent rounded-full size-7 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
            <span class="sr-only">Close</span>
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
            </svg>
        </button>
    </div>

    <div class="bg-white p-4 overflow-y-auto max-h-[85vh]" >
        {{ $content }}
    </div>

</div>