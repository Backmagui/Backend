<?php

$usuarios = [
    ["id" => 1,
    "nome" =>"João",
    "cidade" => "Cerquilho",
    "estado" => "sp"
    ],
    ["id" => 2,
    "nome" =>"Pedro",
    "cidade" => "Tiête",
    "estado" => "sp"
    ],
    ["id" => 3,
    "nome" =>"Carlos",
    "cidade" => "São Bernardo",
    "estado" => "sp"
    ],
    ["id" => 4,
    "nome" =>"Maria",
    "cidade" => "Niterói",
    "estado" => "rj"
    ],
    ["id" => 5,
    "nome" =>"Ana",
    "cidade" => "Boituva",
    "estado" => "sp"
    ]
    
];

$busca = "Maria";

echo '<pre>';
print_r($usuarios);
echo '</pre>';

echo '<hr>';
echo $busca;



?>