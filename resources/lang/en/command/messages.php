<?php

return [
    'location' => [
        'no_location_found' => 'Tallennetta ei löytynyt annetulla lyhyellä koodilla.',
        'ask_short' => 'Sijainnin lyhyt koodi',
        'ask_long' => 'Sijainnin kuvaus',
        'created' => 'Uusi sijainti (:name) on luotu onnistuneesti, tunnisteella :id.',
        'deleted' => 'Pyydetty sijainti on poistettu onnistuneesti.',
    ],
    'user' => [
        'search_users' => 'Anna käyttäjänimi, käyttäjätunnus tai sähköpostiosoite',
        'select_search_user' => 'Poistettavan käyttäjän tunnus (anna \'0\' hakeaksesi uudelleen)',
        'deleted' => 'Käyttäjä on poistettu onnistuneesti hallintapaneelista.',
        'confirm_delete' => 'Haluatko varmasti poistaa tämän käyttäjän hallintapaneelista?',
        'no_users_found' => 'Annetuilla hakuehdoilla ei löytynyt yhtään käyttäjää.',
        'multiple_found' => 'Annetulla käyttäjällä löytyi useita tilejä, käyttäjää ei voitu poistaa --no-interaction -lipun takia.',
        'ask_admin' => 'Onko tämä käyttäjä ylläpitäjä?',
        'ask_email' => 'Sähköpostiosoite',
        'ask_username' => 'Käyttäjänimi',
        'ask_name_first' => 'Etunimi',
        'ask_name_last' => 'Sukunimi',
        'ask_password' => 'Salasana',
        'ask_password_tip' => 'Jos haluat luoda tilin, jossa satunnainen salasana lähetetään käyttäjälle sähköpostitse, suorita tämä komento uudelleen (CTRL+C) ja käytä `--no-password` -lippua.',
        'ask_password_help' => 'Salasanojen tulee olla vähintään 8 merkkiä pitkiä ja sisältää vähintään yksi iso kirjain ja numero.',
        '2fa_help_text' => [
            'Tämä komento poistaa 2-vaiheisen tunnistautumisen käyttäjän tililtä, jos se on käytössä. Tätä tulisi käyttää vain tilin palautuskomentona, jos käyttäjä on lukittu ulos tilistään.',
            'Jos tämä ei ole haluamasi toimenpide, paina CTRL+C poistuaksesi prosessista.',
        ],
        '2fa_disabled' => '2-vaiheinen tunnistautuminen on poistettu käytöstä käyttäjälle :email.',
    ],
    'schedule' => [
        'output_line' => 'Lähetetään työ ensimmäiselle tehtävälle aikataulussa `:schedule` (:hash).',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Poistetaan palvelun varmuuskopiotiedosto :file.',
    ],
    'server' => [
        'rebuild_failed' => 'Uudelleenrakennuspyyntö palvelimelle ":name" (#:id) solmussa ":node" epäonnistui virheellä: :message',
        'reinstall' => [
            'failed' => 'Asennuspyyntö palvelimelle ":name" (#:id) solmussa ":node" epäonnistui virheellä: :message',
            'confirm' => 'Olet asentamassa uudelleen ryhmän palvelimia. Haluatko jatkaa?',
        ],
        'power' => [
            'confirm' => 'Olet suorittamassa :action -toimintoa :count palvelimelle. Haluatko jatkaa?',
            'action_failed' => 'Virhe virranhallintatoiminnossa palvelimelle ":name" (#:id) solmussa ":node" virheellä: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP-isäntä (esim. smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP-portti',
            'ask_smtp_username' => 'SMTP-käyttäjänimi',
            'ask_smtp_password' => 'SMTP-salasana',
            'ask_mailgun_domain' => 'Mailgun-verkko-osoite',
            'ask_mailgun_endpoint' => 'Mailgun-päätepiste',
            'ask_mailgun_secret' => 'Mailgun-salaisuus',
            'ask_mandrill_secret' => 'Mandrill-salaisuus',
            'ask_postmark_username' => 'Postmark API -avain',
            'ask_driver' => 'Mikä ajuri tulisi käyttää sähköpostien lähettämiseen?',
            'ask_mail_from' => 'Sähköpostiosoite, josta sähköpostit lähetetään',
            'ask_mail_name' => 'Nimi, joka näkyy sähköpostin lähettäjänä',
            'ask_encryption' => 'Käytettävä salausmenetelmä',
        ],
    ],
];
