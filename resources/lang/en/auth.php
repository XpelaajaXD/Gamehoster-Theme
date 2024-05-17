<?php

return [
    'sign_in' => 'Kirjaudu sisään',
    'go_to_login' => 'Siirry kirjautumiseen',
    'failed' => 'Tiliä vastaavilla tunnistetiedoilla ei löytynyt.',

    'forgot_password' => [
        'label' => 'Unohditko salasanasi?',
        'label_help' => 'Anna tilisi sähköpostiosoite saadaksesi ohjeet salasanan nollaamiseen.',
        'button' => 'Palauta tili',
    ],

    'reset_password' => [
        'button' => 'Nollaa ja kirjaudu sisään',
    ],

    'two_factor' => [
        'label' => '2-vaiheinen tunnuskoodi',
        'label_help' => 'Tämä tili vaatii toisen tason todennusta jatkaaksesi. Syötä laitteesi generoima koodi kirjautumisen viimeistelemiseksi.',
        'checkpoint_failed' => 'Kaksivaiheisen todennuksen tunnuskoodi oli virheellinen.',
    ],

    'throttle' => 'Liian monta kirjautumisyritystä. Yritä uudelleen :seconds sekunnin kuluttua.',
    'password_requirements' => 'Salasanan on oltava vähintään 8 merkkiä pitkä ja sen tulisi olla ainutlaatuinen tälle sivustolle.',
    '2fa_must_be_enabled' => 'Ylläpitäjä on vaatinut, että kaksivaiheinen todennus on otettava käyttöön tililläsi, jotta voit käyttää paneelia.',
];
