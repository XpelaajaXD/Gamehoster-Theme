<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => 'Annettu FQDN tai IP-osoite ei ratkea kelvolliseksi IP-osoitteeksi.',
        'fqdn_required_for_ssl' => 'Jotta voit käyttää SSL:ää tälle solmulle, tarvitaan täysin määritelty verkkotunnusnimi, joka ratkeaa julkiseksi IP-osoitteeksi.',
    ],
    'notices' => [
        'allocations_added' => 'Varaukset on lisätty onnistuneesti tälle solmulle.',
        'node_deleted' => 'Solmu on poistettu onnistuneesti paneelista.',
        'location_required' => 'Sinun on oltava vähintään yksi sijainti määritettynä, ennen kuin voit lisätä solmun tähän paneeliin.',
        'node_created' => 'Uusi solmu luotiin onnistuneesti. Voit määrittää daemonin tälle koneelle automaattisesti vierailemalla \'Configuration\' -välilehdessä. <strong>Ennen kuin voit lisätä mitään palvelimia, sinun on ensin varattava vähintään yksi IP-osoite ja portti.</strong>',
        'node_updated' => 'Solmun tiedot on päivitetty. Jos mitään daemonin asetuksia muutettiin, sinun on käynnistettävä se uudelleen, jotta nämä muutokset tulevat voimaan.',
        'unallocated_deleted' => 'Poistettiin kaikki varattomat portit <code>:ip</code>.',
    ],
];
