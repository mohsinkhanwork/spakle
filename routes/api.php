<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/send-sms', function () {
// Send an SMS using Twilio's REST API and PHP

$sid = "ACa51b103c323fcf3b43e9e92284240676"; // Your Account SID from www.twilio.com/console
$token = "59556c24888def28ae68b60231b471cf"; // Your Auth Token from www.twilio.com/console

$client = new Twilio\Rest\Client($sid, $token);
$message = $client->messages->create(
    '+923239224479', // Add your number to send mesasge
    [
        'from' => '+12232137592', // From a valid Twilio number, you will get in your twillio dashboard
        'body' => 'Hello from Spakle Laravel Application!'
    ]
);

print $message->sid;
});
