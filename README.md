REST API
========

B2B, B2C and B2S platform for online booking of accommodation, transfers, excursions and rent-a-car.

Table of contents
-----------------

**[Things to know](#things-to-know)**
  * [Authentication](#authentication-)
  * [apiKey](#apikey)
  * [Endpoints](#endpoints)
  * [Post request](#post-request)
  
**[Code expamles (PHP)](#code-expamles---php)**
  * [Home](#home-method-post)
  * [Search](#search-method-post)
  * [Details](#details-method-post)

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
All API requests should be made to: https://restapi.manage-booking.com/

Note: All data is case-sensitive. Language, apiKey and other values are case sensitive. For example, "test" and "Test" are considered two different words.

###POST request:
Methods to retrieve data from the API require a POST request

Code expamles - PHP:
--------------------

###Home method (POST):

    include("curlLib/curlWrap_v1.php");

    // ************************** Get popular destinations  ********************

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

"accountID" and "apiKey" are required for all Api calls.
"language": en me hr si ru de nl fr it cz sk hu pl

Optional "countAccommodation" parameter count accommodations per destination.
Optional "lowestPrice" parameter load lowest prices for accommodation.

Note: Using "lowestPrice" and "countAccommodation" can increase response load time.

###Search method (POST):

    include("curlLib/curlWrap_v1.php");

    // ************************** Accommodation listing ********************

    $entity = "search";
    $input['data'] = array(
        "accountId" => "2",
        "apiKey" => "o5ic8IZCZYPGgmgh",
        "language" => "en",
        "preview" => "1"
    );
    $method = "POST";
    $contentType = "application/json";
    $input = json_encode($input);

    $apiResult = curlWrap($entity, $input, $method, $contentType);
    $apiResult = json_decode($apiResult, TRUE);

    echo '<pre>';
    print_r($apiResult);
    echo '</pre>';

"accountID" and "apiKey" are required for all Api calls.
"language": en me hr si ru de nl fr it cz sk hu pl

"propertyType": "apartment", "hotel", "villa", "authentic accommodation", "youth hostel", "houses with pool", "rooms", "tourist resorts", "holiday houses", "bed and breakfast"

Optional "lowestPrice" parameter load lowest prices for accommodation.

###Details method (POST):

    include("curlLib/curlWrap_v1.php");

    // ************************** Accommodation details ********************

    $entity = "details";
    $input['data'] = array(
        "accountId" => "2",
        "apiKey" => "o5ic8IZCZYPGgmgh",
        "language" => "en",
        "propertyId" => "1598",
        "preview" => "1"
    );
    $method = "POST";
    $contentType = "application/json";
    $input = json_encode($input);

    $apiResult = curlWrap($entity, $input, $method, $contentType);
    $apiResult = json_decode($apiResult, TRUE);

    echo '<pre>';
    print_r($apiResult);
    echo '</pre>';

"accountID" and "apiKey" are required for all Api calls.
"language": en me hr si ru de nl fr it cz sk hu pl

Optional "lowestPrice" parameter load lowest prices for accommodation.
Optional "availability" parameter return calendar availability for rooms.
Optional "showUnavailableRooms" parameter return all rooms with message why rooms are not available.

