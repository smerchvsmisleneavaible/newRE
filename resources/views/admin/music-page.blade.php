<x-admin-layout>
    <x-slot name="title">
        САУНДТРЕКИ
    </x-slot>
    <div class="container-fluid">
        <div class="overflow-auto p-3 bg-body-tertiary" style="max-height: 100vh;">
            @foreach($mus as $m)
                <div class="d-flex m-2 rounded p-2 w-75" style="height: 150px; background-color: #8477A4">
                    <img class="img-fluid rounded-circle mr-2" src="{{$m['cover']}}" alt="Card image cap">
                    <div>
                        <h4>{{$m['artist']}}</h4>
                        <p>{{$m['name']}}</p>
                        <div class="d-flex">
                            <a href="">
                                <button class="char-button mr-lg-5 mr-sm-2" type="submit">Редактировать</button>
                            </a>
                            <form method="post" action="">
                                @method('delete')
                                @csrf
                                <button class="char-button" type="submit">Удалить</button>
                            </form>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
        <div class="mybutton">
            <a href="">
                <button type="submit" class="add-button">Добавить новую аудиозапись</button>
            </a>
        </div>
    </div>
</x-admin-layout>

