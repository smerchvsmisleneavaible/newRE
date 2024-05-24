<x-app-layout>
    <x-slot name="title">
        {{$chara['charname']}}
    </x-slot>
    <div class="text-white text-center container-fluid" style="background: no-repeat url('{{$chara['charimage']}}') right top">
        <h2>{{$chara['charname']}}</h2>
        <div class="d-flex border-bottom">
            <div style="width: 250px">
                <h4>Ранг Валькирии</h4>
                <h4 class="text-dark p-2" style="background: #8477A4">{{$rankchara->rank}}</h4>

                <h4>Тип урона</h4>
                <h4 class="text-dark p-2" style="background: #8477A4">{{$dmg->typedmg}}</h4>

                <h4>Роль в команде</h4>
                <h4 class="text-dark p-2" style="background: #8477A4">{{$classtype->classname}}</h4>
            </div>
            <div class="text-right container-fluid">
                <h4>Лучшие отряды</h4>
                <div class="text-dark container-fluid" style="background: #8477a4; opacity: 50%">
                    Отряд(подключить и создать таблицу)
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <div style="width: 35%">
                <h4 class="text-left">Сет Стигм</h4>
                <h4 class="text-left">{{$stigset->stigmaname}}</h4>
                <div class="d-flex justify-content-between">
                    <div class="card-group">
                        <div style="background: #8477A4" class="p-2 card">
                            <img class="m-2 card-img-top" src="{{$stigset->imagetop}}" alt="imagetop">
                            <h4 class="border-top">{{$stigset->topdesc}}</h4>
                        </div>
                        <div style="background: #8477A4" class="p-2 card">
                            <img class="m-2 card-img-top" src="{{$stigset->imagemid}}" alt="imagemid">
                            <h4 class="border-top">{{$stigset->middesc}}</h4>
                        </div>
                        <div style="background: #8477A4" class="p-2 card">
                            <img class="m-2 card-img-top" src="{{$stigset->imagebot}}" alt="imagebot">
                            <h4 class="border-top">{{$stigset->botdesc}}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-100 ml-5 rounded align-items-center text-right" >
                <h4>Оружие</h4>
                <h4>{{$weap->weapname}}</h4>
                <div class="d-flex w-100 justify-content-end" style="background: #8477A4; height: 15vh">
                    <img src="{{$weap->weapimage}}" alt="image weapon">
                    <h4>{{$weap->weapdesc}}</h4>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
