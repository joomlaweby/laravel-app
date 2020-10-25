<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuration;

class ConfigurationController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('configuration.show', [
            'title' => 'Global configuration',
            'configuration' => Configuration::all()
        ]);

    }

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'sitename' => 'required'
            ]
        );

        $request->all();

        return redirect()->back()->with('flash', 'configuration added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Configuration $configuration)
    {
        $this->authorize('delete', $configuration);
        $configuration->delete();
    }
}
