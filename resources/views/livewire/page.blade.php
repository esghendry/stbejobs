<div id="page" class="md:container mx-auto px-5 md:px-0 my-6">
    <article class="max-w-6xl mx-auto">
        <h1 class="my-12 text-3xl italic text-center font-amiri sm:text-5xl">
            <span class="text-2xl not-italic font-bold font-roboto sm:text-4xl">
                {{ $page->title_1}}
            </span>
            {{ $page->title_2}}
        </h1>

        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-full sm:col-span-4">
                <picture class="w-full">
                    {{--
                    <source class="w-full" srcset="https://cms.staffing-esg.be/img/heftruck.webp" type="image/webp">
                    --}}
                    <img class="w-full" src="{{ Storage::disk('do')->url($page->image) }}"
                        alt="Heftruck chauffeur gezocht">
                </picture>
            </div>
            <div class="col-span-full sm:col-span-8 text-sm sm:text-base ">
                <h2 class="text-lg italic font-amiri sm:text-2xl">
                    <span class="text-base not-italic font-bold font-roboto sm:text-xl">
                        {{ $page->subtitle_1}}
                    </span>
                    {{ $page->subtitle_2}}
                </h2>
                <br>
                <div class="prose max-w-none">
                    {!! $page->body !!}
                </div>
            </div>
        </div>

        <div class="grid grid-cols-12 mt-6 sm:mt-12">
            <div class="col-span-12 md:col-span-5 max-w-none">
                <section>
                    {!! $page->summary !!}
                </section>
            </div>
            <div class="col-span-12 md:col-span-7">
                <section>
                    <livewire:form :page="$page" :source="$page->slug" :activeLang="$page->lang" />
                </section>
            </div>
        </div>

    </article>

    <style>
        ul li {
            padding-left: 1.5em;
            margin-top: 0.5rem;
            margin-bottom: 0.5em;
            position: relative;
        }

        ul li::before {
            content: '';
            color: #bc1313;
            position: absolute;
            left: 0;
            top: 2px;
            width: 1em;
            height: 1em;
            background-repeat: no-repeat;
            content: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="%23bc1313" class="text-staffing-red"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" /></svg>');
        }
    </style>

</div>

