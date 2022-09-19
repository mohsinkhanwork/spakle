<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use JoliCode\Slack\Api\Client;
use JoliCode\Slack\ClientFactory;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Log::channel('slack')->info('hello from the laravel app');

        $client = ClientFactory::create('xoxb-3986949221810-4004796731268-FaBiLoRcGBc9nyGEiB6lPn4O');
        $user = $client->usersInfo(['user' => 'U123AZER'])->getUser();
        dd($user);

        return true;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function twilio()
    {
        $message = 'this is from the laravel application';
        $sid = getenv("TWILIO_SID");
        $token = getenv("TWILIO_TOKEN");
        $from = getenv("TWILIO_FROM");
        $numberTosendMessage = '+923239224479';
        $client = new Client($sid, $token);
        $message = $client->messages->create(
            $numberTosendMessage,
            [
                'from' => $from,
                'body' => $message,
            ]
        );

        print $message->sid;
    }
}
