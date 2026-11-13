<?php

return [
    'accepted'   => ':attribute harus diterima.',
    'array'      => ':attribute harus berupa array.',
    'boolean'    => ':attribute harus bernilai benar atau salah.',
    'confirmed'  => 'Konfirmasi :attribute tidak cocok.',
    'date'       => ':attribute bukan tanggal yang valid.',
    'email'      => ':attribute harus berupa alamat email yang valid.',
    'integer'    => ':attribute harus berupa bilangan bulat.',
    'numeric'    => ':attribute harus berupa angka.',
    'required'   => ':attribute wajib diisi.',
    'string'     => ':attribute harus berupa teks.',
    'unique'     => ':attribute sudah digunakan.',

    'between' => [
        'numeric' => ':attribute harus di antara :min dan :max.',
        'string'  => ':attribute harus di antara :min dan :max karakter.',
    ],
    'max' => [
        'numeric' => ':attribute tidak boleh lebih besar dari :max.',
        'string'  => ':attribute tidak boleh lebih dari :max karakter.',
        'array'   => ':attribute tidak boleh lebih dari :max item.',
    ],
    'min' => [
        'numeric' => ':attribute minimal :min.',
        'string'  => ':attribute minimal :min karakter.',
        'array'   => ':attribute minimal :min item.',
    ],

    'custom' => [],

    'attributes' => [
        'judul'        => 'Judul',
        'penulis'      => 'Penulis',
        'penerbit'     => 'Penerbit',
        'tahun_terbit' => 'Tahun terbit',
        'sinopsis'     => 'Sinopsis',
        'email'        => 'Email',
        'password'     => 'Kata sandi',
    ],
];
