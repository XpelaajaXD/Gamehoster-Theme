<?php

/**
 * Sisältää kaikki eri tapahtumien lokimerkintöjen käännökset.
 * Nämä pitäisi avainkoodata sen arvon mukaan, joka on ennen kaksoispistettä (:)
 * tapahtuman nimessä. Jos kaksoispistettä ei ole, ne pitäisi olla ylimmällä tasolla.
 */
return [
    'auth' => [
        'fail' => 'Kirjautuminen epäonnistui',
        'success' => 'Kirjautunut sisään',
        'password-reset' => 'Salasana nollattu',
        'reset-password' => 'Salasanan nollauspyyntö',
        'checkpoint' => 'Kaksivaiheinen todennuspyyntö',
        'recovery-token' => 'Käytti kaksivaiheista palautustunnusta',
        'token' => 'Ratkaisi kaksivaiheisen haasteen',
        'ip-blocked' => 'Estetty pyyntö luetteloimattomasta IP-osoitteesta: :identifier',
        'sftp' => [
            'fail' => 'SFTP-kirjautuminen epäonnistui',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'Sähköposti vaihdettu osoitteesta :old osoitteeseen :new',
            'password-changed' => 'Salasana vaihdettu',
        ],
        'api-key' => [
            'create' => 'Luotu uusi API-avain: :identifier',
            'delete' => 'Poistettu API-avain: :identifier',
        ],
        'ssh-key' => [
            'create' => 'Lisätty SSH-avain: :fingerprint tilille',
            'delete' => 'Poistettu SSH-avain: :fingerprint tililtä',
        ],
        'two-factor' => [
            'create' => 'Ota käyttöön kaksivaiheinen todennus',
            'delete' => 'Poista käytöstä kaksivaiheinen todennus',
        ],
    ],
    'server' => [
        'reinstall' => 'Palvelin asennettu uudelleen',
        'console' => [
            'command' => 'Suoritettu komento ":command" palvelimella',
        ],
        'power' => [
            'start' => 'Palvelin käynnistetty',
            'stop' => 'Palvelin pysäytetty',
            'restart' => 'Palvelin käynnistetty uudelleen',
            'kill' => 'Palvelinprosessi lopetettu',
        ],
        'backup' => [
            'download' => 'Ladattu varmuuskopio: :name',
            'delete' => 'Poistettu varmuuskopio: :name',
            'restore' => 'Palautettu varmuuskopio: :name (poistetut tiedostot: :truncate)',
            'restore-complete' => 'Varmuuskopion: :name palautus valmis',
            'restore-failed' => 'Varmuuskopion: :name palautus epäonnistui',
            'start' => 'Aloitettu uusi varmuuskopio: :name',
            'complete' => 'Merkitty varmuuskopio: :name valmiiksi',
            'fail' => 'Merkitty varmuuskopio: :name epäonnistuneeksi',
            'lock' => 'Lukittu varmuuskopio: :name',
            'unlock' => 'Avaamaton varmuuskopio: :name',
        ],
        'database' => [
            'create' => 'Luotu uusi tietokanta: :name',
            'rotate-password' => 'Salasana vaihdettu tietokannalle: :name',
            'delete' => 'Poistettu tietokanta: :name',
        ],
        'file' => [
            'compress_one' => 'Pakattu tiedosto: :directory:file',
            'compress_other' => 'Pakattu :count tiedostoa kansiossa :directory',
            'read' => 'Luettu tiedoston sisältö: :file',
            'copy' => 'Luotu kopio tiedostosta: :file',
            'create-directory' => 'Luotu kansio: :directory:name',
            'decompress' => 'Purettu tiedostot: :files kansiossa :directory',
            'delete_one' => 'Poistettu tiedosto: :directory:files.0',
            'delete_other' => 'Poistettu :count tiedostoa kansiossa :directory',
            'download' => 'Ladattu tiedosto: :file',
            'pull' => 'Ladattu etätiedosto osoitteesta :url kansioon :directory',
            'rename_one' => 'Nimetty uudelleen: :directory:files.0.from -> :directory:files.0.to',
            'rename_other' => 'Nimetty uudelleen :count tiedostoa kansiossa :directory',
            'write' => 'Kirjoitettu uutta sisältöä tiedostoon: :file',
            'upload' => 'Aloitettu tiedoston lataus',
            'uploaded' => 'Ladattu tiedosto: :directory:file',
        ],
        'sftp' => [
            'denied' => 'SFTP-käyttö estetty käyttöoikeuksien vuoksi',
            'create_one' => 'Luotu tiedosto: :files.0',
            'create_other' => 'Luotu :count uutta tiedostoa',
            'write_one' => 'Muokattu tiedoston sisältöä: :files.0',
            'write_other' => 'Muokattu :count tiedoston sisältöä',
            'delete_one' => 'Poistettu tiedosto: :files.0',
            'delete_other' => 'Poistettu :count tiedostoa',
            'create-directory_one' => 'Luotu kansio: :files.0',
            'create-directory_other' => 'Luotu :count kansiota',
            'rename_one' => 'Nimetty uudelleen: :files.0.from -> :files.0.to',
            'rename_other' => 'Nimetty uudelleen tai siirretty :count tiedostoa',
        ],
        'allocation' => [
            'create' => 'Lisätty allokaatio: :allocation palvelimelle',
            'notes' => 'Päivitetty allokaation: :allocation muistiinpanot ":old" -> ":new"',
            'primary' => 'Asetettu allokaatio: :allocation ensisijaiseksi palvelinallokaatioksi',
            'delete' => 'Poistettu allokaatio: :allocation',
        ],
        'schedule' => [
            'create' => 'Luotu aikataulu: :name',
            'update' => 'Päivitetty aikataulu: :name',
            'execute' => 'Suorittanut aikataulu: :name manuaalisesti',
            'delete' => 'Poistettu aikataulu: :name',
        ],
        'task' => [
            'create' => 'Luotu uusi tehtävä ":action" aikatauluun: :name',
            'update' => 'Päivitetty tehtävä ":action" aikatauluun: :name',
            'delete' => 'Poistettu tehtävä aikataulusta: :name',
        ],
        'settings' => [
            'rename' => 'Nimetty palvelin uudelleen: :old -> :new',
            'description' => 'Muokattu palvelimen kuvausta: :old -> :new',
        ],
        'startup' => [
            'edit' => 'Muokattu muuttujaa: :variable ":old" -> ":new"',
            'image' => 'Päivitetty Docker-kuva palvelimelle: :old -> :new',
        ],
        'subuser' => [
            'create' => 'Lisätty alikäyttäjä: :email',
            'update' => 'Päivitetty alikäyttäjän käyttöoikeudet: :email',
            'delete' => 'Poistettu alikäyttäjä: :email',
        ],
    ],
];
