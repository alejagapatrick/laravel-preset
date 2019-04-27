<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute må være akseptert.',
    'active_url'           => ':attribute er ikke en gyldig URL.',
    'after'                => ':attribute må være en dato etter :date.',
    'after_or_equal'       => ':attribute må være dato etter eller lik :date.',
    'alpha'                => ':attribute kan bare innholde bokstaver.',
    'alpha_dash'           => ':attribute kan bare innholde bokstaver, nummere og dasher.',
    'alpha_num'            => ':attribute kan bare innholde bokstaver og nummere.',
    'array'                => ':attribute må være en array.',
    'before'               => ':attribute må være en dato før :date.',
    'before_or_equal'      => ':attribute må være dato før eller lik :date.',
    'between'              => [
        'numeric' => ':attribute må være mellom :min og :max.',
        'file'    => ':attribute må være mellom :min og :max kilobytes.',
        'string'  => ':attribute må være mellom :min og :max tegn.',
        'array'   => ':attribute må innholde mellom :min og :max enheter.',
    ],
    'boolean'              => ':attribute feltet må være SANN eller USANN.',
    'confirmed'            => ':attribute bekreftelsen stemmer ikke.',
    'date'                 => ':attribute er ikke en gyldig dato.',
    'date_format'          => ':attribute stemmer ikke med formatet :format.',
    'different'            => ':attribute og :other må være forskjellige.',
    'digits'               => ':attribute må være :digits tall.',
    'digits_between'       => ':attribute må være mellom :min og :max tall.',
    'dimensions'           => ':attribute har ugyldig bilde dimensjoner.',
    'distinct'             => ':attribute har en duplikat verdi.',
    'email'                => ':attribute må være en gyldig e-post adresse.',
    'exists'               => 'Den valgte :attribute er ugyldig.',
    'file'                 => ':attribute må være en fil.',
    'filled'               => ':attribute feltet må inneholde en verdi.',
    'image'                => ':attribute må være et bilde.',
    'in'                   => 'Den valgte :attribute er ugyldig.',
    'in_array'             => ':attribute feltet eksisterer ikke i :other.',
    'integer'              => ':attribute må være av typen integer.',
    'ip'                   => ':attribute må være en gyldig IP adresse.',
    'ipv4'                 => ':attribute må være en gyldig IPv4 adresse.',
    'ipv6'                 => ':attribute må være en gyldig IPv6 adresse.',
    'json'                 => ':attribute må være en gyldig JSON string.',
    'max'                  => [
        'numeric' => ':attribute kan ikke være større enn :max.',
        'file'    => ':attribute kan ikke være større enn :max kilobytes.',
        'string'  => ':attribute kan ikke være større enn :max tegn.',
        'array'   => ':attribute kan ikke være større enn :max enheter.',
    ],
    'mimes'                => ':attribute må være en fil av type: :values.',
    'mimetypes'            => ':attribute må være en fil av type: :values.',
    'min'                  => [
        'numeric' => ':attribute kan ikke være mindre enn :min.',
        'file'    => ':attribute kan ikke være mindre enn :min kilobytes.',
        'string'  => ':attribute kan ikke være mindre enn :min tegn.',
        'array'   => ':attribute kan ikke være mindre enn :min enheter.',
    ],
    'not_in'               => 'Den valgte :attribute er ugyldig.',
    'numeric'              => ':attribute må være et tall.',
    'present'              => ':attribute feltet må være tilstede.',
    'regex'                => ':attribute formatet er ugyldig.',
    'required'             => ':attribute er obligatorisk.',
    'required_if'          => ':attribute er obligatorisk når :other er :value.',
    'required_unless'      => ':attribute er obligatorisk med mindre :other er i :values.',
    'required_with'        => ':attribute er obligatorisk når :values er tilstede.',
    'required_with_all'    => ':attribute er obligatorisk når :values er tilstede.',
    'required_without'     => ':attribute er obligatorisk når :values ikke er tilstede.',
    'required_without_all' => ':attribute er obligatorisk når ingen av :values er tilstede.',
    'same'                 => ':attribute og :other må være like.',
    'size'                 => [
        'numeric' => ':attribute må være :size.',
        'file'    => ':attribute må være :size kilobytes.',
        'string'  => ':attribute må være :size tegn.',
        'array'   => ':attribute må være :size enheter.',
    ],
    'string'               => ':attribute må være av typen string.',
    'timezone'             => ':attribute må være en gyldig tidssone.',
    'unique'               => ':attribute er allerede tatt.',
    'uploaded'             => ':attribute feilet ved opplastning.',
    'url'                  => ':attribute formatet er ugyldig.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
