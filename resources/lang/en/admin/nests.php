<?php

return [
    'notices' => [
        'created' => 'Uusi pesä, :name, on luotu onnistuneesti.',
        'deleted' => 'Pyydetty pesä on poistettu onnistuneesti paneelista.',
        'updated' => 'Pesän asetukset on päivitetty onnistuneesti.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Tämä pesä ja siihen liittyvät muuttujat on tuotu onnistuneesti.',
            'updated_via_import' => 'Tämä pesä on päivitetty annetun tiedoston avulla.',
            'deleted' => 'Pyydetty pesä on poistettu onnistuneesti paneelista.',
            'updated' => 'Pesän asetukset on päivitetty onnistuneesti.',
            'script_updated' => 'Pesän asennusskripti on päivitetty ja se suoritetaan aina, kun palvelimia asennetaan.',
            'egg_created' => 'Uusi pesä on luotu onnistuneesti. Sinun on käynnistettävä uudelleen kaikki käynnissä olevat daemonit, jotta tämä uusi pesä tulee voimaan.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'Muuttuja ":variable" on poistettu ja sitä ei enää ole saatavilla palvelimille, kun ne rakennetaan uudelleen.',
            'variable_updated' => 'Muuttuja ":variable" on päivitetty. Sinun on rakennettava uudelleen kaikki tätä muuttujaa käyttävät palvelimet muutosten käyttämiseksi.',
            'variable_created' => 'Uusi muuttuja on luotu ja se on onnistuneesti määritelty tälle pesälle.',
        ],
    ],
];
