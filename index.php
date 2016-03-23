<?php

    include("curlLib/curlWrap_v1.php");

    // ************************** Get hompage data ********************

    $entity = "homepage";
    $input['data'] = array(
        "accountId" => "2",
        "apiKey" => "o5ic8IZCZYPGgmgh",
        "language" => "en",
        "popularDestinations" => "1"
    );
    $method = "POST";
    $contentType = "application/json";
    $input = json_encode($input);

    $apiResult = curlWrap($entity, $input, $method, $contentType);
    $apiResult = json_decode($apiResult, TRUE);

    echo '<pre>';
    print_r($apiResult);
    echo '</pre>';