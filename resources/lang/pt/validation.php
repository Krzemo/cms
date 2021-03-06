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

    'accepted'             => 'deverá ser aceite.',
    'active_url'           => 'não contém um URL válido.',
    'after'                => 'deverá conter uma data posterior a :date.',
    'after_or_equal'       => 'deverá conter uma data igual ou posterior a :date.',
    'alpha'                => 'deverá conter apenas letras.',
    'alpha_dash'           => 'deverá conter apenas letras, números e traços.',
    'alpha_num'            => 'deverá conter apenas letras e números .',
    'array'                => 'deverá conter uma coleção de elementos.',
    'before'               => 'deverá conter uma data anterior a :date.',
    'before_or_equal'      => 'deverá conter uma data igual ou anterior a :date.',
    'between'              => [
        'numeric' => 'deverá ter um valor entre :min - :max.',
        'file'    => 'deverá ter um tamanho entre :min - :max kilobytes.',
        'string'  => 'deverá conter entre :min - :max caracteres.',
        'array'   => 'deverá conter entre :min - :max elementos.',
    ],
    'boolean'              => 'deverá conter o valor verdadeiro ou falso.',
    'confirmed'            => 'a confirmação não coincide.',
    'date'                 => 'não contém uma data válida.',
    'date_format'          => 'não respeita o formato :format.',
    'different'            => 'este campo e :other deverão conter valores diferentes.',
    'digits'               => 'deverá conter :digits caracteres.',
    'digits_between'       => 'deverá conter entre :min a :max caracteres.',

    'dimensions'           => 'dimensões de imagem inválidas.',
    'distinct'             => 'este campo tem um valor duplicado.',
    'email'                => 'deve ser um endereço de correio válido.',
    'exists'               => 'isto é inválido.',
    'file'                 => 'deve ser um arquivo.',
    'filled'               => 'deve ter um valor.',
    'gt'                   => [
        'numeric' => 'deve ser superior a :value.',
        'file'    => 'deve ter um tamanho superior a :value kilobytes.',
        'string'  => 'deve ser superior a :value caracteres.',
        'array'   => 'dever mais a :value elementos.',
    ],
    'gte'                  => [
        'numeric' => 'deverá ser igual ou superior a :value.',
        'file'    => 'deverá ter um tamanho igual ou superior a :value kilobytes.',
        'string'  => 'deverá ser igual ou superior a :value caracteres.',
        'array'   => 'deverá ter :value elementos ou mais.',
    ],
    'image'                => 'deverá conter uma imagem.',
    'in'                   => 'não contém um valor válido.',
    'in_array'             => 'não existe em :other.',
    'integer'              => 'deverá conter um número inteiro.',
    'ip'                   => 'deverá ser um endereço IP válido.',
    'ipv4'                 => 'deverá ser um endereço IPv4 válido.',
    'ipv6'                 => 'deverá ser um endereço IPv6 válido.',
    'json'                 => 'deverá ser um sequência JSON válida.',
    'lt'                   => [
        'numeric' => 'deve ser inferior a :value.',
        'file'    => 'deve ter um tamanho inferior a :value kilobytes.',
        'string'  => 'deve ser inferior a :value caracters.',
        'array'   => 'deve ser inferior a :value elementos.',
    ],
    'lte'                  => [
        'numeric' => 'deve ser inferior ou igual a :value.',
        'file'    => 'deve ter um tamanho inferior ou igual a :value kilobytes.',
        'string'  => 'deve ser inferior ou igual a :value caracteres.',
        'array'   => 'deve ser inferior a :value elementos.',
    ],
    'max'                  => [
        'numeric' => 'não deve conter um valor superior a :max.',
        'file'    => 'não deve ter um tamanho superior a :max kilobytes.',
        'string'  => 'não deve ter um tamanho superior a :max caracteres.',
        'array'   => 'não deve ter um tamanho superior a :max elementos.',
    ],
    'mimes'                => 'deve conter um arquivo do tipo: :values.',
    'mimetypes'            => 'deve conter um arquivo do tipo: :values.',
    'min'                  => [
        'numeric' => 'deve ser no mínimo :min.',
        'file'    => 'deve ter no mínimo :min kilobytes.',
        'string'  => 'deve ter no mínimo :min caracteres.',
        'array'   => 'deve ter no mínimo :min elementos.',
    ],
    'not_in'               => 'contém um valor inválido.',
    'not_regex'            => 'formáto é inválido.',
    'numeric'              => 'deve ser um número.',
    'present'              => 'deve estar presente.',
    'regex'                => 'formáto é inválido.',
    'required'             => 'Este campo é obrigatório.',
    'required_if'          => 'Este campo é obrigatório quando :other é :value.',
    'required_unless'      => 'Este campo é obrigatório excepto quando :other está entre :values.',
    'required_with'        => 'Este campo é obrigatório quando :values está presente.',
    'required_with_all'    => 'Este campo é obrigatório quando :values está presente.',
    'required_without'     => 'Este campo é obrigatório quando :values não está presente.',
    'required_without_all' => 'Este campo é obrigatório quando nenhum dos :values está presente.',
    'same'                 => 'Este campo e :other devem coincidir.',
    'size'                 => [
        'numeric' => 'deve ser :size.',
        'file'    => 'deve ter :size kilobytes.',
        'string'  => 'deve ter :size caracteres.',
        'array'   => 'deve conter :size elementos.',
    ],
    'string'               => 'deve ser texto.',
    'timezone'             => 'deve ser uma zona válida.',
    'unique'               => 'Este valor já foi usado.',
    'uploaded'             => 'Falha no carregamento.',
    'url'                  => 'formato é inválido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Statamic Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may validation messages for the custom rules provided by Statamic.
    |
    */

    'unique_entry_value' => 'Este valor já foi usado.',
    'unique_user_value' => 'Este valor já foi usado.',

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
