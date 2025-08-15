<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

$ch = curl_init(API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // ignorar SSL
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // ignorar SSL

$result = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error de cURL: ' . curl_error($ch);
} else {
    $data = json_decode($result, true);
    if ($data === null) {
        echo "Error al decodificar JSON: $result";
    }
}

curl_close($ch);

?>

<head>
    <meta charset="UTF-8" />
    <title>La próxima película de Marvel</title>
    <meta name="description" content="La próxima película de Marvel" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Centered viewport -->
    <link
        rel=" stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
</head>




<main>
    <pre style="font-size: 15px; overflow: scroll; height: 450px;">
        <?php var_dump($data); ?>
    </pre>

    <section>
        <img src="<?= $data["poster_url"]; ?> width=" 300" alt="Poster de <?= $data["title"]; ?>"
            style="border-radius: 16px" />
    </section>

    <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> días</h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p>La siguiente es: <?= $data["following_production"]["title"] ?></p>
</main>