<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validatie Taalregels
    |--------------------------------------------------------------------------
    |
    | De volgende taalregels bevatten de standaard foutmeldingen die door
    | de validatieklasse worden gebruikt. Je mag deze regels aanpassen naar wens
    | zodat ze beter passen bij jouw applicatie.
    |
    */

    'accepted' => 'Het :attribute moet worden geaccepteerd.',
    'accepted_if' => 'Het :attribute moet worden geaccepteerd wanneer :other :value is.',
    'active_url' => 'Het :attribute is geen geldige URL.',
    'after' => 'Het :attribute moet een datum na :date zijn.',
    'after_or_equal' => 'Het :attribute moet een datum na of gelijk aan :date zijn.',
    'alpha' => 'Het :attribute mag alleen letters bevatten.',
    'alpha_dash' => 'Het :attribute mag alleen letters, cijfers, streepjes en underscores bevatten.',
    'alpha_num' => 'Het :attribute mag alleen letters en cijfers bevatten.',
    'array' => 'Het :attribute moet een array zijn.',
    'ascii' => 'Het :attribute mag alleen enkel-byte alfanumerieke tekens en symbolen bevatten.',
    'before' => 'Het :attribute moet een datum vóór :date zijn.',
    'before_or_equal' => 'Het :attribute moet een datum vóór of gelijk aan :date zijn.',
    'between' => [
        'array' => 'Het :attribute moet tussen :min en :max items bevatten.',
        'file' => 'Het :attribute moet tussen :min en :max kilobytes zijn.',
        'numeric' => 'Het :attribute moet tussen :min en :max liggen.',
        'string' => 'Het :attribute moet tussen :min en :max tekens zijn.',
    ],
    'boolean' => 'Het :attribute veld moet waar of onwaar zijn.',
    'confirmed' => 'De :attribute bevestiging komt niet overeen.',
    'current_password' => 'Het wachtwoord is onjuist.',
    'date' => 'Het :attribute is geen geldige datum.',
    'date_equals' => 'Het :attribute moet een datum gelijk aan :date zijn.',
    'date_format' => 'Het :attribute komt niet overeen met het formaat :format.',
    'decimal' => 'Het :attribute moet :decimal decimalen bevatten.',
    'declined' => 'Het :attribute moet worden afgewezen.',
    'declined_if' => 'Het :attribute moet worden afgewezen wanneer :other :value is.',
    'different' => 'Het :attribute en :other moeten verschillend zijn.',
    'digits' => 'Het :attribute moet :digits cijfers zijn.',
    'digits_between' => 'Het :attribute moet tussen :min en :max cijfers zijn.',
    'dimensions' => 'Het :attribute heeft ongeldige afbeeldingsafmetingen.',
    'distinct' => 'Het :attribute veld heeft een dubbele waarde.',
    'doesnt_end_with' => 'Het :attribute mag niet eindigen met een van de volgende: :values.',
    'doesnt_start_with' => 'Het :attribute mag niet beginnen met een van de volgende: :values.',
    'email' => 'Het :attribute moet een geldig e-mailadres zijn.',
    'ends_with' => 'Het :attribute moet eindigen met één van de volgende: :values.',
    'enum' => 'Het geselecteerde :attribute is ongeldig.',
    'exists' => 'Het geselecteerde :attribute is ongeldig.',
    'file' => 'Het :attribute moet een bestand zijn.',
    'filled' => 'Het :attribute veld moet een waarde bevatten.',
    'gt' => [
        'array' => 'Het :attribute moet meer dan :value items bevatten.',
        'file' => 'Het :attribute moet groter zijn dan :value kilobytes.',
        'numeric' => 'Het :attribute moet groter zijn dan :value.',
        'string' => 'Het :attribute moet meer dan :value tekens zijn.',
    ],
    'gte' => [
        'array' => 'Het :attribute moet :value items of meer bevatten.',
        'file' => 'Het :attribute moet groter zijn of gelijk aan :value kilobytes.',
        'numeric' => 'Het :attribute moet groter zijn of gelijk aan :value.',
        'string' => 'Het :attribute moet groter zijn of gelijk aan :value tekens.',
    ],
    'image' => 'Het :attribute moet een afbeelding zijn.',
    'in' => 'Het geselecteerde :attribute is ongeldig.',
    'in_array' => 'Het :attribute veld bestaat niet in :other.',
    'integer' => 'Het :attribute moet een geheel getal zijn.',
    'ip' => 'Het :attribute moet een geldig IP-adres zijn.',
    'ipv4' => 'Het :attribute moet een geldig IPv4-adres zijn.',
    'ipv6' => 'Het :attribute moet een geldig IPv6-adres zijn.',
    'json' => 'Het :attribute moet een geldige JSON-string zijn.',
    'lowercase' => 'Het :attribute moet kleine letters bevatten.',
    'lt' => [
        'array' => 'Het :attribute moet minder dan :value items bevatten.',
        'file' => 'Het :attribute moet kleiner zijn dan :value kilobytes.',
        'numeric' => 'Het :attribute moet kleiner zijn dan :value.',
        'string' => 'Het :attribute moet minder dan :value tekens zijn.',
    ],
    'lte' => [
        'array' => 'Het :attribute mag niet meer dan :value items bevatten.',
        'file' => 'Het :attribute moet kleiner zijn of gelijk aan :value kilobytes.',
        'numeric' => 'Het :attribute moet kleiner zijn of gelijk aan :value.',
        'string' => 'Het :attribute moet kleiner zijn of gelijk aan :value tekens.',
    ],
    'mac_address' => 'Het :attribute moet een geldig MAC-adres zijn.',
    'max' => [
        'array' => 'Het :attribute mag niet meer dan :max items bevatten.',
        'file' => 'Het :attribute mag niet groter zijn dan :max kilobytes.',
        'numeric' => 'Het :attribute mag niet groter zijn dan :max.',
        'string' => 'Het :attribute mag niet meer dan :max tekens zijn.',
    ],
    'max_digits' => 'Het :attribute mag niet meer dan :max cijfers bevatten.',
    'mimes' => 'Het :attribute moet een bestand van het type: :values zijn.',
    'mimetypes' => 'Het :attribute moet een bestand van het type: :values zijn.',
    'min' => [
        'array' => 'Het :attribute moet ten minste :min items bevatten.',
        'file' => 'Het :attribute moet minimaal :min kilobytes zijn.',
        'numeric' => 'Het :attribute moet minimaal :min zijn.',
        'string' => 'Het :attribute moet minimaal :min tekens zijn.',
    ],
    'min_digits' => 'Het :attribute moet ten minste :min cijfers bevatten.',
    'multiple_of' => 'Het :attribute moet een veelvoud van :value zijn.',
    'not_in' => 'Het geselecteerde :attribute is ongeldig.',
    'not_regex' => 'Het :attribute formaat is ongeldig.',
    'numeric' => 'Het :attribute moet een getal zijn.',
    'password' => [
        'letters' => 'Het :attribute moet minimaal één letter bevatten.',
        'mixed' => 'Het :attribute moet minimaal één hoofdletter en één kleine letter bevatten.',
        'numbers' => 'Het :attribute moet minimaal één cijfer bevatten.',
        'symbols' => 'Het :attribute moet minimaal één symbool bevatten.',
        'uncompromised' => 'Het opgegeven :attribute is verschenen in een datalek. Kies een ander :attribute.',
    ],
    'present' => 'Het :attribute veld moet aanwezig zijn.',
    'prohibited' => 'Het :attribute veld is niet toegestaan.',
    'prohibited_if' => 'Het :attribute veld is niet toegestaan wanneer :other :value is.',
    'prohibited_unless' => 'Het :attribute veld is niet toegestaan tenzij :other in :values zit.',
    'prohibits' => 'Het :attribute veld staat niet toe dat :other aanwezig is.',
    'regex' => 'Het :attribute formaat is ongeldig.',
    'required' => 'Het :attribute veld is verplicht.',
    'required_array_keys' => 'Het :attribute veld moet ingangen bevatten voor: :values.',
    'required_if' => 'Het :attribute veld is verplicht wanneer :other :value is.',
    'required_if_accepted' => 'Het :attribute veld is verplicht wanneer :other is geaccepteerd.',
    'required_unless' => 'Het :attribute veld is verplicht tenzij :other in :values zit.',
    'required_with' => 'Het :attribute veld is verplicht wanneer :values aanwezig is.',
    'required_with_all' => 'Het :attribute veld is verplicht wanneer :values aanwezig zijn.',
    'required_without' => 'Het :attribute veld is verplicht wanneer :values niet aanwezig is.',
    'required_without_all' => 'Het :attribute veld is verplicht wanneer geen van :values aanwezig zijn.',
    'same' => 'Het :attribute en :other moeten overeenkomen.',
    'size' => [
        'array' => 'Het :attribute moet :size items bevatten.',
        'file' => 'Het :attribute moet :size kilobytes zijn.',
        'numeric' => 'Het :attribute moet :size zijn.',
        'string' => 'Het :attribute moet :size tekens zijn.',
    ],
    'starts_with' => 'Het :attribute moet beginnen met één van de volgende: :values.',
    'string' => 'Het :attribute moet een tekenreeks zijn.',
    'timezone' => 'Het :attribute moet een geldige tijdzone zijn.',
    'unique' => 'Het :attribute is al in gebruik.',
    'uploaded' => 'Het :attribute kon niet worden geüpload.',
    'uppercase' => 'Het :attribute moet hoofdletters bevatten.',
    'url' => 'Het :attribute moet een geldige URL zijn.',
    'ulid' => 'Het :attribute moet een geldige ULID zijn.',
    'uuid' => 'Het :attribute moet een geldige UUID zijn.',

    /*
    |--------------------------------------------------------------------------
    | Aangepaste validatieregels
    |--------------------------------------------------------------------------
    |
    | Hier kun je aangepaste validatieregels definieren voor attributen.
    |
    */

    'custom' => [
        'name' => [
            'required' => 'U dient uw naam in te vullen.',
        ],
        'email' => [
            'required' => 'U dient uw e-mailadres in te vullen.',
            'email' => 'Vul een geldig e-mailadres in.',
        ],
        'password' => [
            'required' => 'U dient uw wachtwoord in te vullen.',
        ],
        'message' => [
            'required' => 'Het berichtveld mag niet leeg zijn.',
        ],
        'accept_policy' => [
            'accepted' => 'U dient akkoord te gaan met de voorwaarden.'
        ],
        'accept_terms' => [
            'required' => 'U dient akkoord te gaan met de algemene voorwaarden.',
            'accepted' => 'U dient akkoord te gaan met de algemene voorwaarden.'
        ],
        'comment' => [
            'required' => 'U dient een opmerking of vraag in te vullen.',
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Aangepaste validatieattributen
    |--------------------------------------------------------------------------
    |
    | De volgende regels worden gebruikt om attributen leesbaarder te maken.
    |
    */


    'attributes' => [
        'name' => 'naam',
        'email' => 'e-mailadres',
        'password' => 'wachtwoord',
        'phone' => 'telefoonnummer',
        'message' => 'bericht',
        'accept_policy' => 'voorwaarden',
        'accept_terms' => 'algemene voorwaarden',
        'comment' => 'opmerking',
    ],

];
