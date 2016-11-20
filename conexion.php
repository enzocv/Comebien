<?php
function Conectarse()
{
    if (!($link = mysql_connect("br-cdbr-azure-south-b.cloudapp.net", "b9015d4f747069", "57390c3e"))) {
        echo "Error conectando a la Base de Datos.";
        exit();
    }
    if (!mysql_select_db("comebien", $link)) {
        echo "Error seleccionando Base de Datos.";
        exit();
    }

    /*if (!($link = mysql_connect("localhost", "root", ""))) {
        echo "Error conectando a la Base de Datos.";
        exit();
    }
    if (!mysql_select_db("comebien", $link)) {
        echo "Error seleccionando Base de Datos.";
        exit();
    }*/

    return $link;
}
