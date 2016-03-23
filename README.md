REST API
========

B2B, B2C and B2S platform for online booking of accommodation, transfers, excursions and rent-a-car.

Table of contents
-----------------

**[Things to know](#things-to-know)**
  * [Authentication](#authentication-)
  * [ApiKey](#api-key)
  * [Endpoints](#endpoints)
  
**[Code expamles](#code-examples)**
  * [PHP](#php-)

Things to know:
---------------

###Authentication :
Authentications are performed based on the accountId of the user and the respective apiKey.
{
    "accountId": "2",
    "apiKey":"o5ic8IZCZYPGgmgh"
}

###apiKey:
- apiKey is 16 character length key and it is required for all API calls

###Endpoints:
All API requests should be made to: http://jsonapi.manage-booking.com/

Note: All data is case-sensitive. Language, apiKey and other values are case sensitive. For example, "test" and "Test" are considered two different words.

###POST request:
Methods to retrieve data from the API require a POST request

Code expamles:
--------------

###PHP :

Home method

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
