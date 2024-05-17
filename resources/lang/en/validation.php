<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validaatio-kielirivit
    |--------------------------------------------------------------------------
    |
    | Seuraavat kielirivit sisältävät oletusviestit, joita käytetään
    | validaattori-luokan toimesta. Osa säännöistä sisältää useita versioita
    | kuten koko-säännöt. Voit vapaasti muokata jokaista viestiä täällä.
    |
    */

    'accepted' => ':attribute on hyväksyttävä.',
    'active_url' => ':attribute ei ole kelvollinen URL-osoite.',
    'after' => ':attribute on oltava päivämäärä, joka on :date jälkeen.',
    'after_or_equal' => ':attribute on oltava päivämäärä, joka on sama tai myöhemmin kuin :date.',
    'alpha' => ':attribute saa sisältää vain kirjaimia.',
    'alpha_dash' => ':attribute saa sisältää vain kirjaimia, numeroita ja viivoja.',
    'alpha_num' => ':attribute saa sisältää vain kirjaimia ja numeroita.',
    'array' => ':attribute on oltava taulukko.',
    'before' => ':attribute on oltava päivämäärä, joka on ennen :date.',
    'before_or_equal' => ':attribute on oltava päivämäärä, joka on sama tai ennen :date.',
    'between' => [
        'numeric' => ':attribute on oltava :min ja :max väliltä.',
        'file' => ':attribute on oltava :min ja :max kilotavun väliltä.',
        'string' => ':attribute on oltava :min ja :max merkin väliltä.',
        'array' => ':attribute on oltava :min ja :max kohteen väliltä.',
    ],
    'boolean' => ':attribute kentän on oltava tosi tai epätosi.',
    'confirmed' => ':attribute vahvistus ei täsmää.',
    'date' => ':attribute ei ole kelvollinen päivämäärä.',
    'date_format' => ':attribute ei vastaa muotoa :format.',
    'different' => ':attribute ja :other on oltava eri.',
    'digits' => ':attribute on oltava :digits numeroa.',
    'digits_between' => ':attribute on oltava :min ja :max numeron väliltä.',
    'dimensions' => ':attribute sisältää virheelliset kuvan mitat.',
    'distinct' => ':attribute kentällä on kaksoisarvo.',
    'email' => ':attribute on oltava kelvollinen sähköpostiosoite.',
    'exists' => 'Valittu :attribute on virheellinen.',
    'file' => ':attribute on oltava tiedosto.',
    'filled' => ':attribute kenttä on pakollinen.',
    'image' => ':attribute on oltava kuva.',
    'in' => 'Valittu :attribute on virheellinen.',
    'in_array' => ':attribute kenttää ei ole olemassa :other kentässä.',
    'integer' => ':attribute on oltava kokonaisluku.',
    'ip' => ':attribute on oltava kelvollinen IP-osoite.',
    'json' => ':attribute on oltava kelvollinen JSON-merkkijono.',
    'max' => [
        'numeric' => ':attribute ei saa olla suurempi kuin :max.',
        'file' => ':attribute ei saa olla suurempi kuin :max kilotavua.',
        'string' => ':attribute ei saa olla suurempi kuin :max merkkiä.',
        'array' => ':attribute ei saa sisältää enempää kuin :max kohdetta.',
    ],
    'mimes' => ':attribute on oltava tiedostotyyppiä: :values.',
    'mimetypes' => ':attribute on oltava tiedostotyyppiä: :values.',
    'min' => [
        'numeric' => ':attribute on oltava vähintään :min.',
        'file' => ':attribute on oltava vähintään :min kilotavua.',
        'string' => ':attribute on oltava vähintään :min merkkiä.',
        'array' => ':attribute on sisällettävä vähintään :min kohdetta.',
    ],
    'not_in' => 'Valittu :attribute on virheellinen.',
    'numeric' => ':attribute on oltava numero.',
    'present' => ':attribute kentän on oltava olemassa.',
    'regex' => ':attribute muoto on virheellinen.',
    'required' => ':attribute kenttä on pakollinen.',
    'required_if' => ':attribute kenttä on pakollinen, kun :other on :value.',
    'required_unless' => ':attribute kenttä on pakollinen, ellei :other ole arvojen :values joukossa.',
    'required_with' => ':attribute kenttä on pakollinen, kun :values on läsnä.',
    'required_with_all' => ':attribute kenttä on pakollinen, kun :values on läsnä.',
    'required_without' => ':attribute kenttä on pakollinen, kun :values ei ole läsnä.',
    'required_without_all' => ':attribute kenttä on pakollinen, kun mikään arvoista :values ei ole läsnä.',
    'same' => ':attribute ja :other on täsmättävä.',
    'size' => [
        'numeric' => ':attribute on oltava :size.',
        'file' => ':attribute on oltava :size kilotavua.',
        'string' => ':attribute on oltava :size merkkiä.',
        'array' => ':attribute on sisällettävä :size kohdetta.',
    ],
    'string' => ':attribute on oltava merkkijono.',
    'timezone' => ':attribute on oltava kelvollinen aikavyöhyke.',
    'unique' => ':attribute on jo käytössä.',
    'uploaded' => ':attribute epäonnistui lataamisessa.',
    'url' => ':attribute muoto on virheellinen.',

    /*
    |--------------------------------------------------------------------------
    | Mukautetut validaatio-attribuutit
    |--------------------------------------------------------------------------
    |
    | Seuraavia kielirivejä käytetään vaihtamaan attribuutti paikkamerkkejä
    | johonkin lukijaystävällisempään, kuten Sähköpostiosoite sen sijaan
    | että käytettäisiin "sähköposti". Tämä vain auttaa tekemään viesteistä
    | hieman selkeämpiä.
    |
    */

    'attributes' => [],

    // Sisäinen validaatiologiikka Pterodactylille
    'internal' => [
        'variable_value' => ':env muuttuja',
        'invalid_password' => 'Annettu salasana oli virheellinen tälle tilille.',
    ],
];
