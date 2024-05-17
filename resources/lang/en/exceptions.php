<?php

return [
    'daemon_connection_failed' => 'Yhteyden yrittämisessä daemonin kanssa tapahtui poikkeus, joka johti HTTP/:code vastauskoodiin. Tämä poikkeus on kirjattu.',
    'node' => [
        'servers_attached' => 'Solmulla ei saa olla siihen liitettyjä palvelimia, jotta se voidaan poistaa.',
        'daemon_off_config_updated' => 'Daemonin konfiguraatio <strong>on päivitetty</strong>, mutta konfiguraatiotiedoston automaattisessa päivityksessä daemonille tapahtui virhe. Sinun on päivitettävä konfiguraatiotiedosto (config.yml) manuaalisesti, jotta muutokset tulevat voimaan.',
    ],
    'allocations' => [
        'server_using' => 'Palvelin on tällä hetkellä osoitettu tälle allokaatiolle. Allokaation voi poistaa vain, jos siihen ei ole tällä hetkellä osoitettu palvelinta.',
        'too_many_ports' => 'Yli 1000 portin lisääminen kerralla yhteen alueeseen ei ole tuettu.',
        'invalid_mapping' => 'Annettu mapping :port oli virheellinen eikä sitä voitu käsitellä.',
        'cidr_out_of_range' => 'CIDR-notaatio sallii vain maskit välillä /25 ja /32.',
        'port_out_of_range' => 'Allokaation porttien on oltava suurempia kuin 1024 ja enintään 65535.',
    ],
    'nest' => [
        'delete_has_servers' => 'Pesää, johon on liitetty aktiivisia palvelimia, ei voi poistaa paneelista.',
        'egg' => [
            'delete_has_servers' => 'Munaa, johon on liitetty aktiivisia palvelimia, ei voi poistaa paneelista.',
            'invalid_copy_id' => 'Valittua munaa, josta kopioidaan skripti, ei ole olemassa tai se kopioi itse skriptiä.',
            'must_be_child' => 'Tämän munan "Kopioi asetukset" -direktiivin on oltava valitun pesän lapsi.',
            'has_children' => 'Tämä muna on yhden tai useamman muun munan vanhempi. Poista nämä munat ennen tämän munan poistamista.',
        ],
        'variables' => [
            'env_not_unique' => 'Ympäristömuuttujan :name on oltava ainutlaatuinen tälle munalle.',
            'reserved_name' => 'Ympäristömuuttuja :name on suojattu, eikä sitä voi määrittää muuttujalle.',
            'bad_validation_rule' => 'Validointisääntö ":rule" ei ole kelvollinen sääntö tälle sovellukselle.',
        ],
        'importer' => [
            'json_error' => 'JSON-tiedoston jäsentämisessä tapahtui virhe: :error.',
            'file_error' => 'Annettu JSON-tiedosto ei ollut kelvollinen.',
            'invalid_json_provided' => 'Annettu JSON-tiedosto ei ole tunnistettavassa muodossa.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Oman alikäyttäjätilin muokkaaminen ei ole sallittua.',
        'user_is_owner' => 'Et voi lisätä palvelimen omistajaa alikäyttäjäksi tälle palvelimelle.',
        'subuser_exists' => 'Käyttäjä, jolla on tämä sähköpostiosoite, on jo määritetty alikäyttäjäksi tälle palvelimelle.',
    ],
    'databases' => [
        'delete_has_databases' => 'Tietokantapalvelinta, jolla on aktiivisia tietokantoja, ei voi poistaa.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'Maksimiaika ketjutetulle tehtävälle on 15 minuuttia.',
    ],
    'locations' => [
        'has_nodes' => 'Sijaintia, johon on liitetty aktiivisia solmuja, ei voi poistaa.',
    ],
    'users' => [
        'node_revocation_failed' => 'Avainperuutus epäonnistui <a href=":link">Solmulla #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Vaadittuja ehtoja täyttäviä solmuja automaattiselle käyttöönotolle ei löytynyt.',
        'no_viable_allocations' => 'Vaadittuja ehtoja täyttäviä allokaatioita automaattiselle käyttöönotolle ei löytynyt.',
    ],
    'api' => [
        'resource_not_found' => 'Pyydettyä resurssia ei löydy tältä palvelimelta.',
    ],
];
