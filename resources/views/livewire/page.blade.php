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
                    {{-- <source class="w-full" srcset="https://cms.staffing-esg.be/img/heftruck.webp" type="image/webp"> --}}
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
            <div class="col-span-12 md:col-span-5 prose max-w-none">
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

</div>