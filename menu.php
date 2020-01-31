<?php

function mainMenu($options)
{
    do {
        echo "Choisissez une des options suivantes:" . PHP_EOL;
        foreach ($options as $key => $value) {
            echo "$key - $value" . PHP_EOL;
        }

        $option = readline('Quelle option voulez-vous? ');

        if (array_key_exists($option, $options))
            return $option;
        else
            echo "Option invalide!" . PHP_EOL;

    } while (!array_key_exists($option, $options));
}
