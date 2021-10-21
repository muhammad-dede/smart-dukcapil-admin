<?php

return [

    'accepted' => ':attribute must be accepted.',
    'accepted_if' => ':attribute must be accepted when :other is :value.',
    'active_url' => ':attribute is not a valid URL.',
    'after' => ':attribute must be a date after :date.',
    'after_or_equal' => ':attribute must be a date after or equal to :date.',
    'alpha' => ':attribute must only contain letters.',
    'alpha_dash' => ':attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => ':attribute must only contain letters and numbers.',
    'array' => ':attribute must be an array.',
    'before' => ':attribute must be a date before :date.',
    'before_or_equal' => ':attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => ':attribute harus antara :min dan :max.',
        'file' => ':attribute harus antara :min and :max kilobytes.',
        'string' => ':attribute harus antara :min dan :max characters.',
        'array' => ':attribute harus memiliki antara :min dan :max items.',
    ],
    'boolean' => ':attribute field must be true or false.',
    'confirmed' => ':attribute konfirmasi tidak cocok.',
    'current_password' => 'Kata sandi salah.',
    'date' => ':attribute bukan tanggal yang valid.',
    'date_equals' => ':attribute must be a date equal to :date.',
    'date_format' => ':attribute tidak sesuai format :format.',
    'different' => ':attribute and :other must be different.',
    'digits' => ':attribute harus :digits digits.',
    'digits_between' => ':attribute harus antara :min and :max digits.',
    'dimensions' => ':attribute has invalid image dimensions.',
    'distinct' => ':attribute field has a duplicate value.',
    'email' => ':attribute harus email yang valid.',
    'ends_with' => ':attribute must end with one of following: :values.',
    'exists' => ':attribute tidak valid.',
    'file' => ':attribute harus file.',
    'filled' => ':attribute tidak boleh kosong.',
    'gt' => [
        'numeric' => ':attribute harus lebih besar dari :value.',
        'file' => ':attribute harus lebih besar dari :value kilobytes.',
        'string' => ':attribute harus lebih besar dari :value characters.',
        'array' => ':attribute harus memiliki lebih dari :value items.',
    ],
    'gte' => [
        'numeric' => ':attribute harus lebih besar dari or equal :value.',
        'file' => ':attribute harus lebih besar dari or equal :value kilobytes.',
        'string' => ':attribute harus lebih besar dari or equal :value characters.',
        'array' => ':attribute must have :value items or more.',
    ],
    'image' => ':attribute harus gambar.',
    'in' => 'selected :attribute is invalid.',
    'in_array' => ':attribute field does not exist in :other.',
    'integer' => ':attribute must be an integer.',
    'ip' => ':attribute must be a valid IP address.',
    'ipv4' => ':attribute must be a valid IPv4 address.',
    'ipv6' => ':attribute must be a valid IPv6 address.',
    'json' => ':attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => ':attribute must be less than :value.',
        'file' => ':attribute must be less than :value kilobytes.',
        'string' => ':attribute must be less than :value characters.',
        'array' => ':attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => ':attribute must be less than or equal :value.',
        'file' => ':attribute must be less than or equal :value kilobytes.',
        'string' => ':attribute must be less than or equal :value characters.',
        'array' => ':attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => ':attribute tidak boleh lebih besar than :max angka.',
        'file' => ':attribute tidak boleh lebih besar than :max kilobyte.',
        'string' => ':attribute tidak boleh lebih besar than :max karakter.',
        'array' => ':attribute tidak boleh lebih dari :max item.',
    ],
    'mimes' => ':attribute harus berupa file type: :values.',
    'mimetypes' => ':attribute harus berupa file type: :values.',
    'min' => [
        'numeric' => ':attribute harus setidaknya :min angka',
        'file' => ':attribute harus setidaknya :min kilobyte.',
        'string' => ':attribute harus setidaknya :min karakter.',
        'array' => ':attribute harus memiliki setidaknya :min item.',
    ],
    'multiple_of' => ':attribute must be a multiple of :value.',
    'not_in' => 'selected :attribute is invalid.',
    'not_regex' => ':attribute format is invalid.',
    'numeric' => ':attribute harus diisi dengan angka.',
    'password' => 'Password salah.',
    'present' => ':attribute field must be present.',
    'regex' => ':attribute format tidak valid.',
    'required' => ':attribute harus diisi.',
    'required_if' => ':attribute field is required when :other is :value.',
    'required_unless' => ':attribute field is required unless :other is in :values.',
    'required_with' => ':attribute field is required when :values is present.',
    'required_with_all' => ':attribute field is required when :values are present.',
    'required_without' => ':attribute field is required when :values is not present.',
    'required_without_all' => ':attribute field is required when none of :values are present.',
    'prohibited' => ':attribute field is prohibited.',
    'prohibited_if' => ':attribute field is prohibited when :other is :value.',
    'prohibited_unless' => ':attribute field is prohibited unless :other is in :values.',
    'prohibits' => ':attribute field prohibits :other from being present.',
    'same' => ':attribute and :other must match.',
    'size' => [
        'numeric' => ':attribute harus :size.',
        'file' => ':attribute harus :size kilobyte.',
        'string' => ':attribute harus :size karakter.',
        'array' => ':attribute must contain :size item.',
    ],
    'starts_with' => ':attribute must start with one of following: :values.',
    'string' => ':attribute harus berupa string.',
    'timezone' => ':attribute must be a valid timezone.',
    'unique' => ':attribute sudah terdaftar.',
    'uploaded' => ':attribute failed to upload.',
    'url' => ':attribute must be a valid URL.',
    'uuid' => ':attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name lines. This makes it quick to
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
    | following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
