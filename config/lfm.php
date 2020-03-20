<?php

return [
    'rename_file' => false,
    'alphanumeric_filename'=> true,
    'alphanumeric_directory'=>false,
    'use_package_routes' => true,
    'base_directory' => 'public',

    'images_folder_name' => 'images',
    'files_folder_name'  => 'files',

    'shared_folder_name' => 'shares',
    'thumb_folder_name'  => 'thumbs',


    'images_dir'         => 'public/images/',
    'images_url'         => '/images/',
    'images_startup_view' => 'list',

    'files_dir'          => 'public/files/',
    'files_url'          => '/files/',
    'files_startup_view' => 'grid',

    'allow_multi_user'   => true,
    'max_image_size' => 500,
    'max_file_size'=>1000,
//    'user_field'         => "\Auth::user()->name",
    'user_field'         => 'id',
    'middlewares'        => ['web', 'auth'],
    'prefix' =>'laravel-filemanager',
    'file_type_array'         => [
        "pdf"  => "Adobe Acrobat",
        "docx" => "Microsoft Word",
        "docx" => "Microsoft Word",
        "xls"  => "Microsoft Excel",
        "xls"  => "Microsoft Excel",
        "zip"  => 'Archive',
        "gif"  => 'GIF Image',
        "jpg"  => 'JPEG Image',
        "jpeg" => 'JPEG Image',
        "png"  => 'PNG Image',
        "ppt"  => 'Microsoft PowerPoint',
        "pptx" => 'Microsoft PowerPoint',
    ],

    'file_icon_array'         => [
        "pdf"  => "fa-file-pdf-o",
        "docx" => "fa-file-word-o",
        "docx" => "fa-file-word-o",
        "xls"  => "fa-file-excel-o",
        "xls"  => "fa-file-excel-o",
        "zip"  => 'fa-file-archive-o',
        "gif"  => 'fa-file-image-o',
        "jpg"  => 'fa-file-image-o',
        "jpeg" => 'fa-file-image-o',
        "png"  => 'fa-file-image-o',
        "ppt"  => 'fa-file-powerpoint-o',
        "pptx" => 'fa-file-powerpoint-o',
    ],
];
