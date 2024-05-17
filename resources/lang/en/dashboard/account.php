<?php

return [
    'email' => [
        'title' => 'Päivitä sähköpostiosoitteesi',
        'updated' => 'Sähköpostiosoitteesi on päivitetty.',
    ],
    'password' => [
        'title' => 'Vaihda salasanasi',
        'requirements' => 'Uuden salasanasi tulisi olla vähintään 8 merkkiä pitkä.',
        'updated' => 'Salasanasi on päivitetty.',
    ],
    'two_factor' => [
        'button' => 'Määritä kaksivaiheinen tunnistus',
        'disabled' => 'Kaksivaiheinen tunnistus on poistettu käytöstä tililläsi. Sinua ei enää pyydetä antamaan tunnistuskoodia kirjautuessasi.',
        'enabled' => 'Kaksivaiheinen tunnistus on otettu käyttöön tililläsi! Jatkossa kirjautuessasi sinun on annettava laitteesi tuottama koodi.',
        'invalid' => 'Annettu tunnuskoodi oli virheellinen.',
        'setup' => [
            'title' => 'Määritä kaksivaiheinen tunnistus',
            'help' => 'Et voi skannata koodia? Syötä alla oleva koodi sovellukseesi:',
            'field' => 'Syötä tunnuskoodi',
        ],
        'disable' => [
            'title' => 'Poista kaksivaiheinen tunnistus käytöstä',
            'field' => 'Syötä tunnuskoodi',
        ],
    ],
];
