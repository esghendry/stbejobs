{{-- <form id="lead-form" method="POST" action="{{ route('lead') }}" enctype="multipart/form-data"> --}}
    <form id="lead-form" wire:submit="submit">
        @csrf

        <div class="py-2 pb-4 text-xs font-medium text-gray-900">
            <div class="w-full text-base font-bold text-gray-900">
                {{ $lang['title'] }}
            </div>
            {{ $lang['subtitle'] }}
        </div>
        <div class="grid grid-cols-4 gap-2 pb-6">
            <input type="hidden" name="source" required="true" value="{{ $page->slug }}"
                class="hover:bg-blue-50 block py-2.5 px-1 w-full text-sm text-gray-900 border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 hover:border-blue-300 focus:border-blue-600 focus:bg-white peer"
                placeholder=" ">

            <div class="col-span-2">
                <div class="relative z-0 inline-block w-full mb-2 group">
                    <input type="text" wire:model="firstName" name="first_name" required="true" value=""
                        class="hover:bg-blue-50 block py-2.5 px-1 w-full text-sm text-gray-900 border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 hover:border-blue-300 focus:border-blue-600 focus:bg-white peer"
                        placeholder=" ">
                    <label
                        class="pointer-events-none peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 peer-placeholder-shown:left-2 z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        {{ $lang['labels']['first_name'] }}
                    </label>
                    <div>
                        @error('first_name') <span class="error">{{ $message }}</span> @enderror 
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <div class="relative z-0 inline-block w-full mb-2 group">
                    <input type="text" wire:model="lastName" name="last_name" required="true" value=""
                        class="hover:bg-blue-50 block py-2.5 px-1 w-full text-sm text-gray-900 border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 hover:border-blue-300 focus:border-blue-600 focus:bg-white peer"
                        placeholder=" ">
                    <label
                        class="pointer-events-none peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 peer-placeholder-shown:left-2 z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        {{ $lang['labels']['last_name'] }}
                    </label>
                    <div>
                        @error('last_name') <span class="error">{{ $message }}</span> @enderror 
                    </div>
                </div>
            </div>


            <div class="col-span-2">
                <div class="relative z-0 inline-block w-full mb-2 group">
                    <input type="email" wire:model="email" name="email" required="true" value=""
                        class="hover:bg-blue-50 block py-2.5 px-1 w-full text-sm text-gray-900 border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 hover:border-blue-300 focus:border-blue-600 focus:bg-white peer"
                        placeholder=" ">
                    <label
                        class="pointer-events-none peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 peer-placeholder-shown:left-2 z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        {{ $lang['labels']['email'] }}
                    </label>
                    <div>
                        @error('email') <span class="error">{{ $message }}</span> @enderror 
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <div class="relative z-0 inline-block w-full mb-2 group">
                    <input type="tel" wire:model="phone" name="phone" value=""
                        class="hover:bg-blue-50 block py-2.5 px-1 w-full text-sm text-gray-900 border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 hover:border-blue-300 focus:border-blue-600 focus:bg-white peer"
                        placeholder=" ">
                    <label
                        class="pointer-events-none peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 peer-placeholder-shown:left-2 z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        {{ $lang['labels']['phone'] }}
                    </label>
                    <div>
                        @error('phone') <span class="error">{{ $message }}</span> @enderror 
                    </div>
                </div>
            </div>

            <div class="col-span-4">
                <div class="relative z-0 inline-block w-full mb-2 bg-white group">
                    <input type="file" wire:model="files" name="files[]" multiple
                        class="hover:bg-blue-50 block py-2.5 px-1 w-full text-sm text-gray-900 border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 hover:border-blue-300 focus:border-blue-600 focus:bg-white peer"
                        placeholder=" ">
                    <label
                        class="pointer-events-none peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 peer-placeholder-shown:left-2 z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        {{ $lang['labels']['cv'] }}
                    </label>
                    <div>
                        @error('files') <span class="error">{{ $message }}</span> @enderror 
                    </div>
                </div>
            </div>

            <div class="col-span-4">
                <label for="consent">
                    <div class="flex items-center">
                        <div class="flex">
                            <input id="consent" wire:model="consent" name="consent" type="checkbox" required=""
                                class="shrink-0 mt-0.5 border-gray-200 hover:border-gray-400 rounded text-red-600 pointer-events-none focus:ring-red-500     ">
                        </div>
                        <div class="text-sm ms-3">
                            {{ $lang['labels']['terms'] }}
                            <button type="button"
                                wire:click="$dispatch('openModal', {component: 'terms-and-conditions'})"
                                class="font-medium text-red-600 decoration-2 hover:underline">
                                {{ $lang['labels']['terms_link'] }}
                            </button>
                        </div>
                    </div>
                </label>
            </div>

            <div class="col-span-4 mt-2">
                <div id="buttons">
                    <button type="submit" id="submit-button"
                        class="inline-flex items-center justify-center w-full px-3 py-2 text-sm font-medium text-white align-middle transition-all bg-green-600 border rounded-md shadow-sm hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-green-600">
                        {{ $lang['labels']['submit'] }}
                    </button>
                    <script>
                        document.getElementById('lead-form').addEventListener('submit', function() {
                    document.getElementById('submit-button').disabled = true;
                    document.getElementById('submit-button').innerHTML = 'Processing...';
                    document.getElementById('submit-button').classList.remove('bg-green-600', 'hover:bg-green-800',
                        'focus:ring-green-600');
                    document.getElementById('submit-button').classList.add('bg-yellow-600', 'ring-yellow-600',
                        'outline-none', 'ring-2', 'ring-offset-2', 'opacity-30', 'cursor-wait');
                });
                    </script>
                </div>
            </div>
        </div>
    </form>