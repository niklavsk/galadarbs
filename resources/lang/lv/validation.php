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

    'accepted' => 'Jābūt pieņēmamam.',
    'active_url' => 'Ir nepareizs URL.',
    'after' => 'Jābūt datumam vēlākam par :date.',
    'after_or_equal' => 'Jābūt datumam, kas ir vienāds vai vēlāks par :date.',
    'alpha' => 'Var saturēt tikai burtus.',
    'alpha_dash' => 'Var saturēt tikai burtus, ciparus, svītras un apakšsvītras.',
    'alpha_num' => 'Var saturēt tikai burtus un ciparus.',
    'array' => 'Jābūt masīvam.',
    'before' => 'Jābūt datumam agrākam par :date.',
    'before_or_equal' => 'Jābūt datumam, kas ir vienāds vai agrāks :date.',
    'between' => [
        'numeric' => 'Jābūt starp :min un :max.',
        'file' => 'Jābūt starp :min un :max kilobaitiem.',
        'string' => 'Jābūt starp :min un :max burtiem.',
        'array' => 'Jābūt starp :min un :max elementiem.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'Nav pareizs datums.',
    'date_equals' => 'Jābūt vienādam ar datumu: :date.',
    'date_format' => 'Neatbilst formātam :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'Jābūt :digits cipariem.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'Nepareizi attēla izmēri.',
    'distinct' => 'Satur duplikātu.',
    'email' => 'Jābūt korektai e-pasta adresei.',
    'ends_with' => 'Jābeidzas ar :values.',
    'exists' => 'Izvēlētais lauks ":attribute" ir nepareizs.',
    'file' => 'Jābūt failam.',
    'filled' => 'Jāsatur vērtība.',
    'gt' => [
        'numeric' => 'Jābūt stingri lielākam par :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'Nevar būt mazāks par :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'Jābūt attēlam.',
    'in' => 'Izvēlētais attribūts ir nepareizs.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'Jābūt veselam skaitlim.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'Jābūt stingri mazākam par :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'Nevar būt lielāks par :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'Nevar būt lielāks par :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'Nevar būt vairāk par :max simboliem.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'Jābūt faila tipiem: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'Nevar būt mazāks par :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'Jābūt vismaz :min simboliem.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'Ir nepareizs.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'Jābūt skaitlim.',
    'password' => 'Parole ir nepareiza.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'Formāts ir nepareizs.',
    'required' => 'Lauks ir obligāts.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'Jāsakrīt ar :other.',
    'size' => [
        'numeric' => 'Jābūt :size.',
        'file' => 'Jābūt :size kilobaitiem.',
        'string' => 'Jābūt :size simboliem.',
        'array' => 'Jāsatur :size elementu.',
    ],
    'starts_with' => 'Ir jāsākas ar :values.',
    'string' => 'Jābūt teksta virknei.',
    'timezone' => 'Jābūt pareizai zonai.',
    'unique' => 'Jau ir aizņemts.',
    'uploaded' => 'Neizdevās augšupielādēt.',
    'url' => 'Formāts ir nepareizs.',
    'uuid' => 'Jābūt pareizam UUID.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
