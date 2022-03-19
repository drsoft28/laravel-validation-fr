<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contiennent the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    "accepted"         => "Le champ :attribute doit être accepté.",
    "active_url"       => "Le champ :attribute n'est pas une URL valide.",
    "after"            => "Le champ :attribute doit être une date postérieure au :date.",
    'after_or_equal' => 'Le champ :attribute doit être une date postérieure ou égual au :date.',
    "alpha"            => "Le champ :attribute doit seulement contenir des lettres.",
    "alpha_dash"       => "Le champ :attribute doit seulement contenir des lettres, des chiffres et des tirets.",
    "alpha_num"        => "Le champ :attribute doit seulement contenir des chiffres et des lettres.",
    'array' => 'Le champ :attribute doit être une tableau.',
    "before"           => "Le champ :attribute doit être une date antérieure au :date.",
    'before_or_equal' => 'Le champ :attribute doit être une date antérieure ou égale au :date.',
    'between' => [
        "numeric" => "La valeur de :attribute doit être comprise entre :min et :max.",
        "file"    => "Le fichier :attribute doit avoir une taille entre :min et :max kilobytes.",
        "string"  => "Le texte :attribute doit avoir entre :min et :max caractères.",
        'array' => 'Le tableau :attribute doit avoir entre :min et :max elements.',
    ],
    'boolean' => 'Le champ :attribute  doit être vrai ou faux.',
    "confirmed"        => "Le champ de confirmation :attribute ne correspond pas.",
    "date"             => "Le champ :attribute n'est pas une date valide.",
    'date_equals' => 'Le champ :attribute doit être une date égale au :date.',
    "date_format"      => "Le champ :attribute ne correspond pas au format :format.",
    "different"        => "Les champs :attribute et :other doivent être différents.",
    "digits"           => "Le champ :attribute doit avoir :digits chiffres.",
    "digits_between"   => "Le champ :attribute doit avoir entre :min and :max chiffres.",
    'dimensions' => "Le champ :attribute a des dimensions d'image non valides.",
    'distinct' => 'Le champ :attribute a une valeur en double.',
    "email"            => "Le format du champ :attribute est invalide.",
    'ends_with' => 'Le champ :attribute doit se terminer par l\'un des éléments suivants: :values.',
    'exists' => "Le champ :attribute sélectionné n'est pas valide",
    'file' => 'Le champ :attribute doit être un fichier.',
    'filled' => 'Le champ :attribute doit avoir une valeur.',
    'gt' => [
        'numeric' => 'Le champ :attribute doit être plus que :value.',
        'file' => 'Le champ :attribute doit être plus que :value kilobytes.',
        'string' => 'Le champ :attribute doit être plus que :value characters.',
        'array' => 'Le champ :attribute doit être plus que :value elements.',
    ],
    'gte' => [
        'numeric' => 'Le champ :attribute doit être plus que ou égale :value.',
        'file' => 'Le champ :attribute doit être plus que ou égale :value kilobytes.',
        'string' => 'Le champ :attribute doit être plus que ou égale :value characters.',
        'array' => 'Le champ :attribute doit avoir :value elements ou plus.',
    ],
    'image' => 'Le champ :attribute doit être an image.',
    "in"   => "Le champ :attribute est invalide.",
    'in_array' => 'Le champ :attribute n\'existe pas dans :other.',
    "integer" => "Le champ :attribute doit être un entier.",
    "ip" => "Le champ :attribute doit être une adresse IP valide.",
    'ipv4' => 'Le champ :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'Le champ :attribute doit être une adresse IPv6 valide.',
    'json' => 'Le champ :attribute doit être une format JSON valide.',
    'lt' => [
        'numeric' => 'Le champ :attribute doit être inférieur à :value.',
        'file' => 'Le champ :attribute doit être inférieur à :value kilobytes.',
        'string' => 'Le champ :attribute doit être inférieur à :value characters.',
        'array' => 'Le champ :attribute doit être inférieur à :value elements.',
    ],
    'lte' => [
        'numeric' => 'Le champ :attribute doit être inférieur ou égale à :value.',
        'file' => 'Le champ :attribute doit être inférieur ou égale à :value kilobytes.',
        'string' => 'Le champ :attribute doit être inférieur ou égale à :value characters.',
        'array' => 'Le champ :attribute ne doit pas avoir plus de :value elements.',
    ],
    'max' => [
        "numeric" => "La valeur de :attribute ne peut être supérieure à :max.",
        "file"    => "Le fichier :attribute ne peut être plus gros que :max kilobytes.",
        "string"  => "Le texte de :attribute ne peut contenir plus de :max caractères.",
        'array' => 'Le tableau :attribute ne peut contenir plus de :max elements.',
    ],
    "mimes"            => "Le champ :attribute doit être un fichier de type : :values.",
    'mimetypes' => 'Le champ :attribute doit être un fichier de type: :values.',
    'min' => [
        "numeric" => "La valeur de :attribute doit être inférieure à :min.",
        "file"    => "Le fichier :attribute doit être plus que gros que :min kilobytes.",
        "string"  => "Le texte :attribute doit contenir au moins :min caractères.",
        'array' => 'Le champ :attribute doit contenir au moins :min elements.',
    ],
    "not_in"           => "Le champ :attribute sélectionné n'est pas valide.",
    'not_regex' => "Le format du champ :attribute est invalide.",
    "numeric"          => "Le champ :attribute doit contenir un nombre.",
    'password' => 'Le mot de passe est incorrect.',
    'present' => 'Le champ :attribute field doit être present.',
    "regex"            => "Le format du champ :attribute est invalide.",
    "required"         => "Le champ :attribute est obligatoire.",
    "required_if"      => "Le champ :attribute est obligatoire quand la valeur de :other est :value.",
  
    'required_unless' => 'Le champ :attribute est obligatoire sauf si :other est dans :values.',
    "required_with"    => "Le champ :attribute est obligatoire quand :values est présent.",
    'required_with_all' => 'Le champ :attribute est obligatoire quand :values est présent.',
    "required_without" => "Le champ :attribute est obligatoire quand :values n'est pas présent.",
    'required_without_all' => 'Le champ :attribute st obligatoire quand aucun de :values sont présent.',
    'same' => 'Le champ :attribute et :other doit correspondre.',
    'size' => [
        'numeric' => 'Le champ :attribute doit être :size.',
        'file' => 'Le champ :attribute doit être :size kilobytes.',
        'string' => 'Le champ :attribute doit être :size characters.',
        'array' => 'Le champ :attribute doit contenir :size elements.',
    ],
    'starts_with' => 'Le champ :attribute doit commencer par l\'un des éléments suivants: :values.',
    'string' => 'Le champ :attribute doit être characters.',
    'timezone' => 'Le champ :attribute doit être fuseau horaire valide.',
    "unique"           => "La valeur du champ :attribute est déjà utilisée.",
    'uploaded' => 'Le champ :attribute n\'a pas pu être téléchargé.',
    "url"              => "Le format de l'URL de :attribute n'est pas valide.",
    "uuid"              => "Le format de :attribute doit être UUID.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributs using the
    | convention "attribut.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribut rule.
    |
    */

    'custom' => [
        'attribut-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation attributs
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribut placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [

    ],

];
