REST API
========

B2B, B2C and B2S platform for online booking of accommodation, transfers, excursions and rent-a-car.

Table of contents
-----------------

**[Code expamles](#code-examples)**
  * [PHP](#php)
  

Code expamles:
--------------

###PHP :
Authentications are performed based on the accountId of the user and the respective apiKey.
{
    "accountId": "2",
    "apiKey":"o5ic8IZCZYPGgmgh"
}


**[Things to know](#things-to-know)**
  * [Authentication](#authentication-)
  * [ApiKey](#api-key)
  * [Endpoints](#endpoints)
  

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
