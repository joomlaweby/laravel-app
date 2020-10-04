<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuration;

class ConfigurationController extends Controller
{
    /**
     * @param Configuration $configuration
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Configuration $configuration)
    {
        return view('configuration.show', [
            'title' => 'Configuration',
            'configuration' => $configuration
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Configuration $configuration)
    {
        $this->authorize('update', $configuration);

        $configuration->text = $request->text;
        $configuration->save();
    }
}
