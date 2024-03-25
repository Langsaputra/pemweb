<?php

function deskripsiHewan($nama, $jenis) {
    $deskripsi = "";
    switch ($jenis) {
        case "karnivora":
            $deskripsi = "Hewan $nama adalah sejenis karnivora yang pemakan daging.";
            break;
        case "herbivora":
            $deskripsi = "Hewan $nama adalah sejenis herbivora yang pemakan tumbuhan.";
            break;
        case "omnivora":
            $deskripsi = "Hewan $nama adalah sejenis omnivora yang pemakan segalanya, baik daging maupun tumbuhan.";
            break;
        default:
            $deskripsi = "Jenis hewan tidak dikenali.";
            break;
    }
    return $deskripsi;
}