<?php

$manifest = [
    0 => [
        "acceptable_sugar_versions" => [
            0 => "",
        ],
    ],
    1 => [
        "acceptable_sugar_flavors" => [
            0 => "CE",
            1 => "PRO",
            2 => "ENT",
        ],
    ],
    "readme" => "",
    "key" => "G",
    "author" => "Ss4U",
    "description" => "",
    "icon" => "",
    "is_uninstallable" => true,
    "name" => "Ss4U-Plugin",
    "published_date" => "2023-01-23 09:24:28",
    "type" => "module",
    "version" => 1.0,
    "remove_tables" => "prompt",
];

$installdefs = [
    "id" => "suitecrm_form_integration",
    "beans" => [
        0 => [
            "module" => "GoogleForm",
            "class" => "GoogleForm",
            "path" => "modules/GoogleForm/GoogleForm.php",
            "tab" => true,
        ],
    ],
    "layoutdefs" => [],
    "relationships" => [],
    "image_dir" => "<basepath>/icons",
    "copy" => [
        0 => [
            "from" => "<basepath>/SugarModules/modules/GoogleForm",
            "to" => "modules/GoogleForm",
        ],
        1 => [
            "from" => "<basepath>/custom/EntryPointRegistry",
            "to" => "custom/Extension/application/Ext/EntryPointRegistry",
        ],
    ],
    "language" => [
        0 => [
            "from" =>
                "<basepath>/SugarModules/language/application/en_us.lang.php",
            "to_module" => "application",
            "language" => "en_us",
        ],
    ],
    "logic_hooks" => [
        [
            "module" => "GoogleForm",
            "hook" => "before_save",
            "order" => 1,
            "description" => "Example module before save hook",
            "file" => "modules/GoogleForm/Sheets.php",
            "class" => "Sheets",
            "function" => "getData",
        ],
    ],
];
