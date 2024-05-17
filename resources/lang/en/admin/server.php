<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Yrität poistaa tämän palvelimen oletusvarauksen, mutta käytettävissä ei ole varausvaraa.',
        'marked_as_failed' => 'Tämä palvelin on merkitty epäonnistuneeksi aikaisemmassa asennuksessa. Nykyistä tilaa ei voi vaihtaa tässä tilassa.',
        'bad_variable' => 'Nimessä :name oli validointivirhe.',
        'daemon_exception' => 'Kommunikaatiossa demonin kanssa tapahtui poikkeus, mikä johti HTTP/:code-vastauskoodiin. Tämä poikkeus on kirjattu. (pyyntö id: :request_id)',
        'default_allocation_not_found' => 'Pyydettyä oletusvarausta ei löydy tämän palvelimen varauksista.',
    ],
    'alerts' => [
        'startup_changed' => 'Tämän palvelimen käynnistyskokoonpano on päivitetty. Jos tämän palvelimen pesä tai muna on muuttunut, uudelleenasennus tapahtuu nyt.',
        'server_deleted' => 'Palvelin on onnistuneesti poistettu järjestelmästä.',
        'server_created' => 'Palvelin onnistuttiin luomaan paneelissa. Anna demonin muutaman minuutin suorittaa tämän palvelimen asennus loppuun.',
        'build_updated' => 'Tämän palvelimen rakennetiedot on päivitetty. Jotkut muutokset saattavat vaatia käynnistyksen uudelleenottamisen voimaan tullakseen.',
        'suspension_toggled' => 'Palvelimen keskeytystilan on vaihdettu :status.',
        'rebuild_on_boot' => 'Tämä palvelin on merkitty vaativan Docker-säiliön uudelleenrakentamista. Tämä tapahtuu seuraavan kerran, kun palvelin käynnistetään.',
        'install_toggled' => 'Tämän palvelimen asennustila on vaihdettu.',
        'server_reinstalled' => 'Tämä palvelin on asetettu uudelleenasennukseen, joka alkaa nyt.',
        'details_updated' => 'Palvelimen tiedot on päivitetty onnistuneesti.',
        'docker_image_updated' => 'Vaihdettiin onnistuneesti oletus Docker-kuva käytettäväksi tässä palvelimessa. Muutoksen käyttämiseksi uudelleenkäynnistys vaaditaan.',
        'node_required' => 'Sinun on oltava vähintään yksi solmu määritettynä, ennen kuin voit lisätä palvelimen tähän paneeliin.',
        'transfer_nodes_required' => 'Sinun on oltava vähintään kaksi solmua määritettynä, ennen kuin voit siirtää palvelimia.',
        'transfer_started' => 'Palvelinsiirto on aloitettu.',
        'transfer_not_viable' => 'Valitsemallasi solmulla ei ole tarvittavaa levytilaa tai muistia tämän palvelimen majoittamiseen.',
    ],
];
