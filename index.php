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
                <img src="images/computer.jpg" alt="Afbeelding" class="w-full h-auto rounded-xl shadow-lg">
            </div>

            <!-- Text Section -->
            <div class="order-2 sm:order-1 flex flex-col justify-start items-start gap-4">
                <h1>
                    <span class="text-4xl sm:text-5xl font-bold">Wat houden we toch van computers!</span>
                </h1>
                <p class="text-xl sm:text-base leading-relaxed">
                    TechnoWire is een jong en enthousiast bedrijf dat een diepe passie heeft voor alles wat met IT te maken heeft. Ons belangrijkste doel is om IT-kennis op een begrijpelijke en toegankelijke manier over te brengen aan jongvolwassenen, vooral degenen zonder achtergrond in informatietechnologie. We begrijpen dat de wereld van IT vaak complex kan lijken, maar we zijn hier om die barrières te doorbreken. Ons unieke kenmerk is het creëren van een centrale hub waar alle relevante informatie te vinden is, zonder dat je het hele internet hoeft af te zoeken. We geloven in het bieden van duidelijkheid en toegankelijkheid, zodat je gemakkelijk kunt leren en gedijen in de IT-wereld. Bij TechnoWire streven we ernaar om je te ondersteunen op je reis van IT-verkenning en succes.
                </p>
                <button id="bottomButton" onclick="bottomFunction()"
                        class="bg-transparent hover:bg-[#00BBFF] text-blue-700 text-2xl sm:text-base font-semibold hover:text-white py-4 px-6 sm:py-2 sm:px-4 border border-blue-500 hover:border-transparent rounded">
                    Korte informatie
                </button>
            </div>
        </div>

        <div class="mx-auto">
                <div class="relative flex pt-20 items-center">
                    <div class="flex-grow border-t border-gray-400"></div>
                    <span class="flex-shrink mx-4 text-3xl font-bold">Over ons</span>
                    <div class="flex-grow border-t border-gray-400"></div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 py-20">
                    <div
                    ">
                    <img class="rounded-md w-[600px]" src="images/ict_month.png">
                </div>
                <div class="sm:pr-20 justify-center">
                    <section class="mb-10">
                        <h2 class="text-3xl sm:text-2xl font-semibold mb-5">Het Ontstaan van Onze IT-Website</h2>
                        <p class="italic text-xl sm:text-base leading-relaxed">
                            Toen we aan dit project begonnen, hadden we een duidelijke missie: een platform ontwikkelen dat de brug slaat tussen complexe IT-concepten en de gebruikers die ze dagelijks toepassen. We wilden een plek creëren waar iedereen, van beginners tot professionals, waardevolle inzichten kan vinden. Het begon allemaal met een simpel idee tijdens een brainstormsessie, maar al snel beseften we dat er een enorme behoefte was aan praktische, duidelijke informatie over IT. Zo ontstond het plan om tutorials, handleidingen en diepgaande artikelen te combineren, zodat iedereen toegang krijgt tot waardevolle IT-kennis.
                        </p>
                    </section>

                    <section class="mb-10">
                        <h2 class="text-3xl sm:text-2xl font-semibold mb-5">Van Idee naar Digitale Realiteit</h2>
                        <p class="italic text-xl sm:text-base leading-relaxed">
                            Wat begon met enkele schetsen en ideeën, groeide uit tot een platform waar we met trots op kunnen terugkijken. Elk stukje content is zorgvuldig samengesteld door experts, en elke functie op de site is ontworpen om gebruikers te helpen IT beter te begrijpen en toe te passen. Of het nu gaat om programmeertalen, netwerkbeheer of de nieuwste technologische trends, we wilden ervoor zorgen dat onze site een bron van inspiratie en kennis zou zijn. We blijven continu verbeteren, zodat onze website altijd een stap voorblijft in de snel veranderende wereld van IT.
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