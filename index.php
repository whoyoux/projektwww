<!DOCTYPE html>
<html lang="pl">
<head>
    <?php
        include "meta.php";
    ?>
    <title>World Wander</title>

    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <x-slider width="90%" images="
        ./images/beach.jpg,
	    ./images/maldives.jpg,
	    ./images/polynesia.jpg,
        ./images/travel/greece.jpg">
    </x-slider>

    <section class="flex flex-col gap-10 scroll-margin pb-10" id="methods">
        <div class="max-w-screen-md mx-auto w-[90%]">
            <h2 class="text-4xl font-semibold mt-10 mb-4">Proste sposoby na tanie podróżowanie</h2>
        </div>

        <div class="text-section prose max-w-screen-md mt-0">
            <h3>Planuj z wyprzedzeniem</h3>
            <img src="images/travel/planning.jpg" alt="Planowanie" class="rounded-lg"/>
            <p>Planowanie podróży z odpowiednim wyprzedzeniem może pomóc Ci zaoszczędzić dużo pieniędzy. Rezerwacja biletów lotniczych, pociągowych lub autobusowych z dużym wyprzedzeniem często pozwala złapać lepsze promocje i oferty specjalne. Monitoruj również ceny noclegów i poszukaj opcji z wyprzedzeniem, aby złapać najlepsze okazje.</p>
        </div>

        <div class="text-section prose max-w-screen-md">
            <h3>Elastyczność w terminach podróży</h3>
            <img src="images/travel/calendar.jpg" alt="Kalendarz" class="rounded-lg"/>
            <p>Być elastycznym w wyborze terminów podróży może znacząco obniżyć koszty. Czasami podróżowanie w dniach poza sezonem turystycznym lub unikanie weekendów może przynieść oszczędności. Ponadto, jeśli jesteś gotowy podróżować w ciągu dnia lub w godzinach wieczornych, możesz skorzystać z tanich ofert lotów i innych środków transportu.</p>    
        </div>

        <div class="text-section prose max-w-screen-md">
            <h3>Poszukaj alternatywnych miejsc noclegowych</h3>
            <img src="images/travel/airbnb.jpg" alt="airbnb" class="rounded-lg"/>
            <p>
                Oprócz tradycyjnych hoteli, rozważ inne opcje noclegowe, takie jak hostele, apartamenty wynajmowane przez lokalnych mieszkańców za pośrednictwem platform takich jak Airbnb, czy nawet kwatera prywatna. Te alternatywne opcje często są tańsze niż hotele, a jednocześnie mogą zapewnić autentyczne doświadczenie lokalnej kultury.
            </p>
        </div>

        <div class="text-section prose max-w-screen-md">
            <h3>Korzystaj z lokalnego transportu publicznego</h3>
            <img src="images/travel/bus.jpg" alt="Bus" class="rounded-lg"/>
            <p>Zamiast polegać na taksówkach lub wynajętych samochodach, wybierz transport publiczny, który jest często znacznie tańszy. Korzystanie z autobusów, tramwajów, metra czy pociągów lokalnych pozwoli Ci zaoszczędzić pieniądze, a jednocześnie pozwoli na bliższy kontakt z miejscową społecznością i kulturą.</p>    
        </div>

        <div class="text-section prose max-w-screen-md">
            <h3>Poszukaj darmowych atrakcji i rabatów</h3>
            <img src="images/travel/greece.jpg" alt="Grecja" class="rounded-lg"/>
            <p>Wiele miejsc oferuje darmowe atrakcje, wycieczki lub wydarzenia, które mogą sprawić, że Twoja podróż będzie nie tylko tanie, ale także pełne przygód. Ponadto, poszukaj rabatów dla turystów, karty zniżkowe lub bilety grupowe, które mogą obniżyć koszty zwiedzania i rozrywki.</p>    
        </div>

        <div class="text-section prose max-w-screen-md">
            <h3>Używaj konta wielowalutowego, np. Revolut</h3>
            <img src="images/travel/creditcard.jpg" alt="Karta kredytowa" class="rounded-lg"/>
            <p>Używanie konta wielowalutowego, takiego jak Revolut, może pomóc Ci uniknąć dodatkowych opłat bankowych podczas podróży zagranicznych. Dzięki możliwości płacenia w lokalnej walucie bez opłat za konwersję, będziesz mógł zaoszczędzić znaczną sumę pieniędzy podczas swoich podróży.</p>
        </div>
    </section>

    <section class="flex flex-col gap-10 scroll-margin border-t pb-10" id="places">
        <div class="max-w-screen-md mx-auto w-[90%]">
            <h2 class="text-4xl font-semibold mt-10 mb-4">Miejsca które można zwiedzić za stosunkowo nieduże pieniądze</h2>
        </div>

        <div class="text-section prose max-w-screen-md">
            <h3>Maroko</h3>
            <img src="images/country/maroko.jpg" class="rounded-lg" alt="Meczet, Casablanca, Maroko">
            <p>Egzotyczne I niedrogie Maroko święci triumfy wśród miłośników taniego podróżowania. “Zatrzymałam się w hostelu Kaktus w Marakeszu i kosztowało mnie to tylko 7 dolarów za noc. Wspomnienia? Przyjazna obsługa i pyszne śniadania każdego ranka. W medynie posiłek dla trzech osób (składający się z trzech dań każdy) kosztował mniej niż 20 dolarów — Lauren S, BuzzFeed Community.</p>
        </div>

        <div class="text-section prose max-w-screen-md">
            <h3>Chorwacja</h3>
            <img src="images/country/chorwacja.jpg" class="rounded-lg" alt="Dubrownik, Chorwacja, Europa">
            <p>Wśród Polaków ta hossa trwa od kilku lat. Za to prawdziwy boom od niedawna chorwacka turystyka przeżywa wśród amerykańskich backpackersów. Choćby za sprawą amerykańskiego dolara, który ma tu naprawdę mocną pozycję. „Z 12 znajomymi wynajęliśmy piękną willę z basem. Wyszło ok. 20 euro za noc. Jedzenie i alkohol są bardzo tanie. Mnóstwo pięknych plaż i fantastyczne morze – pisze Canehdian, BuzzFeed Community.</p>
        </div>

        <div class="text-section prose max-w-screen-md">
            <h3>Praga, Czechy</h3>
            <img src="images/country/praga.jpg" class="rounded-lg" alt="Praga, Praha, Zima">
            <p>Tego miejsca nie trzeba przedstawiać. "W Pradze było jak w bajce, nie brakowało taniego alkoholu ani jedzenia. Korzystaliśmy z Airbnb, udało się trafić na świetne mieszkanie”— Chantelleb4d26fe7fb, BuzzFeed Community.</p>
        </div>

        <div class="text-section prose max-w-screen-md">
            <h3>Stambuł</h3>
            <img src="images/country/stanbul.jpg" class="rounded-lg" alt="Stambuł, Most, Miasto">
            <p>Stambuł, Turcja: „Każdy znajdzie tu coś dla siebie. Miasto nie bez powodu nazywane jest kulturowym i geograficznym mostem między Europą a Bliskim Wschodem. Główne atrakcje Stambułu są albo za darmo, albo ich cena waha się od 5 do 7 dolarów. Nietrudno znaleźć przyzwoite zakwaterowanie blisko centrum. Transport publiczny działa bez zarzutów, dodatkowo można skorzystać z promów. Na Krytym Bazarze za trzy dolary znajdziesz pamiątki, w których twoja mama zakocha się od pierwszego wejrzenia” - Kate Ericson, Facebook.</p>
        </div>

        <div class="text-section prose max-w-screen-md">
            <h3>Macedonia</h3>
            <img src="images/country/macedonia.jpg" class="rounded-lg" alt="Macedonia, Jezioro, Natura">
            <p>"Najlepsza miejscówka to Jezioro Ochrydzkie. W lecie można bawić się na małych plażach ukrytych pod skalistymi klifami. Ochryda ma również piękne stare miasto usiane zabytkowymi kościołami. Trudno tu znaleźć potrawy, które kosztują więcej niż 6 dolarów. To na pewno wciąż nieodkryty skarb!” - Tony Hietala, Facebook. </p>
        </div>
    </section>


    <section class="flex flex-col gap-10 scroll-margin border-t pb-10" id="pack">
        <div class="max-w-screen-md mx-auto w-[90%]">
            <h2 class="text-4xl font-semibold mt-10 mb-4">Jak spakować walizkę – praktyczny poradnik</h2>
            <h5 class="text-xs text-gray-500">Źródło: wings24.pl</h5>
        </div>

        <div class="text-section prose max-w-screen-md">
            <h3>Zrób listę rzeczy, które chcesz zabrać</h3>
            <p>Bez względu na to, czy wybierasz się w dalszą czy w bliższą podróż, na długi czy krótki czas, warto ją dobrze zaplanować. Zrobienie listy niezbędnych rzeczy, które chcesz zabrać w podróż, ułatwia pakowanie walizki i zmniejsza niepokój związany z koniecznością pamiętania o zabraniu wszystkich niezbędnych rzeczy. Wystarczy skreślać je po kolei z listy! Oczywiście każdy bagaż pakuje się nieco inaczej. Do dużego bagażu rejestrowanego, przewożonego w luku bagażowym samolotu, zmieścisz znacznie więcej niż w bagażu podręcznym, zabieranym na pokład samolotu. Podróż samolotem to wygoda, ale taż pewne ograniczenia. Warto więc dokładnie określić, czego potrzebujesz w czasie swojej podróży. Być może nie zmieścisz wszystkiego w bagażu podręcznym, ale zabierzesz najważniejsze rzeczy, które pozwolą Ci spędzić miły urlop.</p>
        </div>

        <div class="text-section prose max-w-screen-md">
            <h3>Lecisz samolotem? Sprawdź wymogi przewoźników</h3>
            <p>Podróżowanie samolotem z bagażem rejestrowanym wiąże się z koniecznością uiszczenia często niemałych dopłat, dlatego wiele osób wybiera bagaż podręczny jako jedyny w czasie swojego lotu. Zwykle jest on bezpłatny, przewożony na pokładzie samolotu. Jego wymiary są ściśle określone przez linie lotnicze. Zwykle oscylują w okolicach 40 x 20 x 25 cm. To mały plecak, torba lub walizka. Jeśli uda Ci się zmieścić w takim bagażu, z pewnością poczujesz oszczędność w cenie biletu.<br /><br />Jeśli wybierasz bagaż rejestrowany, warto zwrócić uwagę także na jego ograniczenia. Musisz zmieścić się w limicie wagowym. Zwykle jest to 20 kg. Możesz też zabrać średni bagaż. Zwykle taka walizka ma ograniczenie do 10 kg. </p>
        </div>

        <div class="text-section prose max-w-screen-md">
            <h3>Roluj rzeczy przed włożeniem ich do walizki</h3>
            <p>Okazuje się, że zrolowane ubrania zajmują znacznie mniej miejsca niż poskładane. Jak rolować ubrania? Wystarczy wyprasowane ubrania ciasno zwinąć w rolki. Dzięki temu łatwiej zmieścić ich więcej w torbie czy walizce. Co więcej, są one zwykle mniej pogniecione.</p>
        </div>

        <div class="text-section prose max-w-screen-md">
            <h3>Najbardziej potrzebne rzeczy spakuj na wierzch walizki</h3>
            <p>Najcięższe przedmioty umieść na spodzie walizki czy torby, a to, czego będziesz potrzebować także w czasie podróży, umieść na wierzchu, by mieć do nich łatwy dostęp. Takie rzeczy możesz zabrać także do kieszonek czy schowków, które znajdują się w plecakach, torbach, ale także walizkach wykonanych z miękkich materiałów.</p>
        </div>

        <div class="text-section prose max-w-screen-md">
            <h3>Wkładaj ubrania i drobne przedmioty w worki próżniowe</h3>
            <p>Usunięcie powietrza z pewnością umożliwi zapakowanie większej ilości rzeczy. Warto jednak pamiętać, że w drodze powrotnej brudne ubrania będą zajmowały więcej miejsca. Trzeba więc dobrze przemyśleć takie pakowanie walizki. Ma ono sens zwłaszcza wtedy, gdy część rzeczy planujemy pozostawić. Mogą być to być na przykład zużyte już kosmetyki.</p>
        </div>

        <div class="text-section prose max-w-screen-md">
            <h3>Pakuj rzeczy od największych do najmniejszych</h3>
            <p>Dzięki technice pakowania od największych do najmniejszych zmieścisz znacznie więcej rzeczy! Jeśli najpierw upchniesz drobiazgi, duże przedmioty, jak dodatkowe pary butów, mogą się nie zmieścić. Jeśli zaczniesz do dużych rzeczy, drobiazgi z powodzeniem upchniesz pomiędzy nimi.</p>
        </div>
    </section>

    <section class="flex flex-col gap-10 scroll-margin border-t pb-10" id="trails">
        <div class="max-w-screen-md mx-auto w-[90%]">
            <h2 class="text-4xl font-semibold mt-10 mb-4">4 najciekawsze szlaki piesze w Polsce</h2>
            <h5 class="text-xs text-gray-500">Źródło: www.redbull.com</h5>
        </div>

        <div class="text-section prose max-w-screen-md">
            <h3>Orla Perć</h3>
            <img src="images/trails/orlaperc.jpg" class="rounded-lg" alt="Polska, Tatry, Orla perć">
            <p>Orla Perć w Tatrach Wysokich to jedna z najtrudniejszych i najbardziej niebezpiecznych tras turystycznych w Polsce. Mierzy około 4,5 kilometra i zazwyczaj zajmuje cały dzień na pokonanie. Rekordowy czas to godzina i 4 minuty. Szlak zaczyna się na Zawracie i kończy na przełęczy Krzyżne. Dojście można rozpocząć z Doliny Pięciu Stawów lub Doliny Gąsienicowej. Nie jest dostępny od strony Kasprowego Wierchu i Świnicy od 2018 roku. Na trasie obowiązuje ruch jednokierunkowy na odcinku Zawrat-Kozia Przełęcz. Trasa wymaga dobrej sprawności fizycznej i nie jest odpowiednia dla osób z lękiem wysokości. Istnieją udogodnienia takie jak łańcuchy, klamry i drabinki, ale warto skorzystać z przewodnika.</p>
        </div>

        <div class="text-section prose max-w-screen-md">
            <h3>Główny Szlak Beskidzki</h3>
            <img src="images/trails/gsb.jpg" class="rounded-lg" alt="Wedrowka, Natura">
            <p>Główny Szlak Beskidzki (GSB) to najdłuższy szlak pieszy w Polsce, liczący około 500 kilometrów. Przebiega przez najwyższe partie Beskidów, z Ustronia do Wołosatego, m.in. przez szczyty takie jak Barania Góra, Babia Góra czy Turbacz. Przecina liczne rezerwaty i parki narodowe oraz urokliwe wioski i miejscowości. Szlak oferuje różnorodne krajobrazy, ale jego pokonanie wymaga wytrwałości i dobrej kondycji fizycznej. Rekordzistą jest Rafał Bielawa, który przebiegł trasę w niecałe 109 godzin.</p>
        </div>

        <div class="text-section prose max-w-screen-md">
            <h3>Grzbiet Karkonoszy</h3>
            <img src="images/trails/karkonosze.jpg" class="rounded-lg" alt="Karkonosze, Natura, Grzbiet">
            <p>Karkonosze to malowniczy obszar w Polsce, objęty ochroną Karkonoskiego Parku Narodowego oraz Rezerwatu Biosfery UNESCO. Główny grzbiet górskiego pasma można odkryć pieszo, podążając czerwonym szlakiem znanym jako Droga Przyjaźni. Ta część Głównego Szlaku Sudeckiego ma około 35 kilometrów i rozpoczyna się w Szklarskiej Porębie, kończąc na Przełęczy Okraj. Szlak oferuje piękne widoki, mijając atrakcje takie jak Twarożnik czy Śnieżne Kotły. Można podzielić podróż na kilka dni, korzystając z różnych schronisk. Trasa nadaje się również do wędrówek zimowych na nartach lub rakietach, jednak wymaga odpowiedniego przygotowania.</p>
        </div>

        <div class="text-section prose max-w-screen-md">
            <h3>Szlak Orlich Gniazd</h3>
            <img src="images/trails/orlich.jpg" class="rounded-lg" alt="Zamek, Twierdza, Gruzy">
            <p>Czerwony szlak turystyczny o długości około 170 kilometrów łączy Kraków i Częstochowę. Obszar ten, nazywany Wyżyną Krakowsko-Częstochowską (lub też Jurą), jest jednym z najatrakcyjniejszych regionów Polski - pełnym skał, chętnie odwiedzanym przez wspinaczy. Trasa przecina Ojcowski Park Narodowy. Po drodze mijamy wiele zamków i warowni zbudowanych na skałach. Najbardziej okazałe to ruiny zamku królewskiego na Złotej Górze (Ojców), Ruiny Zamku w Mirowie oraz ruiny zamku w Ogrodzieńcu. W tempie turystycznym szlak pokonamy w około tydzień. Na trasie tej rozgrywa się ultramaraton, którego uczestnicy mają jedynie 44 godziny na pokonanie całego dystansu, a rekord trasy to 17,5 godziny.</p>
        </div>

        
    </section>

    <section class="border-t py-4 mt-10 flex flex-col gap-4 scroll-margin" id="calculator">
        <div class="w-[90%] max-w-screen-md mx-auto ">
            <h2 class="text-4xl font-semibold mt-10">Kalkulator kosztów paliwa</h2>

            <form onsubmit="event.preventDefault(); calculate();" class=" mt-4 md:mt-10 bg-white p-5 rounded-lg border flex flex-col gap-4">
                <div class="flex flex-col gap-2">
                    <label for="distance" class="text-sm font-medium text-gray-900">Podaj długość trasy (w km)</label>
                    <input type="text" placeholder="1500" name="distance" id="distance" required minlength="1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"/>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="burn" class="text-sm font-medium text-gray-900">Podaj spalanie auta (na 100km)</label>
                    <input type="text" placeholder="9" name="burn" id="burn" required minlength="1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"/>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="gas" class="text-sm font-medium text-gray-900">Podaj aktualną cenę paliwa (w zł)</label>
                    <input type="text" placeholder="7.25" name="gas" id="gas" required minlength="1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"/>
                </div>
                <div>
                    <input type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center cursor-pointer" id="calculate_btn"  value="Oblicz" />
                </div> 
                <div class="mt-5">
                    <h2 class="text-xl font-medium" id="result">Całkowity koszt wynosi: </h2>
                </div>
            </form>
        </div>

    </section>
    

    <section class="border-t py-4 mt-10 scroll-margin" id="book">
        <div class="w-[90%] max-w-screen-md mx-auto flex flex-col gap-8 ">
            <h2 class="text-4xl font-semibold mt-10 ">Księga gości</h2>

            <div class="flex flex-col gap-4">
                <div class="p-5 rounded-lg bg-white border flex flex-col gap-4 w-full lg:w-auto min-w-[250px]">
                    <h3 class="text-xl font-medium">Dodaj swój wpis</h3>
                    <form action="index.php" class="flex flex-col gap-4" method="POST">
                        <div class="flex flex-col gap-2">
                            <label for="title" class="text-sm font-medium text-gray-900">Tytuł</label>
                            <input type="text" placeholder="Tytuł..." name="title" id="title" minlength="5" maxlength="50" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"/>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="author" class="text-sm font-medium text-gray-900">Twoja nazwa</label>
                            <input type="text" placeholder="Jan Kowalski" name="author" id="author" required  minlength="5" maxlength="50" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"/>
                        </div>
                        <div>
                            <input type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center cursor-pointer" value="Dodaj wpis" />
                        </div>

                        <?php
                            include 'db.php';

                            if($_SERVER["REQUEST_METHOD"] == "POST") {
                                if(empty($_REQUEST['title']) || empty($_REQUEST['author'])) {
                                    echo 'Pola nie mogą być puste!';
                                    return;
                                }

                                $title = $_REQUEST["title"];
                                $author = $_REQUEST["author"];

                                try {
                                    $sql = "INSERT INTO posts (title, author) VALUES (?, ?)";
                                    $stmt= $conn->prepare($sql);
                                    $stmt->execute([$title, $author]);
                                    $_POST = array();
                                    $message = "Dodano nowy wpis!";
                                    echo "<h2 class='text-medium'>Dodano nowy wpis!</h2>";
                                } catch(PDOException $e) {
                                    echo "Error: " . $e->getMessage();
                                }

                            }
                        ?>
                    </form>
                </div>

                <div class="w-full flex flex-col gap-4">
                    <h3 class="text-2xl font-semibold">Ostatnie wpisy:</h3>
                    <ul class="grid gap-4 grid-cols-2 md:grid-cols-3">
                    <?php
                        include 'db.php';

                        try {
                            $sql = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 15";
                            $stmt = $conn->query($sql);

                            if ($stmt->rowCount() > 0) {
                                while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    echo "<li class='p-4 rounded-lg bg-white border'>";
                                    echo "<h3 class='text-xl font-medium truncate'>" . htmlspecialchars($row["title"]) . "</h3>";
                                    echo "<p class='text-sm text-gray-500'>Autor: " . htmlspecialchars($row["author"]) . "</p>";
                                    echo "</li>";
                                }
                            } else {
                                echo "Nie znaleziono żadnych wpisów w księdze gości :(";
                            }
                        } catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                    ?>
                    </ul>
                </div>

            </div>

        </div>
        
    </section>

    <?php
        include "anim.php";
    ?>

    <?php
        include "footer.php";
    ?>

    <script>
        const distance = document.querySelector("#distance");
        const burn = document.querySelector("#burn");
        const gas = document.querySelector("#gas");

        const btn = document.querySelector("#calculate_btn");
        const result = document.querySelector("#result");

        const calculate = () => {
            const distanceValue = parseFloat(distance.value.replaceAll(",", "."));
            const burnValue = parseFloat(burn.value.replaceAll(",", "."));
            const gasValue = parseFloat(gas.value.replaceAll(",", "."));

            if(isNaN(distanceValue) || distanceValue <= 0
            ||isNaN(burnValue) || burnValue <= 0
            || isNaN(gasValue) || gasValue <= 0
            ) {
                alert("Proszę wprowadzić poprawne liczby.");
                return;
            }

            const calculated = (distanceValue / 100) * burnValue * gasValue;
            result.innerText = `Całkowity koszt wynosi: ${calculated.toFixed(2)} złoty.`;
        }
    </script>

    <script src="slider.js"></script>
</body>
</html>