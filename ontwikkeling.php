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
                <img src="images/geschiedenis.jpg" alt="Afbeelding" class="w-full h-auto rounded-xl shadow-lg">
            </div>

            <!-- Text Section -->
            <div class="order-2 sm:order-1 flex flex-col justify-start items-start gap-4">
                <h1>
                    <span class="text-4xl sm:text-5xl font-bold">Geschiedenis van computers!</span>
                </h1>
                <p class="text-xl sm:text-base leading-relaxed">
                    Een duidelijke uitleg van de verschillende hoofdcategorieën van programmeertalen: Machinecode:
                    Programmeertalen die direct worden uitgevoerd door de computerhardware en bestaan uit binaire
                    instructies. Assembleertalen (assembly): Programmeertalen die een lage abstractie bieden en nauw
                    aansluiten bij de instructieset van de computer. Hogere programmeertalen: Talen die een hoger niveau
                    van abstractie bieden en meer leesbaar en begrijpelijk zijn voor programmeurs. Vierde generatie
                    talen: Talen die zijn ontworpen om specifieke taken te automatiseren en complexe problemen op te
                    lossen met minimale programmeerinspanning. Object georiënteerde talen: Talen die zijn gebaseerd op
                    het concept van objecten en klassen, waardoor programmeurs code kunnen structureren op een manier
                    die beter overeenkomt met de echte wereld.
                </p>
            </div>
        </div>
        <!-- ASSEMBLY -->
        <div class="mx-auto">
            <div class="relative flex pt-20 items-center">
                <div class="flex-grow border-t border-gray-400"></div>
                <span class="flex-shrink mx-4 text-3xl font-bold">1940s - 1950s</span>
                <div class="flex-grow border-t border-gray-400"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 py-20">
                <div
                ">
                <img class="rounded-md w-[600px]" src="images/history/assembly.png">
            </div>
            <div class="sm:pr-20 justify-center">
                <section class="mb-10">
                    <h1 class="text-xl font-bold pb-2">Uitgave jaar</h1>
                    <p class="italic">1949</p>


                    <h1 class="text-xl font-bold pb-2">Naam van de programmeertaal</h1>
                    <p class="italic">Assembly</p>


                    <h1 class="text-xl font-bold pb-2">Ontwikkelaar(s)</h1>
                    <p class="italic">Maurice Wilkes</p>

                    <h1 class="text-xl font-bold pb-2">Specifieke eigenschappen</h1>
                    <p class="italic"> Directe vertaling van machinetaal instructies</p>

                    <h1 class="text-xl font-bold pb-2">Meer informatie:</h1>
                    <a href="https://en.wikipedia.org/wiki/Assembly_language" class="italic accent-blue-500 underline">Wikipedia</a>

                </section>

                <p class="italic text-xl sm:text-base leading-relaxed">
                    Assembly (ook bekend als assembly language) is een low-level programmeertaal die direct communiceert
                    met de hardware van een computer. In tegenstelling tot high-level programmeertalen, zoals Python of
                    Java, biedt assembly programmeurs directe controle over de processor en het geheugen. Dit maakt het
                    extreem efficiënt, maar ook complex, omdat elke instructie één-op-één vertaald wordt naar
                    machinecode die de CPU begrijpt. Assembly wordt vaak gebruikt in situaties waar snelheid en
                    nauwkeurigheid essentieel zijn, zoals in embedded systemen, besturingssystemen, en
                    apparaatstuurprogramma's. Echter, het vergt gedetailleerde kennis van de hardware om effectief te
                    gebruiken. </p>
            </div>
        </div>
        <!-- FORTRAN -->
        <div class="mx-auto">
            <div class="relative flex pt-20 items-center">
                <div class="flex-grow border-t border-gray-400"></div>
                <span class="flex-shrink mx-4 text-3xl font-bold">1950s - 1960s</span>
                <div class="flex-grow border-t border-gray-400"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 py-20">
                <div
                ">
                <img class="rounded-md w-[600px]" src="images/history/Fortran_logo.svg.png">
            </div>
            <div class="sm:pr-20 justify-center">
                <section class="mb-10">
                    <h1 class="text-xl font-bold pb-2">Uitgave jaar</h1>
                    <p class="italic">1957</p>


                    <h1 class="text-xl font-bold pb-2">Naam van de programmeertaal</h1>
                    <p class="italic">FORTRAN</p>


                    <h1 class="text-xl font-bold pb-2">Ontwikkelaar(s)</h1>
                    <p class="italic">John Backus</p>

                    <h1 class="text-xl font-bold pb-2">Specifieke eigenschappen</h1>
                    <p class="italic"> Eerste hogere programmeertaal</p>

                    <h1 class="text-xl font-bold pb-2">Meer informatie:</h1>
                    <a href="https://en.wikipedia.org/wiki/Fortran" class="italic accent-blue-500 underline">1949</a>
                </section>
                <p class="italic text-xl sm:text-base leading-relaxed">
                    Fortran (afkorting voor "Formula Translation") is een high-level programmeertaal die in de jaren 50
                    werd ontwikkeld, specifiek voor wetenschappelijke en technische berekeningen. Het was de eerste taal
                    die speciaal werd ontworpen om complexe wiskundige formules en algoritmes efficiënt uit te voeren.
                    Fortran staat bekend om zijn sterke prestaties in numerieke berekeningen en wordt nog steeds veel
                    gebruikt in wetenschappelijke toepassingen, zoals simulaties, weersvoorspellingen, en modellering in
                    natuurkunde en techniek. Door de jaren heen is de taal geëvolueerd met moderne functies, maar de
                    kern ervan blijft gericht op computationele efficiëntie.
            </div>
        </div>
        <!-- C -->
        <div class="mx-auto">
            <div class="relative flex pt-20 items-center">
                <div class="flex-grow border-t border-gray-400"></div>
                <span class="flex-shrink mx-4 text-3xl font-bold">1970s - 1980s</span>
                <div class="flex-grow border-t border-gray-400"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 py-20">
                <div
                ">
                <img class="rounded-md w-[600px]" src="images/history/C.png">
            </div>
            <div class="sm:pr-20 justify-center">
                <section class="mb-10">
                    <h1 class="text-xl font-bold pb-2">Uitgave jaar</h1>
                    <p class="italic">1972</p>


                    <h1 class="text-xl font-bold pb-2">Naam van de programmeertaal</h1>
                    <p class="italic">C</p>


                    <h1 class="text-xl font-bold pb-2">Ontwikkelaar(s)</h1>
                    <p class="italic">Dennis Ritchie</p>

                    <h1 class="text-xl font-bold pb-2">Specifieke eigenschappen</h1>
                    <p class="italic">Invloedrijke programmeertaal voor systeemsoftware</p>

                    <h1 class="text-xl font-bold pb-2">Meer informatie:</h1>
                    <a href="https://en.wikipedia.org/wiki/Fortran" class="italic accent-blue-500 underline">1949</a>
                </section>
                <p class="italic text-xl sm:text-base leading-relaxed">
                    Fortran (afkorting voor "Formula Translation") is een high-level programmeertaal die in de jaren 50
                    werd ontwikkeld, specifiek voor wetenschappelijke en technische berekeningen. Het was de eerste taal
                    die speciaal werd ontworpen om complexe wiskundige formules en algoritmes efficiënt uit te voeren.
                    Fortran staat bekend om zijn sterke prestaties in numerieke berekeningen en wordt nog steeds veel
                    gebruikt in wetenschappelijke toepassingen, zoals simulaties, weersvoorspellingen, en modellering in
                    natuurkunde en techniek. Door de jaren heen is de taal geëvolueerd met moderne functies, maar de
                    kern ervan blijft gericht op computationele efficiëntie.
            </div>
        </div>
        <!-- C++ -->
        <div class="mx-auto">
            <div class="relative flex pt-20 items-center">
                <div class="flex-grow border-t border-gray-400"></div>
                <span class="flex-shrink mx-4 text-3xl font-bold">1980s - 1990s</span>
                <div class="flex-grow border-t border-gray-400"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 py-20">
                <div
                ">
                <img class="rounded-md w-[600px]" src="images/history/C+.png">
            </div>
            <div class="sm:pr-20 justify-center">
                <section class="mb-10">
                    <h1 class="text-xl font-bold pb-2">Uitgave jaar</h1>
                    <p class="italic">1983</p>


                    <h1 class="text-xl font-bold pb-2">Naam van de programmeertaal</h1>
                    <p class="italic">C++</p>


                    <h1 class="text-xl font-bold pb-2">Ontwikkelaar(s)</h1>
                    <p class="italic">Bjarne Stroustrup</p>

                    <h1 class="text-xl font-bold pb-2">Specifieke eigenschappen</h1>
                    <p class="italic"> Object georiënteerde uitbreiding van C</p>

                    <h1 class="text-xl font-bold pb-2">Meer informatie:</h1>
                    <a href="https://en.wikipedia.org/wiki/C%2B%2B" class="italic accent-blue-500 underline">1949</a>
                </section>
                <p class="italic text-xl sm:text-base leading-relaxed">
                    C++ is een uitgebreide versie van de programmeertaal C, ontwikkeld door Bjarne Stroustrup in de
                    jaren 80. Het voegt objectgeoriënteerd programmeren toe aan de krachtige functies van C, waardoor
                    het geschikt is voor zowel systeemprogrammering als het bouwen van complexe applicaties. C++
                    ondersteunt klassen, objecten, overerving, en polymorfisme, waardoor het mogelijk is om meer
                    gestructureerde en herbruikbare code te schrijven. Het biedt ook functies zoals templates en
                    exception handling, die de flexibiliteit en veiligheid van de taal vergroten. Hoewel het C-achtige
                    snelheid en efficiëntie behoudt, maakt de extra complexiteit het soms moeilijker te beheersen. C++
                    wordt vaak gebruikt voor softwareontwikkeling in toepassingen zoals games, grafische engines, en
                    bedrijfssystemen.
            </div>
        </div>
        <!-- Python -->
        <div class="mx-auto">
            <div class="relative flex pt-20 items-center">
                <div class="flex-grow border-t border-gray-400"></div>
                <span class="flex-shrink mx-4 text-3xl font-bold">21e eeuw</span>
                <div class="flex-grow border-t border-gray-400"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 py-20">
                <div
                ">
                <img class="rounded-md w-[600px]" src="images/history/python.png">
            </div>
            <div class="sm:pr-20 justify-center">
                <section class="mb-10">
                    <h1 class="text-xl font-bold pb-2">Uitgave jaar</h1>
                    <p class="italic">1991</p>


                    <h1 class="text-xl font-bold pb-2">Naam van de programmeertaal</h1>
                    <p class="italic">Python</p>


                    <h1 class="text-xl font-bold pb-2">Ontwikkelaar(s)</h1>
                    <p class="italic">Guido van Rossum</p>

                    <h1 class="text-xl font-bold pb-2">Specifieke eigenschappen</h1>
                    <p class="italic"> Eenvoudige en leesbare syntaxis</p>

                    <h1 class="text-xl font-bold pb-2">Meer informatie:</h1>
                    <a href="https://www.python.org/" class="italic accent-blue-500 underline">1949</a>
                </section>
                <p class="italic text-xl sm:text-base leading-relaxed">

                    Python is een high-level, veelzijdige programmeertaal die in de jaren 90 werd ontwikkeld door Guido
                    van Rossum. Het staat bekend om zijn eenvoud en leesbaarheid, waardoor het populair is bij zowel
                    beginners als ervaren programmeurs. Python maakt gebruik van duidelijke en beknopte syntaxis, wat
                    helpt bij snelle ontwikkeling en onderhoud van code. Het ondersteunt meerdere
                    programmeerparadigma's, zoals objectgeoriënteerd, functioneel, en imperatief programmeren.

                    Dankzij de uitgebreide standaardbibliotheek en de vele beschikbare frameworks en tools wordt Python
                    gebruikt in een breed scala van toepassingen, waaronder webontwikkeling, data-analyse, kunstmatige
                    intelligentie, automatisering, en wetenschappelijk onderzoek. Het is geliefd om zijn flexibiliteit,
                    platformonafhankelijkheid, en sterke gemeenschap.div>
        </div>
        <!-- python -->

    </div>
</main>

<?php include_once './_partials/footer.php'; ?>
</body>
<script src="./js/app.js"></script>
</html>