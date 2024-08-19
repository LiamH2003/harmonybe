let counter1 = 0;
let counter2 = 0;
let counter3 = 0;

function favorite(clicked) {
    if(clicked == 1) {
        if(counter1 === 0) {
            document.querySelector(".favorite1 img").src = "../images/fav2.png";
            counter1++;
        }
        else if (counter1 === 1) {
            document.querySelector(".favorite1 img").src = "../images/fav1.png";
            counter1--;
        }
    }
    if(clicked == 2) {
        if(counter2 === 0) {
            document.querySelector(".favorite2 img").src = "../images/fav2.png";
            counter2++;
        }
        else if (counter2 === 1) {
            document.querySelector(".favorite2 img").src = "../images/fav1.png";
            counter2--;
        }
    }
    if(clicked == 3) {
        if(counter3 === 0) {
            document.querySelector(".favorite3 img").src = "../images/fav2.png";
            counter3++;
        }
        else if (counter3 === 1) {
            document.querySelector(".favorite3 img").src = "../images/fav1.png";
            counter3--;
        }
    }
}

function event1() {
    document.querySelector(".innerMailDiv h3").innerHTML = "Examens";
    document.querySelector(".innerMailDiv h4").innerHTML = "Thomas Van Den Bosse";
    document.querySelector(".innerMailDiv span").innerHTML = "2 mei 2022 op 19:32";
    document.querySelector(".innerMailDiv p").innerHTML = "Beste,<br><br>Ik hoop dat alles goed met je gaat.<br><br>Ik schrijf je vandaag omdat ik graag even wil bijpraten over de examens voor maatschappelijke oriëntatie. Ik begrijp dat deze periode behoorlijk druk kan zijn en dat er mogelijk wat uitdagingen zijn geweest. Daarom leek het me een goed idee om te kijken of we een moment kunnen vinden om hierover te bellen.<br><br>Als je tijd hebt, zou ik graag horen hoe de examens zijn verlopen en of er zaken zijn waar we rekening mee moeten houden voor toekomstige sessies. Het is belangrijk voor mij om ervoor te zorgen dat alles soepel verloopt en dat alle betrokkenen zich gesteund voelen.<br><br>Zou je kunnen aangeven wanneer je beschikbaar bent voor een kort telefonisch overleg? Ik pas me graag aan jouw agenda aan, zodat we samen kunnen bespreken hoe we eventuele verbeteringen kunnen doorvoeren.<br><br>Alvast bedankt voor je tijd en aandacht. Ik kijk ernaar uit om van je te horen en om samen te zorgen voor een succesvolle voortzetting van het programma.<br><br>Met vriendelijke groet,<br><br>Thomas Van Den Bosse<br><br>HarmonyBE";
}

function event2() {
    document.querySelector(".innerMailDiv h3").innerHTML = "Introductiecursus";
    document.querySelector(".innerMailDiv h4").innerHTML = "Thomas Van Den Bosse";
    document.querySelector(".innerMailDiv span").innerHTML = "1 april 2022 op 12:09";
    document.querySelector(".innerMailDiv p").innerHTML = "Beste,<br><br>Ik hoop dat alles goed met je gaat.<br><br>Ik schrijf je vandaag om wat meer informatie te geven over de introductiecursus voor nieuwkomers. Deze cursus is ontworpen om nieuwkomers te helpen bij hun eerste stappen in België. We behandelen essentiële onderwerpen zoals de Belgische cultuur, basisprincipes van de wetgeving, gezondheidszorg en praktische tips voor het dagelijks leven. Ons doel is om hen een stevige basis te geven en hen te helpen zich snel thuis te voelen.<br><br>Ik begrijp dat er veel informatie is om te verwerken en dat dit soms overweldigend kan zijn. Daarom wil ik je laten weten dat ik altijd beschikbaar ben om eventuele vragen te beantwoorden of onduidelijkheden weg te nemen. Als er iets is dat niet helemaal duidelijk is of als er problemen zijn, aarzel dan niet om contact met me op te nemen.<br><br>We kunnen een moment inplannen om te bellen of je kunt me een e-mail sturen, wat voor jou het beste uitkomt. Het is voor mij belangrijk dat we eventuele obstakels snel en efficiënt kunnen oplossen, zodat de introductiecursus een positieve en waardevolle ervaring blijft voor alle deelnemers.<br><br>Alvast bedankt voor je tijd en aandacht. Ik kijk ernaar uit om van je te horen en om ervoor te zorgen dat alles soepel verloopt.<br><br>Met vriendelijke groet,<br><br>Thomas Van Den Bosse<br><br>HarmonyBE";
}

function event3() {
    document.querySelector(".innerMailDiv h3").innerHTML = "Welkom";
    document.querySelector(".innerMailDiv h4").innerHTML = "Thomas Van Den Bosse";
    document.querySelector(".innerMailDiv span").innerHTML = "16 februari 2022 op 16:19";
    document.querySelector(".innerMailDiv p").innerHTML = "Beste,<br><br>Ik hoop dat alles goed met je gaat.<br><br>Mijn naam is Thomas Van Den Bosse en ik werk bij HarmonyBE. Ik wil graag van deze gelegenheid gebruik maken om mezelf voor te stellen en je te verwelkomen bij ons integratieprogramma.<br><br>Harmony is een platform dat speciaal is ontworpen om nieuwkomers in België te ondersteunen bij hun integratieproces. We bieden diverse cursussen, waaronder taalcursussen in Nederlands en Frans, en programma's voor maatschappelijke oriëntatie. Ons doel is om je te helpen je snel thuis te voelen en je weg te vinden in de Belgische samenleving.<br><br>Ik begrijp dat dit een spannende en soms uitdagende tijd kan zijn. Daarom wil ik je laten weten dat je altijd contact met mij mag opnemen als je vragen hebt of ergens tegenaan loopt. Of het nu gaat om praktische zaken, culturele vragen of iets anders dat je bezighoudt, ik sta klaar om je te helpen en je door het proces te begeleiden.<br><br>Aarzel niet om me te bellen of een e-mail te sturen als je ergens over wilt praten of als er onduidelijkheden zijn. Het is voor mij belangrijk dat je je gesteund voelt en dat we eventuele obstakels snel kunnen oplossen, zodat jouw integratie zo soepel mogelijk verloopt.<br><br>Alvast bedankt voor je tijd en aandacht. Ik kijk ernaar uit om samen te werken en je te helpen bij je integratie in België.<br><br>Met vriendelijke groet,<br><br>Thomas Van Den Bosse<br><br>HarmonyBE";
}