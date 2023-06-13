<x-layouts.app>
    <style>
        .titulo h1{
            font-size : 50px;
        }
        .events{
            margin-left : 10px;
            margin-right: 10px;
            padding: 20px;
        }
        .card{
            background: rgb(28,28,28);
background: linear-gradient(16deg, rgba(28,28,28,1) 12%, rgba(43,113,151,0.9248949579831933) 59%);
            -webkit-box-shadow: 10px 10px 5px 0px rgba(36,36,36,1);
-moz-box-shadow: 10px 10px 5px 0px rgba(36,36,36,1);
box-shadow: 10px 10px 5px 0px rgba(36,36,36,1);
        }
    </style>
    <div class="titulo text-center">
        <h1>Eventos</h1>
    </div>
    <div class="events scroll-container">
        
    @foreach($eventos as $evento)
    <div class="col">
    <div class="card  mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-4">
                <img src="{{ $evento->url }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $evento->nombre }}</h5>
                    <a href="{{route('infoeventos',$evento->id)}}" class="btn btn-primary">Entrar</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    @endforeach
    </div>
</x-layouts>            