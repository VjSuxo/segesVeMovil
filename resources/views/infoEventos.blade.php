<x-layouts.app>
    <style>
        .card h1{
            font-size : 50px;
        }
        .card img{
            filter: brightness(52%);
            -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        }
        .carac{
            margin-top:25px;
            margin-left:15px;
        }

        .carac .card{
            background: rgb(43,113,151);
background: linear-gradient(331deg, rgba(43,113,151,0.70640756302521) 24%, rgba(28,28,28,0.7596288515406162) 62%);
            border-bottom:15px;
            -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        }
        .carac .card .list-group{

        }
        .carac .card .list-group-item{
            background: rgb(116,189,224);
            background: linear-gradient(135deg, rgba(116,189,224,0.8492647058823529) 32%, rgba(161,225,250,0.9108893557422969) 54%);
        }

        .accordion-body{
            background: rgb(43,113,151);
            background: linear-gradient(348deg, rgba(43,113,151,0) 0%, rgba(28,28,28,0.48923319327731096) 0%);
        }

        .temas .accordion{
            margin-left: 8vh;
        }

        .temas .titulo h1{
            margin-top:20px;
            font-size : 50px;
        }

        .temas p{
            color: white;
        }
        .temas .sub, .cont {
            display: inline;
            margin-left: 5px;
        }

        .comentario{
            margin-top: 15px;
        }
        .comentario h1{
            font-size : 40px;
        }
    </style>


    <div class="events">
        <div class="card text-bg-dark">
            <img src="{{$evento->url}}" class="card-img" alt="...">
            <div class="card-img-overlay">
                <h1 class="card-title text-center">{{$evento->nombre}}</h1>
            </div>
        </div>
        <div class="carac">
            <div class="card" style="width: 25rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="lni lni-blackboard"></i> Cantidad de Clases : {{ count( $evento->temas ) }}</li>
                    <li class="list-group-item"><i class="lni lni-calendar"></i> Fecha Inicio : {{  $evento->temas[0]->fecha  }} </li>
                    <li class="list-group-item"><i class="lni lni-calendar"></i> Fecha Inicio : {{  $evento->temas[count( $evento->temas )-1]->fecha  }}</li>
                    <li class="list-group-item text-center"><a href="" class="btn btn-primary">INSCRIBIRSE</a></li>
                </ul>
            </div>
        </div>
        <div class="temas">
            <div class="titulo text-center">
                <h1>Temas</h1>

                <div class="accordion accordion-flush" id="accordionFlushExample">
                        <p style="display: none">{{ $cont = 1 }}</p>
                    @foreach ( $evento->temas as  $tema )
                        <div class="accordion-item" style="max-width: 25rem;">
                            <h2 class="accordion-header">
                                @php
                                    $numero = $cont;
                                    $locale = 'en';
                                    $formatter = new NumberFormatter($locale, NumberFormatter::SPELLOUT);
                                    $numeroEnPalabras = $formatter->format($numero);
                                    $numeroEnPalabrasString = (string) $numeroEnPalabras;
                                    $numeroEnPalabrasCapitalized = ucfirst($numeroEnPalabrasString);
                                @endphp

                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$numeroEnPalabrasCapitalized}}" aria-expanded="false" aria-controls="flush-collapse{{$numeroEnPalabrasCapitalized}}">
                                    Tema {{$cont}}# {{ $tema->nombre }}
                                </button>
                            </h2>
                            <div id="flush-collapse{{$numeroEnPalabrasCapitalized}}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="sub"><strong>Expositor :</strong></p><p class="cont">{{ $tema->expositor->usuario->name }} {{ $tema->expositor->usuario->apellido_Pat }} {{ $tema->expositor->usuario->apellido_Mat }}</p>
                                <br>
                                <p class="sub"><strong>Fecha :</strong></p> <p class="cont">{{ $tema->fecha }}</p>
                                <br> <p class="sub"><strong>Hora :</strong></p> <p class="cont">{{ $tema->hora_inicio }}</p>
                                <br><p class="sub"><strong>Lugar :</strong></p> <p class="cont">{{ $tema->ambiente->infraestructura->nombre }}</p>
                                <p class="sub"><strong>Ambiente :</strong></p>  <p class="cont">{{ $tema->ambiente->nombre}}</p>

                            </div>
                            </div>
                        </div>
                        <p style="display: none">{{ $cont++ }}</p>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="comentario">
            <div class="titulo text-center" ><h1>Comentarios</h1></div>
            <div class="comentarios scroll-container" >
                <ul class="list-group">
                    @foreach ( $evento->comentario as $comentario )
                        <li class="list-group-item">
                            {{ $comentario->participante->usuario->name }} :    {{ $comentario->contenido }}
                         </li>
                    @endforeach
                </ul>
            </div>
            <form action="  "  method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Comentario" aria-label="Recipient's username" aria-describedby="button-addon2" name="comentario" id="comentario">
                    <textarea name="event" id="event" cols="30" rows="10" style="display: none"> {{ $evento->id }} </textarea>
                    <button class="btn btn-outline-secondary"  type="submit" id="boton-enviar" >Enviar</button>
                  </div>
            </form>
        </div>
    </div>
</x-layouts>
