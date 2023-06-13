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
        </div>
    </div>
</x-layouts>      