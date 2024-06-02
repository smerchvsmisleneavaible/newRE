<x-admin-layout>
    <x-slot name="title">
        ПЕРСОНАЖИ
    </x-slot>
    <div class="text-white">
        <div class="overflow-auto p-3 bg-body-tertiary" style="max-height: 100vh;">
            @foreach($charas as $chara)
                <div style="height: 250px; background-color: #8477A4" class="d-flex m-2 p-2 rounded">
                    <img class="img-fluid rounded mr-2" src="{{$chara['charimage']}}" alt="character card image">
                    <div class="d-flex flex-column container-fluid justify-content-center">
                        <h4>{{$chara['charname']}}</h4>
                        <h5>{{$chara['chardesc']}}</h5>
                        <a href="{{ route("char", $chara['id']) }}">
                            <button class="char-button mb-lg-4 mb-sm-2 w-25" type="submit">Редактировать</button>
                        </a>
                        <form method="post" action="{{ route("char-delete", $chara->id) }}">
                            @method('delete')
                            @csrf
                            <button class="char-button w-25" type="submit">Удалить</button>
                        </form>

                    </div>
                </div>
            @endforeach
        </div>
        <div class="mybutton">
            <a href="{{ route('add') }}">
                <button type="submit" class="add-button">Добавить нового персонажа</button>
            </a>
        </div>
    </div>
</x-admin-layout>
