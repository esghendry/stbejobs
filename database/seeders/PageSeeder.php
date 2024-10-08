<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pages')->insert([
            'id' => 1,
            'slug' => 'welcome',
            'title_1' => 'Aan de slag',
            'title_2' => 'in België.',
            'subtitle_1' => 'Morgen al starten',
            'subtitle_2' => 'bij je nieuwe job in België.',
            'body' => '<p>Zoek je een job in de <a href="/logistiek"
                                class="text-red-600 underline hover:no-underline">logistiek</a> of <a
                                href="/productie"
                                class="text-red-600 underline hover:no-underline">productie</a> bij <a
                                href="/jouw-regio"
                                class="text-red-600 underline hover:no-underline">jouw in de regio</a>? Staffing | ESG
                            helpt je snel aan werk. Van orderpicker tot operator, onze klanten zijn gevestigd in het
                            hele land, van Gent tot Genk. Er is volop keuze, of je nu op zoek bent naar een job in de
                            nacht, in ploegen of in het weekend.<br>
                            <br>
                            Laat vandaag je gegevens achter en wij doen de rest. Wij matchen jouw profiel met de
                            perfecte job bij jou in de buurt. Dankzij ons uitgebreide netwerk en jarenlange ervaring
                            vinden we gegarandeerd de ideale match.<br>
                            <br>
                            Klaar voor een nieuwe uitdaging? Neem de eerste stap en laat je gegevens achter. Ons team
                            contacteert je binnen de 24 uur voor een eerste kennismaking. Zo kan je morgen al aan de
                            slag in je nieuwe job.</p>',
            'summary' => '<div class="text-xs font-medium text-gray-900">
                                        <div class="w-full text-base font-bold text-gray-900">Op zoek naar een job?
                                        </div>
                                        <span class=" whitespace-nowrap">Bij Staffing | ESG staan deze altijd
                                            open:</span>
                                    </div>

                                    <div class="pl-4 my-6 space-y-4 text-sm">
                                        <div><svg class="inline-block mr-2 text-staffing-red" width="16px" height="16px"
                                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                aria-label="Operator icon">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke="#CCCCCC"
                                                    stroke-width="0.24000000000000005"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#bc1313" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </g>
                                            </svg> Operator</div>
                                        <div><svg class="inline-block mr-2 text-staffing-red" width="16px" height="16px"
                                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                aria-label="Orderpicker icon">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke="#CCCCCC"
                                                    stroke-width="0.24000000000000005"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#bc1313" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </g>
                                            </svg> Orderpicker</div>
                                        <div><svg class="inline-block mr-2 text-staffing-red" width="16px" height="16px"
                                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                aria-label="Heftruck / reachtruck chauffeur icon">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke="#CCCCCC"
                                                    stroke-width="0.24000000000000005"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#bc1313" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </g>
                                            </svg> Heftruck / reachtruck chauffeur</div>
                                        <div><svg class="inline-block mr-2 text-staffing-red" width="16px" height="16px"
                                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                aria-label="Productiemedewerker icon">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke="#CCCCCC"
                                                    stroke-width="0.24000000000000005"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#bc1313" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </g>
                                            </svg> Productiemedewerker</div>
                                        <div><svg class="inline-block mr-2 text-staffing-red" width="16px" height="16px"
                                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                aria-label="Teamleader icon">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke="#CCCCCC"
                                                    stroke-width="0.24000000000000005"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#bc1313" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </g>
                                            </svg> Teamleader</div>
                                    </div>
                                    <div class="px-2 py-2 pb-4 text-xs font-medium text-gray-900">
                                        Aan de slag in jouw regio, maar staat jouw job er niet tussen? Solliciteer
                                        gerust.
                                    </div>',
            'image' => 'jobs/pages/heftruck.webp',
            'lang' => 'nl',
        ]);

        DB::table('pages')->insert([
            'id' => 2,
            'slug' => 'logistiek',
            'title_1' => 'Aan de slag',
            'title_2' => 'in de logistiek.',
            'subtitle_1' => 'Morgen al starten',
            'subtitle_2' => 'bij je nieuwe job.',
            'body' => '<p>De logistiek biedt werk. Ga via Staffing | ESG aan de slag als orderpicker, als lader/losser, of als heftrucker. Laat vandaag je gegevens achter en wij doen de rest.<br><br>Onze klanten zijn grote logistieke bedrijven van Gent tot Genk. Of je op zoek bent naar een job voor de nacht, in ploegen of weekendwerk, er is genoeg keuze.</p>',
            'summary' => '<div class="px-2 py-2 text-xs font-medium text-gray-900"><div class="w-full text-base font-bold text-gray-900">Op zoek naar een job?</div><span class=" whitespace-nowrap">Bij Staffing | ESG staan deze altijd open:</span></div><div class="pl-4 my-6 space-y-4 text-sm"><ul><li>&nbsp;Orderpicker</li><li>&nbsp;Heftruck / reachtruck chauffeur</li><li>&nbsp;Lader / losser</li><li>&nbsp;Chauffeur C / CE</li><li>&nbsp;Teamleader</li></ul></div><div class="px-2 py-2 pb-4 text-xs font-medium text-gray-900">Aan de slag in de logistiek, maar staat jouw job er niet tussen? Solliciteer gerust.</div>',
            'image' => 'jobs/pages/5/01J7JPRFVFNP4J8EPCZ4KNPSPB.webp',
            'lang' => 'nl',
        ]);

        DB::table('pages')->insert([
            'id' => 3,
            'slug' => 'productie',
            'title_1' => 'Aan de slag',
            'title_2' => 'in een productieomgeving.',
            'subtitle_1' => 'Morgen al starten',
            'subtitle_2' => 'bij je nieuwe job.',
            'body' => '<p>Werken in een productieomgeving? Ga via Staffing | ESG aan de slag als productiemedewerker, als operator of als kok. Laat vandaag je gegevens achter en wij doen de rest.<br><br>Onze klanten zijn grote bedrijven in bijvoorbeeld groenten en fruit of de maakindustrie van Gent tot Genk. Of je op zoek bent naar een job voor de nacht, in ploegen of weekendwerk, er is genoeg keuze.</p>',
            'summary' => '<div class="px-2 py-2 text-xs font-medium text-gray-900"><div class="w-full text-base font-bold text-gray-900">Op zoek naar een job?</div><span class=" whitespace-nowrap">Bij Staffing | ESG staan deze altijd open:</span></div><div class="pl-4 my-6 space-y-4 text-sm"><ul><li>&nbsp;Orderpicker</li><li>&nbsp;Productiemedewerker</li><li>&nbsp;Inpakker</li><li>&nbsp;Kok grootkeuken</li><li>&nbsp;Teamleader</li></ul></div><div class="px-2 py-2 pb-4 text-xs font-medium text-gray-900">Aan de slag in de productie, maar staat jouw job er niet tussen? Solliciteer gerust.</div>',
            'image' => 'jobs/pages/8/01J7K45B65JCV74MCQV9JJ5VQE.webp',
            'lang' => 'nl',
        ]);

        DB::table('pages')->insert([
            'id' => 4,
            'slug' => 'jouw-regio',
            'title_1' => 'Aan de slag',
            'title_2' => 'in jouw regio.',
            'subtitle_1' => 'Morgen al starten',
            'subtitle_2' => 'bij je nieuwe job.',
            'body' => '<p>Een job bij jou in de buurt. Ga via Staffing | ESG aan de slag in de logistiek of productie. Bijvoorbeeld als orderpicker of operator. Laat vandaag je gegevens achter en wij doen de rest.<br><br>Onze klanten zijn bedrijven van Gent tot Genk, dus ook zeker bij jou in de buurt. Of je op zoek bent naar een job voor de nacht, in ploegen of weekendwerk, er is genoeg keuze.</p>',
            'summary' => '<div class="px-2 py-2 text-xs font-medium text-gray-900"><div class="w-full text-base font-bold text-gray-900">Op zoek naar een job?</div><span class=" whitespace-nowrap">Bij Staffing | ESG staan deze altijd open:</span></div><div class="pl-4 my-6 space-y-4 text-sm"><ul><li>&nbsp;Operator</li><li>&nbsp;Orderpicker</li><li>&nbsp;Heftruck / reachtruck chauffeur</li><li>&nbsp;Productiemedewerker</li><li>&nbsp;Teamleader</li></ul></div><div class="px-2 py-2 pb-4 text-xs font-medium text-gray-900">Aan de slag in jouw regio, maar staat jouw job er niet tussen? Solliciteer gerust.</div>',
            'image' => 'jobs/pages/9/01J7JW4ARTQHPCWMKZXJCBXPE3.webp',
            'lang' => 'nl',
        ]);
    }
}
