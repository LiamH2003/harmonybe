<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmony - Cursussen</title>
    <link rel="stylesheet" href="../styles/style6.css">
    <link rel="stylesheet" href="../styles/cursussen.css">
    <link rel="icon" href="../images/Beeldlogo.svg" type="image/icon type">
    <script src="../script/cursus_script.js"></script>
    <script src="../script/script2.js"></script>
</head>
<body>
    <div class="holderDiv">
        <?php include '../includeable/header.php';?>
        <div class="bodyDiv">
            <div class="cursusNav">
                <h2>Cursussen</h2>
                <div onclick="loadContent('maatschappelijke')">Maatschappelijke oriëntatie</div>
                <div onclick="loadContent('nederlands')">Nederlands</div>
                <div onclick="loadContent('frans')">Frans</div>
            </div>
            <div class="contentDiv" id="contentDiv">
                <!-- Default content or the first content goes here -->
                <h3 class="contentTitle">Maatschappelijke oriëntatie</h3>
                <p class="contentText">
                    Maatschappelijke oriëntatie is een cruciaal aspect van het integratieproces voor nieuwkomers in België. Het gaat niet alleen om het leren van de taal, maar ook om het begrijpen van de cultuur, de waarden en normen, en het functioneren van de samenleving. Harmony is toegewijd aan het bieden van uitgebreide programma's en hulpmiddelen om nieuwkomers te helpen zich snel en effectief aan te passen aan hun nieuwe omgeving.<br><br> Onze maatschappelijke oriëntatieprogramma'\s zijn ontworpen om een breed scala aan onderwerpen te behandelen die essentieel zijn voor het leven in België. Dit omvat kennis over de geschiedenis en cultuur van het land, inzicht in de wet- en regelgeving, en praktische informatie over dagelijkse activiteiten zoals winkelen, openbaar vervoer, en gezondheidszorg. Door deze informatie te verstrekken, streven we ernaar nieuwkomers de tools te geven die ze nodig hebben om zelfstandig en succesvol te kunnen functioneren in hun nieuwe thuisland.<br><br> Daarnaast richten onze programma's zich ook op het bevorderen van sociale cohesie. We organiseren workshops en evenementen waar nieuwkomers de kans krijgen om in contact te komen met lokale bewoners en andere nieuwkomers. Deze interacties zijn belangrijk omdat ze helpen bij het opbouwen van een sociaal netwerk, wat een belangrijke steunpilaar kan zijn tijdens het integratieproces. Het uitwisselen van ervaringen en het opbouwen van vriendschappen draagt bij aan een gevoel van gemeenschap en verbondenheid.<br><br> Bij Harmony geloven we dat maatschappelijke oriëntatie een continu proces is dat verder gaat dan de eerste paar maanden van verblijf. Daarom bieden we doorlopende ondersteuning en begeleiding aan onze deelnemers. Onze consultants staan klaar om te helpen met specifieke vragen en uitdagingen, en we bieden ook geavanceerde cursussen voor diegenen die hun kennis en vaardigheden verder willen ontwikkelen.<br><br> Maatschappelijke oriëntatie is meer dan alleen informatieoverdracht; het is een sleutel tot succesvolle integratie en participatie in de Belgische samenleving. Bij Harmony zijn we er trots op om nieuwkomers op deze reis te begeleiden en hen te helpen een stevige basis te leggen voor een toekomst vol mogelijkheden en succes. Samen bouwen we aan een inclusieve samenleving waar iedereen de kans krijgt om te floreren.
                </p>
                <div>
                    <video src="../videos/cursus_vid1.mkv" controls></video>
                </div>
            </div>
        </div>
    </div>
    <script>
        function loadContent(section) {
            const contentDiv = document.getElementById('contentDiv');
            let content = '';

            switch(section) {
                case 'maatschappelijke':
                    content = `
                        <h3 class="contentTitle">Maatschappelijke oriëntatie</h3>
                        <p class="contentText">
                            Maatschappelijke oriëntatie is een cruciaal aspect van het integratieproces voor nieuwkomers in België. Het gaat niet alleen om het leren van de taal, maar ook om het begrijpen van de cultuur, de waarden en normen, en het functioneren van de samenleving. Harmony is toegewijd aan het bieden van uitgebreide programma's en hulpmiddelen om nieuwkomers te helpen zich snel en effectief aan te passen aan hun nieuwe omgeving.<br><br> Onze maatschappelijke oriëntatieprogramma'\s zijn ontworpen om een breed scala aan onderwerpen te behandelen die essentieel zijn voor het leven in België. Dit omvat kennis over de geschiedenis en cultuur van het land, inzicht in de wet- en regelgeving, en praktische informatie over dagelijkse activiteiten zoals winkelen, openbaar vervoer, en gezondheidszorg. Door deze informatie te verstrekken, streven we ernaar nieuwkomers de tools te geven die ze nodig hebben om zelfstandig en succesvol te kunnen functioneren in hun nieuwe thuisland.<br><br> Daarnaast richten onze programma's zich ook op het bevorderen van sociale cohesie. We organiseren workshops en evenementen waar nieuwkomers de kans krijgen om in contact te komen met lokale bewoners en andere nieuwkomers. Deze interacties zijn belangrijk omdat ze helpen bij het opbouwen van een sociaal netwerk, wat een belangrijke steunpilaar kan zijn tijdens het integratieproces. Het uitwisselen van ervaringen en het opbouwen van vriendschappen draagt bij aan een gevoel van gemeenschap en verbondenheid.<br><br> Bij Harmony geloven we dat maatschappelijke oriëntatie een continu proces is dat verder gaat dan de eerste paar maanden van verblijf. Daarom bieden we doorlopende ondersteuning en begeleiding aan onze deelnemers. Onze consultants staan klaar om te helpen met specifieke vragen en uitdagingen, en we bieden ook geavanceerde cursussen voor diegenen die hun kennis en vaardigheden verder willen ontwikkelen.<br><br> Maatschappelijke oriëntatie is meer dan alleen informatieoverdracht; het is een sleutel tot succesvolle integratie en participatie in de Belgische samenleving. Bij Harmony zijn we er trots op om nieuwkomers op deze reis te begeleiden en hen te helpen een stevige basis te leggen voor een toekomst vol mogelijkheden en succes. Samen bouwen we aan een inclusieve samenleving waar iedereen de kans krijgt om te floreren.
                        </p>
                        <div>
                            <video src="../videos/cursus_vid1.mkv" controls></video>
                        </div>`;
                    break;
                case 'nederlands':
                    content = `
                        <h3 class="contentTitle">Nederlands</h3>
                        <p class="contentText">
                            Het belang van het leren van Nederlands kan niet worden onderschat voor nieuwkomers in België. Nederlands is niet alleen een officiële taal in het land, maar ook een sleutel tot succesvolle integratie en participatie in de samenleving. Bij Harmony zetten we ons in om nieuwkomers te helpen deze taalbarrière te overwinnen en hun taalvaardigheden te ontwikkelen om zo hun kansen en mogelijkheden in België te vergroten.<br><br>Het leren van Nederlands opent vele deuren op zowel professioneel als sociaal vlak. Voor nieuwkomers is het beheersen van de taal essentieel om te kunnen communiceren met collega's, klanten en werkgevers. Dit vergroot de kans op het vinden van een baan, het opbouwen van een carrière en het verbeteren van de economische zelfredzaamheid. Veel werkgevers in België hechten waarde aan medewerkers die de lokale taal spreken, omdat dit de samenwerking en efficiëntie binnen het bedrijf bevordert.<br><br>Daarnaast speelt Nederlands een cruciale rol in het dagelijkse leven. Van het doen van boodschappen en het bezoeken van de dokter, tot het deelnemen aan ouderavonden op school en het maken van nieuwe vrienden; het spreken van Nederlands maakt deze alledaagse activiteiten een stuk eenvoudiger en aangenamer. Het helpt nieuwkomers om onafhankelijker te worden en volwaardig deel te nemen aan de Belgische samenleving.<br><br>Het leren van Nederlands gaat echter verder dan alleen praktische voordelen. Het toont ook respect en bereidheid om zich aan te passen aan de nieuwe omgeving. Het leren van de taal is een teken van integratie en een manier om te laten zien dat men zich verbonden voelt met het land en de mensen. Dit bevordert wederzijds begrip en helpt bij het opbouwen van bruggen tussen verschillende culturen.<br><br>Bij Harmony bieden we een breed scala aan taalcursussen aan, afgestemd op verschillende niveaus en leerstijlen. Onze ervaren docenten gebruiken interactieve en praktische methoden om de taal op een boeiende en effectieve manier te onderwijzen. We begrijpen dat iedereen een ander leertempo heeft, en daarom bieden we gepersonaliseerde begeleiding en ondersteuning om ervoor te zorgen dat elke deelnemer zijn of haar taaldoelen kan bereiken.<br><br> Kortom, het leren van Nederlands is een essentiële stap voor nieuwkomers om hun leven in België op te bouwen en te verbeteren. Het biedt niet alleen toegang tot meer kansen, maar bevordert ook een gevoel van gemeenschap en verbondenheid. Bij Harmony zijn we toegewijd aan het ondersteunen van nieuwkomers in dit belangrijke leerproces en helpen we hen graag op weg naar een succesvolle en vervullende toekomst in België.<br><br>
                        </p>`;
                    break;
                case 'frans':
                    content = `
                        <h3 class="contentTitle">Frans</h3>
                        <p class="contentText">
                            Het belang van het leren van Frans voor nieuwkomers in België is van onschatbare waarde. Frans is, naast Nederlands en Duits, een van de officiële talen van België en wordt gesproken door een groot deel van de bevolking, met name in Wallonië en Brussel. Bij Harmony begrijpen we dat het beheersen van de Franse taal een cruciale stap is voor een succesvolle integratie en deelname aan het Belgische maatschappelijke leven.<br><br>Frans leren opent vele deuren, zowel professioneel als sociaal. Voor nieuwkomers die zich willen vestigen in Brussel of Wallonië, is het spreken van Frans essentieel om effectief te kunnen communiceren met collega's, werkgevers en klanten. Veel bedrijven in deze regio's eisen een goede kennis van het Frans, wat betekent dat het beheersen van de taal de kansen op het vinden van een baan en het opbouwen van een carrière aanzienlijk vergroot. Frans spreken is een belangrijke vaardigheid die kan bijdragen aan economische zelfstandigheid en professionele groei.<br><br>Daarnaast is Frans van groot belang in het dagelijks leven. Van het doen van boodschappen en het bezoeken van artsen, tot het inschrijven van kinderen op school en het leggen van nieuwe sociale contacten; het spreken van Frans maakt deze alledaagse handelingen veel eenvoudiger en aangenamer. Het helpt nieuwkomers om zich zelfverzekerd en onafhankelijk te voelen in hun nieuwe omgeving, wat cruciaal is voor een succesvolle integratie.<br><br>Het leren van Frans gaat verder dan alleen praktische voordelen. Het is ook een manier om respect en bereidheid te tonen om zich aan te passen aan de nieuwe omgeving. Het spreken van de lokale taal is een teken van integratie en toont aan dat men zich verbonden voelt met het land en zijn inwoners. Dit bevordert wederzijds begrip en helpt bij het opbouwen van bruggen tussen verschillende culturen, wat essentieel is voor sociale cohesie en harmonie in de samenleving.<br><br>Bij Harmony bieden we uitgebreide Franse taalcursussen aan, ontworpen om aan de behoeften van verschillende niveaus en leerstijlen te voldoen. Onze ervaren docenten maken gebruik van interactieve en praktische methoden om de taal op een boeiende en effectieve manier te onderwijzen. We erkennen dat elke deelnemer een uniek leertempo heeft, daarom bieden we gepersonaliseerde begeleiding en ondersteuning om ervoor te zorgen dat iedereen zijn of haar taalvaardigheden optimaal kan ontwikkelen.<br><br>Kortom, het leren van Frans is een essentiële stap voor nieuwkomers die hun leven in België willen verbeteren en verrijken. Het biedt toegang tot tal van kansen en draagt bij aan een gevoel van gemeenschap en verbondenheid. Bij Harmony zijn we toegewijd aan het ondersteunen van nieuwkomers in hun taalvaardigheden en helpen we hen graag op weg naar een succesvolle en vervullende toekomst in België.
                        </p>`;
                    break;
                default:
                    content = `<h3 class="contentTitle">Select a section to view content</h3>`;
            }

            contentDiv.innerHTML = content;
        }
    </script>
</body>
</html>
