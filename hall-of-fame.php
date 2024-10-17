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
                    <span class="text-4xl sm:text-5xl font-bold">Hall of Fame van IT</span>
                </h1>
                <p class="text-xl sm:text-base leading-relaxed">
                    De Hall of Fame van IT eert de visionairs, pioniers en innovatoren die een onschatbare bijdrage
                    hebben geleverd aan de ontwikkeling van de informatietechnologie. Van de uitvinding van de eerste
                    programmeertalen tot de creatie van het internet, deze individuen hebben de technologische wereld
                    gevormd zoals we die vandaag de dag kennen. Onder de meest prominente leden bevinden zich mensen
                    zoals Alan Turing, die de basis legde voor moderne computerwetenschap; Grace Hopper, pionier in
                    programmeertalen; en Tim Berners-Lee, die het wereldwijde web uitvond. Hun werk heeft niet alleen de
                    manier waarop we informatie delen en communiceren veranderd, maar ook de fundamenten gelegd voor een
                    digitale toekomst. De Hall of Fame van IT viert hun bijdragen en inspireert toekomstige generaties
                    om te blijven innoveren en de grenzen van technologie te verleggen.
                    </p>
            </div>
        </div>

        <div class="mx-auto">
            <div class="relative flex pt-20 items-center">
                <div class="flex-grow border-t border-gray-400"></div>
                <span class="flex-shrink mx-4 text-3xl font-bold">Personen</span>
                <div class="flex-grow border-t border-gray-400"></div>
            </div>

            </div>
            <div class="flex flex-col sm:flex-row items-center m-5">
                <img class="rounded-full w-[200px] mb-3 sm:mb-0 sm:mr-5" src="images/steve1.jpg" alt="Portret van Steve Wozniak">
                <div>
                    <h1 class="pb-2 text-xl font-medium">Steve Wozniak en Steve Jobs</h1>
                    <p class="italic text-xl sm:text-base leading-relaxed">
                        Als medeoprichters van Apple Inc. hebben ze de computerindustrie getransformeerd met innovatieve
                        producten zoals de Apple I, Apple II en later de iPhone en iPad.
                    </p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center m-5">
                <img class="rounded-full w-[200px] mb-3 sm:mb-0 sm:mr-5" src="images/adelovelance.jpg" alt="Portret van Ada Lovelace">
                <div>
                    <h1 class="pb-2 text-xl font-medium">Ada Lovelace</h1>
                    <p class="italic text-xl sm:text-base leading-relaxed">
                        Ze wordt beschouwd als de eerste computerprogrammeur vanwege haar werk aan de Analytical Engine van Charles Babbage en haar baanbrekende inzichten in de mogelijkheden van computers.
                    </p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center m-5">
                <img class="rounded-full w-[200px] mb-3 sm:mb-0 sm:mr-5" src="images/larryensergeybrin.jpg" alt="Portret van Larry Page en Sergey Brin">
                <div>
                    <h1 class="pb-2 text-xl font-medium">Larry Page en Sergey Brin</h1>
                    <p class="italic text-xl sm:text-base leading-relaxed">
                        Als medeoprichters van Google hebben ze 's werelds meest gebruikte zoekmachine gecreëerd en hebben ze bijgedragen aan de ontwikkeling van vele andere technologische producten en diensten.
                    </p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center m-5">
                <img class="rounded-full w-[200px] mb-3 sm:mb-0 sm:mr-5" src="images/Charles_Babbage.jpg" alt="Portret van Charles Babbage">
                <div>
                    <h1 class="pb-2 text-xl font-medium">Charles Babbage</h1>
                    <p class="italic text-xl sm:text-base leading-relaxed">
                        Hij wordt beschouwd als de "vader van de computer" vanwege zijn ontwerpen voor de mechanische computers, waaronder de Analytical Engine, die een voorloper was van moderne computers.
                    </p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center m-5">
                <img class="rounded-full w-[200px] mb-3 sm:mb-0 sm:mr-5" src="images/William_Shockley,_Stanford_University.jpg" alt="Portret van William Shockley">
                <div>
                    <h1 class="pb-2 text-xl font-medium">William Shockley</h1>
                    <p class="italic text-xl sm:text-base leading-relaxed">
                        Als mede-uitvinder van de transistor legde hij de basis voor moderne elektronica en speelde een cruciale rol in de ontwikkeling van de halfgeleiderindustrie.
                    </p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center m-5">
                <img class="rounded-full w-[200px] mb-3 sm:mb-0 sm:mr-5" src="images/gracehopper.jpg" alt="Portret van Grace Hopper">
                <div>
                    <h1 class="pb-2 text-xl font-medium">Grace Hopper</h1>
                    <p class="italic text-xl sm:text-base leading-relaxed">
                        Ze was een pionier op het gebied van computerwetenschappen en wordt vaak gecrediteerd voor het bedenken van de eerste compiler voor een programmeertaal, waardoor programmeurs gemakkelijker software konden schrijven.
                    </p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center m-5">
                <img class="rounded-full w-[200px] mb-3 sm:mb-0 sm:mr-5" src="images/Linus-Torvalds-2012.jpg" alt="Portret van Linus Torvalds">
                <div>
                    <h1 class="pb-2 text-xl font-medium">Linus Torvalds</h1>
                    <p class="italic text-xl sm:text-base leading-relaxed">
                        Als de bedenker van het Linux-besturingssysteem heeft hij een enorm impact gehad op de wereld van open-source software en heeft hij bijgedragen aan de popularisering van het idee van samenwerking en gemeenschapsontwikkeling.
                    </p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center m-5">
                <img class="rounded-full w-[200px] mb-3 sm:mb-0 sm:mr-5" src="images/Mark_Zuckerberg_F8_2019_Keynote_(32830578717)_(cropped).jpg" alt="Portret van Mark Zuckerberg">
                <div>
                    <h1 class="pb-2 text-xl font-medium">Mark Zuckerberg</h1>
                    <p class="italic text-xl sm:text-base leading-relaxed">
                        Als mede-oprichter van Facebook heeft hij een van de meest invloedrijke socialemediaplatforms gecreëerd en heeft hij een revolutie teweeggebracht in de manier waarop mensen wereldwijd communiceren en informatie delen.
                    </p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center m-5">
                <img class="rounded-full w-[200px] mb-3 sm:mb-0 sm:mr-5" src="images/billgates.jpg" alt="Portret van Bill Gates">
                <div>
                    <h1 class="pb-2 text-xl font-medium">Bill Gates</h1>
                    <p class="italic text-xl sm:text-base leading-relaxed">
                        Als mede-oprichter van Microsoft heeft hij een enorme invloed gehad op de computerindustrie en de wereldwijde verspreiding van pc's door het Windows-besturingssysteem en andere softwareproducten.
                    </p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center m-5">
                <img class="rounded-full w-[200px] mb-3 sm:mb-0 sm:mr-5" src="images/gordonmoore.jpg" alt="Portret van Gordon Moore">
                <div>
                    <h1 class="pb-2 text-xl font-medium">Gordon Moore</h1>
                    <p class="italic text-xl sm:text-base leading-relaxed">
                        Hij is vooral bekend om zijn observatie dat het aantal transistors op een microchip ongeveer elke twee jaar verdubbelt, bekend als de "wet van Moore", die de groei en vooruitgang van de halfgeleiderindustrie heeft geleid.
                    </p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center m-5">
                <img class="rounded-full w-[200px] mb-3 sm:mb-0 sm:mr-5" src="images/j1a-anne-marije-laban-chad-hurley-steve-chen-and-jawed-karim-youtube.jpg" alt="Portret van Chad Hurley, Steve Chen en Jawed Karim">
                <div>
                    <h1 class="pb-2 text-xl font-medium">Chad Hurley, Steve Chen en Jawed Karim</h1>
                    <p class="italic text-xl sm:text-base leading-relaxed">
                        Als medeoprichters van YouTube hebben ze een platform gecreëerd dat de manier waarop mensen video's online bekijken en delen heeft veranderd en heeft bijgedragen aan de opkomst van online videocontent.
                    </p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center m-5">
                <img class="rounded-full w-[200px] mb-3 sm:mb-0 sm:mr-5" src="images/kevinmitnick.jpg" alt="Portret van Kevin Mitnick">
                <div>
                    <h1 class="pb-2 text-xl font-medium">Kevin Mitnick</h1>
                    <p class="italic text-xl sm:text-base leading-relaxed">
                        Hij wordt beschouwd als een van de beruchtste hackers en beveiligingsexperts ter wereld en heeft bijgedragen aan het vergroten van het bewustzijn over cybersecurity en de noodzaak van betere beveiligingspraktijken.
                    </p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center m-5">
                <img class="rounded-full w-[200px] mb-3 sm:mb-0 sm:mr-5" src="images/rickskrenta.jpg" alt="Portret van Rich Skrenta">
                <div>
                    <h1 class="pb-2 text-xl font-medium">Rich Skrenta</h1>
                    <p class="italic text-xl sm:text-base leading-relaxed">
                        Hij wordt erkend als de maker van het eerste computervirus dat zich verspreidde via een besturingssysteem, wat heeft bijgedragen aan het bewustzijn van de noodzaak van antivirussoftware en beveiligingsmaatregelen.
                    </p>
                </div>
            </div>


        </div>
</main>

<?php include_once './_partials/footer.php'; ?>
</body>
<script src="./js/app.js"></script>
</html>