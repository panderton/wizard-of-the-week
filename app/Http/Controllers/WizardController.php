<?php

namespace App\Http\Controllers;

use App\Models\Wizard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;

class WizardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return View::make("wizards")->with([
            "wizards" =>  Wizard::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return View::make("wizards.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required"
        ]);

        $wizard = new Wizard;
        $wizard->name = $request->input("name");
        $wizard->wizard = (bool)$request->input("wizard");

        try {
            $wizard->save();
        } catch (\Exception $e) {
            Log::critical($e->getMessage());
            return Redirect()
                ->route("wizards.index")
                ->with("errors", "Wizard not created.");
        }

        return Redirect()
            ->route("wizards.index")
            ->with("success", "Wizard created successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $wizard = Wizard::find($id);

        return View::make("wizards.show")
            ->with("wizard", $wizard);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $wizard = Wizard::find($id);

        return View::make("wizards.edit")
            ->with("wizard", $wizard);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $wizard = Wizard::find($id);
        $wizard->name = $request->input("name");
        $wizard->wizard = (bool)$request->input("wizard");
        $wizard->save();

        return Redirect()
            ->route('wizards.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $wizard = Wizard::find($id);
        $wizard->delete();

        return Redirect()
            ->route("wizards.index")
            ->with("success", "Wizard deleted successfully.");
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function wizardify($id)
    {
        $wizard = Wizard::findOrFail($id);
        $wizard->wizard = !$wizard->wizard;
        $wizard->save();

        return Redirect()
            ->route("wizards.index");
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function dewizardify()
    {
        Wizard::query()->update(["wizard" => false]);

        return Redirect()
            ->route("wizards.index");
    }
}
