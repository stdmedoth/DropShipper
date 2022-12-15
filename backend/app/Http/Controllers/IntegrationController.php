<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Models\Integration;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreIntegrationRequest;
use App\Http\Requests\UpdateIntegrationRequest;

class IntegrationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $integrations = (new Integration)->all()->where('user_id', '=', Auth::user()->id);
        return response([
            'integrations' => $integrations
        ]);
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
     * @param  \App\Http\Requests\StoreIntegrationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIntegrationRequest $request)
    {
        $data = (object)$request->all();
        if (!Provider::where('id', $data->place_id)->exists()) {
            return response([
                'message' => 'O fornecedor inserido não existe'
            ], 404);
        }

        $integration = Integration::create([
            'name' => $data->title,
            'client_id' => $data->client_id,
            'client_secret' => $data->client_secret,
            'partner_id' => $data->partner_id,
            'place_id' => $data->place_id,
            'auth_token' => $data->auth_token,
            'user_id' => Auth::user()->id
        ]);
        return response([
            'integration' => $integration
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Integration  $integration
     * @return \Illuminate\Http\Response
     */
    public function show(Integration $integration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Integration  $integration
     * @return \Illuminate\Http\Response
     */
    public function edit(Integration $integration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIntegrationRequest  $request
     * @param  \App\Models\Integration  $integration
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIntegrationRequest $request, Integration $integration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Integration  $integration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Integration $integration)
    {
        //
    }
}
