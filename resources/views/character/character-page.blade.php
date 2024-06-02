<x-app-layout>
    <x-slot name="title">
        {{$chara['charname']}}
    </x-slot>
    <div class="text-white text-center container-fluid p-desc" style="background: no-repeat url('{{$chara['charimage']}}') right top">
        <h2>{{$chara['charname']}}</h2>
        <div class="d-flex border-bottom container-fluid align-items-start no-flex">
            <div class="w-25 d-flex flex-column justify-content-center w-media">
                <div>
                    <h4 class="text-center">Общая информация</h4>
                    <h4>Ранг Валькирии</h4>
                    <h4 class="text-dark p-2 rounded" style="background: #8477A4">{{$rankchara->ranktype}}</h4>
                    <h4>Тип урона</h4>
                    <h4 class="text-dark p-2 rounded" style="background: #8477A4">{{$dmg->typedmg}}</h4>
                    <h4>Роль в команде</h4>
                    <h4 class="text-dark p-2 rounded" style="background: #8477A4">{{$classtype->classname}}</h4>
                </div>
                <div>
                    <h4 class="text-center">Тип персонажа</h4>
                    <div  style="background: #8477A4" class="rounded">
                        <h4>{{$type->typename}}</h4>
                        <img src="{{$type->typeimg}}" alt="char type" class="text-dark p-2">
                    </div>

                </div>
            </div>
            <div class="d-flex align-items-center container-fluid w-50 w-media">
                <div class="d-flex flex-column" >
                    <h4 class="text-center">Сет Стигм</h4>
                    <h4 class="text-center">{{$stigset->stigmaname}}</h4>
                    <div class="d-flex justify-content-between ">
                        <div class="card-group">
                            <div style="background: rgba(132, 119, 164, 0.5)" class="p-2 card">
                                <img class="m-2 card-img-top" src="{{$stigset->imagetop}}" alt="imagetop">
                                <p class="border-top text-white">{{$stigset->topdesc}}</p>
                            </div>
                            <div style="background: rgba(132, 119, 164, 0.5)" class="p-2 card">
                                <img class="m-2 card-img-top" src="{{$stigset->imagemid}}" alt="imagemid">
                                <p class="border-top text-white">{{$stigset->middesc}}</p>
                            </div>
                            <div style="background: rgba(132, 119, 164, 0.5)" class="p-2 card">
                                <img class="m-2 card-img-top" src="{{$stigset->imagebot}}" alt="imagebot">
                                <p class="text-white border-top">{{$stigset->botdesc}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center container-fluid w-25 w-media">
                <div class="w-100 rounded align-items-center">
                    <h4>Оружие</h4>
                    <h4>{{$weap->weapname}}</h4>
                    <div class="card-group">
                        <div style="background: rgba(132, 119, 164, 0.5)" class="p-2 card d-flex flex-column align-items-center">
                            <img class="m-2 card-img-top" style="width: 35%" src="{{$weap->weapimage}}" alt="imagetop">
                            <p class="border-top text-white">{{$weap->weapdesc}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
