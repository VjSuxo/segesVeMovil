<x-layouts.app>
    <style>
        .container{
            height: 100%;
            font-weight: 800;
            margin: 0;
            font-family: 'Raleway', sans-serif;
            padding: 0;
        }
        @import url(https://fonts.googleapis.com/css?family=Montserrat);
        .container a i{
            color: white;
            margin-top:100px;
            font-size: 200px;
        }
        .container a .boton{
            margin-top: 15px;
            background: rgba(7,7,111,0.6937354988399071);
            height: 50px;
            width: 250px;
            border-radius: 15px;
            -webkit-box-shadow: 10px 10px 8px -6px rgba(162,162,189,0.32);
            -moz-box-shadow: 10px 10px 8px -6px rgba(162,162,189,0.32);
            box-shadow: 10px 10px 8px -6px rgba(162,162,189,0.32);
        }

        .scroll-container::-webkit-scrollbar {
  width: 10px;
  scrollbar-width: thin; /* O scrollbar-width: auto; */
}

/* Estilos adicionales del scroll */
.scroll-container::-webkit-scrollbar-thumb {
  background-color: #888;
}


    </style>

    <div class="container text-center ">
      
        <a href=""><i class="lni lni-connectdevelop "></i></a>
        <a   href="{{route('eventos')}}"><h1 class="boton ">Empezar</h1></a>

    </div>

    </div>
</x-layouts>
