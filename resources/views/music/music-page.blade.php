<x-app-layout>
    <x-slot name="title">
        САУНДТРЕКИ
    </x-slot>
    <div class="container-fluid">
        <div>
            @foreach($mus as $m)
                <div class="d-flex m-2 rounded p-2" style="height: 150px; background-color: #8477A4">
                    <img class="img-fluid rounded-circle mr-2" src="{{$m['cover']}}" alt="Card image cap">
                    <div style="width: 100%">
                        <h4>{{$m['artist']}}</h4>
                        <p>{{$m['name']}}</p>
                        <audio controls style="width: 100%">
                            <source src="{{$m['link']}}">
                        </audio>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>

