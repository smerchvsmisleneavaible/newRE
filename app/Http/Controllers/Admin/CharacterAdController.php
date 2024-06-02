<?php

namespace App\Http\Controllers\Admin;

use App\Character;
use App\Chartype;
use App\Classchar;
use App\Damagetype;
use App\Http\Controllers\Controller;
use App\Rank;
use App\Stigmataset;
use App\Weapon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CharacterAdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $charas = Character::all();
        return view('admin/characters')->with('charas', $charas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $dmgs = Damagetype::all();
        $sets = Stigmataset::all();
        $ranks = Rank::all();
        $types = Chartype::all();
        $classes = Classchar::all();
        $weaps = Weapon::all();
        return view('admin/add-character')
            ->with('dmgs', $dmgs)
            ->with('sets', $sets)
            ->with('ranks', $ranks)
            ->with('classes', $classes)
            ->with('types', $types)
            ->with('weaps', $weaps);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $char = new Character();
        $char->charname = $request->input('charname');
        $char->charimage = $request->input('charimage');
        $char->chardesc = $request->input('chardesc');
        $char->charclass = $request->input('class');
        $char->charrank = $request->input('rank');
        $char->dmgtype = $request->input('dmg');
        $char->stigset = $request->input('set');
        $char->weap = $request->input('weap');
        $char->chartype = $request->input('type');
        $char->save();
        return redirect()->route('chars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($id)
    {
        //Получаем данные из БД
        $chara = Character::get()->find($id);
        $dmgs = Damagetype::all();
        $sets = Stigmataset::all();
        $ranks = Rank::all();
        $types = Chartype::all();
        $classes = Classchar::all();
        $weaps = Weapon::all();
        //Возвращаем "вид" с этими данными
        return view('admin/character')
            ->with('dmgs', $dmgs)
            ->with('chara', $chara)
            ->with('sets', $sets)
            ->with('ranks', $ranks)
            ->with('classes', $classes)
            ->with('types', $types)
            ->with('weaps', $weaps);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $charas = Character::find($id);
        $charas->charname = $request->get('charname');
        $charas->charimage = $request->get('charimage');
        $charas->chardesc = $request->get('chardesc');
        $charas->dmgtype = $request->get('dmg');
        $charas->charrank = $request->get('rank');
        $charas->stigset = $request->get('set');
        $charas->weap = $request->get('weap');
        $charas->chartype = $request->get('type');
        $charas->charclass = $request->get('class');
        $charas->save();
        $charas->push($request->all());
        return redirect()->route('chars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $char = Character::find($id);
        $char->delete();
        return redirect()
            ->back()
            ->with('Успех');
    }
}
