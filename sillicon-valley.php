<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="src/output.css" rel="stylesheet">
</head>
<?php include_once './_partials/nav.php'; ?>
<body>
<main> <!-- Verander h-screen naar min-h-screen en voeg padding-bottom toe -->

    <!--    SECTION 1    -->
    <div class="container mx-auto mt-0 sm:mt-14 px-16 sm:py-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 items-start">
            <!-- Image Section (with space below on smaller screens) -->
            <div class="order-1 sm:order-2 rounded-xl w-full lg:w-[700px] mt-8">
                <img src="images/sillicon-history.jpg" alt="Afbeelding" class="w-full h-auto rounded-xl shadow-lg">
            </div>

            <!-- Text Section -->
            <div class="order-2 sm:order-1 flex flex-col justify-start items-start gap-4">
                <h1>
                    <span class="text-4xl sm:text-5xl font-bold">De Geschiedenis en Invloed van Silicon <Valley></Valley></span>
                </h1>
                <h2 class="text-2xl font-medium">Ontstaan en Vroege Jaren (1938-1950)</h2>
                <p class="text-xl sm:text-base leading-relaxed">
                    Silicon Valley, gelegen in het zuiden van de San Francisco Bay Area, ontstond als een centrum van technologische innovatie in de jaren 1930. Het begon met de opkomst van bedrijven zoals Hewlett-Packard (HP) in 1938, opgericht door William Hewlett en David Packard in een garage in Palo Alto. Deze periode werd gekenmerkt door de ontwikkeling van de elektronica-industrie en de opkomst van technologische start-ups.
                </p>

                <h2 class="text-2xl font-medium">Technologische Revolutie (1950-1980)</h2>
                <p class="text-xl sm:text-base leading-relaxed">
                    In de jaren 1950 tot 1980 groeide Silicon Valley uit tot een broeinest van technologische innovatie. Het was de geboorteplaats van revolutionaire technologieën, waaronder de halfgeleider, microprocessor en personal computer. Bedrijven zoals Fairchild Semiconductor en later Intel speelden een cruciale rol in het ontwikkelen van de eerste geïntegreerde schakelingen en microprocessoren. De oprichting van Xerox PARC in de jaren 1970 leidde tot baanbrekende uitvindingen zoals de grafische gebruikersinterface (GUI) en de muis, die later werden overgenomen door bedrijven als Apple en Microsoft.
                </p>

                <h2 class="text-2xl font-medium">Internetrevolutie en Dotcom-boom (1980-2000)</h2>
                <p class="text-xl sm:text-base leading-relaxed">
                    De opkomst van het internet in de jaren 1980 en 1990 bracht een nieuwe golf van innovatie met zich mee in Silicon Valley. Bedrijven zoals Cisco, Yahoo, Google en Amazon werden opgericht en speelden een cruciale rol in het vormgeven van het digitale tijdperk. De dotcom-boom in de late jaren 1990 bracht een enorme groei van internetgerelateerde bedrijven met zich mee, maar leidde ook tot de beruchte dotcom-krach in 2000.
                </p>
                <button id="bottomButton" onclick="bottomFunction()"
                        class="bg-transparent hover:bg-[#00BBFF] text-blue-700 text-2xl sm:text-base font-semibold hover:text-white py-4 px-6 sm:py-2 sm:px-4 border border-blue-500 hover:border-transparent rounded">
                    Het heden
                </button>
            </div>
        </div>

        <div class="mx-auto">
            <div class="relative flex pt-20 items-center">
                <div class="flex-grow border-t border-gray-400"></div>
                <span class="flex-shrink mx-4 text-3xl font-bold">Hoe staat het er nu voor?</span>
                <div class="flex-grow border-t border-gray-400"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 py-20">
                <div
                ">
                <img class="rounded-md w-[600px]" src="images/sillicon-tijdlijn.png">
            </div>
            <div class="sm:pr-20 justify-center">
                <section class="mb-10">
                    <h2 class="text-3xl sm:text-2xl font-semibold mb-5">Huidige stand van zaken</h2>
                    <p class="italic text-xl sm:text-base leading-relaxed">
                        Silicon Valley blijft onmiskenbaar een wereldleider in technologische innovatie, maar de regio
                        staat voor aanzienlijke uitdagingen die de dynamiek van het gebied veranderen. Een van de
                        grootste problemen waar de regio momenteel mee te maken heeft, is de explosieve stijging van de
                        kosten van levensonderhoud. De huizenprijzen en huurkosten in Silicon Valley zijn enorm
                        gestegen, waardoor het voor veel werknemers, zelfs die in de tech-industrie, moeilijk is om in
                        de regio te wonen. Dit heeft geleid tot een crisis op het gebied van betaalbare huisvesting, met
                        als gevolg dat veel mensen gedwongen zijn om lange afstanden te reizen voor werk, of zelfs de
                        regio te verlaten op zoek naar betaalbare alternatieven. De extreme concentratie van welvaart en
                        de stijgende ongelijkheid in Silicon Valley hebben tot toenemende sociale spanningen geleid.

                        Een ander groot probleem is de veranderende arbeidsmarkt en concurrentie vanuit andere opkomende
                        technologiehubs. Steden als Austin, Texas, hebben zich de afgelopen jaren ontpopt als
                        aantrekkelijke alternatieven voor Silicon Valley, dankzij lagere kosten van levensonderhoud, een
                        sterke technologische infrastructuur en een cultuur die start-ups en innovatie omarmt.
                        Internationaal gezien zijn regio’s zoals Shenzhen in China en Stockholm in Europa snel aan het
                        opkomen als wereldwijde innovatiecentra. Deze steden trekken nu steeds meer talent,
                        investeerders en bedrijven aan, wat druk uitoefent op Silicon Valley om zijn status als dominant
                        tech-centrum te behouden.
                    </p>
                </section>

            </div>
        </div>
    </div>
</main>

<?php include_once './_partials/footer.php'; ?>
</body>
<script src="./js/app.js"></script>
</html>