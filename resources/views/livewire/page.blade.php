<div>
    {{-- {{ $page }} --}}
    <main class="flex-grow w-full overflow-hidden">
        <div class="relative z-10 px-4 pt-4 pb-4 mx-auto max-w-7xl sm:px-6 lg:px-8 lg:pt-6">
            <article class="max-w-6xl p-2 mx-auto lg:p-4">

                <form id="lead-form" method="POST" action="{{ route('lead') }}" enctype="multipart/form-data">
                    @csrf

                    <h1 class="mb-4 text-3xl italic text-center font-amiri sm:text-5xl">
                        <span class="text-2xl not-italic font-bold font-roboto sm:text-4xl">
                            {{ $page->title_1}}
                        </span>
                        {{ $page->title_2}}
                    </h1>

                    <div class="grid grid-cols-12">
                        <div class="col-span-full sm:col-span-4">
                            <picture class="w-full">
                                <source class="w-full" srcset="https://cms.staffing-esg.be/img/heftruck.webp"
                                    type="image/webp">
                                <img class="w-full" src="https://cms.staffing-esg.be/img/heftruck.png"
                                    alt="Heftruck chauffeur gezocht">
                            </picture>
                        </div>
                        <div class="col-span-full sm:col-span-8 p-2 text-sm sm:text-base sm:p-6">
                            <h2 class="text-lg italic font-amiri sm:text-2xl">
                                <span class="text-base not-italic font-bold font-roboto sm:text-xl">
                                    {{ $page->subtitle_1}}
                                </span>
                                {{ $page->subtitle_2}}
                            </h2>
                            <br>
                            {!! $page->body !!}
                        </div>
                    </div>

                    <div class="pt-6 sm:pt-12">
                        <div class="grid grid-cols-12">
                            <div class="col-span-12 md:col-span-5 ">
                                <section>
                                {!! $page->summary !!}
                                </section>
                            </div>
                            <div class="col-span-12 md:col-span-7">
                                <section>
                                    <livewire:form :page="$page" :activeLang="$page->lang"/>
                                </section>
                            </div>
                        </div>

                    </div>
                </form>

            </article>
        </div>
    </main>


</div>