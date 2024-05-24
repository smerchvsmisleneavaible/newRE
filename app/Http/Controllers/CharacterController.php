<?php

namespace App\Http\Controllers;

use App\Character;
use App\Classchar;
use App\Damagetype;
use App\Rank;
use App\Stigmataset;
use App\Weapon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CharacterController extends Controller
{
    public function show()
    {
        $charas = Character::all();
        return view('character/characters')->with('charas', $charas);
    }
    public function showchar($id)
    {
        //Получаем данные из БД
        $chara = Character::get()->find($id);
        $stigset = Stigmataset::where('id', $chara['stigset_id'])->first();
        $rankchara = Rank::where('id', $chara['charrank'])->first();
        $dmgtype = Damagetype::where('id', $chara['chartype'])->first();
        $classtype = Classchar::where('id', $chara['charclass'])->first();
        $weap = Weapon::where('id', $chara['weap_id'])->first();
        //Возвращаем "вид" с этими данными
        return view('character/character-page')->with('chara', $chara)->with('stigset', $stigset)->with('rankchara', $rankchara)->
        with('dmg', $dmgtype)->with('classtype', $classtype)->with('weap', $weap);
    }
}
