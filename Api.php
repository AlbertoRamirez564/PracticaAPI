<?php

// URL de la API
$apiURL = 'https://cat-fact.herokuapp.com/facts/random';

// Realizar solicitud GET a la API
$response = file_get_contents($apiURL);

// Decodificar la respuesta JSON
$data = json_decode($response, true);

// Mostrar los datos en formato HTML
echo '<h2>Facts about Cats</h2>';
echo '<p><strong>ID:</strong> ' . $data['_id'] . '</p>';
echo '<p><strong>Fact:</strong> ' . $data['text'] . '</p>';
echo '<p><strong>Type:</strong> ' . $data['type'] . '</p>';
echo '<p><strong>Created At:</strong> ' . $data['createdAt'] . '</p>';
?>
