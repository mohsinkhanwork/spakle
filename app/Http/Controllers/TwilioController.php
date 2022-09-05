<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use App\Models\Twilio;


class TwilioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //send slack install link to user
        $twilio = Twilio::first();
        $sid = $twilio->sid;
        $token = $twilio->token;
        $client = new Client($sid, $token);
        $client->messages->create(
            '+923239224479',
            [
                'from' => getenv("TWILIO_FROM"),
                'body' => 'https://slack.com/oauth/v2/authorize?client_id=3986949221810.3989412315924&scope=chat:write,commands,users:read,users:read.email,users:read.phone,users:read.profile,users:read.real_name,users:read.timezone,users:read.write,users.profile:read,users.profile:write,users:write,users:write.email,users:write.phone,users:write.profile,users:write.real_name,users:write.timezone,channels:history,channels:join,channels:manage,channels:read,channels:write,groups:history,groups:join,groups:manage,groups:read,groups:write,im:history,im:read,im:write,mpim:history,mpim:read,mpim:write,team:read,team:write,users:read,users:read.email,users:read.phone,users:read.profile,users:read.real_name,users:read.timezone,users:write,users:write.email,users:write.phone,users:write.profile,users:write.real_name,users:write.timezone,channels:history,channels:join,channels:manage,channels:read,channels:write,groups:history,groups:join,groups:manage,groups:read,groups:write,im:history,im:read,im:write,mpim:history,mpim:read,mpim:write,team:read,team:write,users:read,users:read.email,users:read.phone,users:read.profile,users:read.real',
            ]
        );

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
}
