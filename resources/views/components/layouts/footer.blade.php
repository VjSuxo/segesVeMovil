<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            width: 100%;
            height: 100vh;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        footer {
            text-align: center;
            position: fixed;
            left: 0;
            bottom: 0;
            padding: 10px;
            width: 100%;
            min-width: 350px;
            min-height: 80px;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            border-radius: 10px;
            padding: 0 15px;
            background: #000;
            box-shadow:
                0 6.7px 5.3px rgba(0, 0, 0, 0.12),
                0 22.3px 17.9px rgba(0, 0, 0, 0.08),
                0 100px 80px rgba(0, 0, 0, 0.04);
            overflow: hidden;
            color: #fff;
        }

        footer ul {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        footer ul li {
            list-style: none;
        }

        footer ul li a {
            display: block;
            width: 100%;
            height: 100%;
            cursor: pointer;
            font-size: 20px;
        }

        footer ul li a i {
            color: #fff;
            width: 100%;
            height: 100%;
            opacity: 0.4;
            transition: opacity 100ms ease;

        }

        footer ul li a.active i {
            opacity: 1;
        }

        footer .tubelight {
            position: absolute;
            left: 0px;
            top: 0px;
            transform: translateX(-50%);
            width: 45px;
            height: 5px;
            border-radius: 5px;
            background: #fff;
            transition: left 400ms ease;
            z-index: 10;
        }

        footer .light-ray {
            position: absolute;
            left: -30%;
            top: 5px;
            width: 160%;
            height: 80px;
            background: linear-gradient(to bottom,
                    rgba(255, 255, 255, 0.3) -50%,
                    rgba(255, 255, 255, 0) 90%);
            clip-path: polygon(5% 100%, 25% 0px, 75% 0px, 95% 100%);
            pointer-events: none;
        }

        .offcanvas-body{
            background: rgb(28,28,28);
background: linear-gradient(90deg, rgba(28,28,28,1) 24%, rgba(43,113,151,1) 62%);
        }
    </style>
    </head>

    <body>
        <footer>
            <ul>
                <li><a href=" {{ route('inicio')}} "  class="{{ Route::currentRouteName() === 'inicio' ? 'active' : '' }}"><i class="lni lni-home"></i></a></li>
            </ul>
            <ul>
                <li><a href=" {{ route('eventos')}} " class="{{ (Route::currentRouteName() === 'eventos' || Route::currentRouteName() === 'infoeventos') ? 'active' : '' }}
"><i class="lni lni-graduation"></i></a></li>
            </ul>
            <ul>
                <li><a class="{{Route::currentRouteName() === 'admin.home' ? 'active' : '' }}"><i class="lni lni-circle-plus"></i></a></li>
            </ul>
            <ul>
                <li><a><i class="lni lni-cart"></i></a></li>
            </ul>
            @guest
            @if (Route::has('login'))
            <ul>
                <li class="">
                    <a href="{{ route('login') }}" class="{{ ( Route::currentRouteName() === 'login' || Route::currentRouteName() === 'register') ? 'active' : '' }}"><i class="lni lni-user"></i></a>
                </li>
            </ul>
            @endif
            @else
            <ul>
                <li class="">
                    <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" > <i class="lni lni-menu"></i></a>

                </li>
            </ul>
            @endguest
            <div class="tubelight">
                <div class="light-ray"></div>
            </div>

        </footer>
        <script>
            const uls = document.querySelectorAll("footer ul");
            const links = [...document.querySelectorAll("footer a")];
            const light = document.querySelector("footer .tubelight");
            let activeIndex = 0;
            let currentIndex = 0;
            let increment = 1;
            links.forEach((link, index) => {
                if (links[index].classList.contains("active")) {
                    light.style.left = `${links[index].offsetLeft + light.offsetWidth / 4}px`;
                }
                link.addEventListener("click", (e) => {
                    activeIndex = index;
                    let t = setInterval(() => {
                        if (activeIndex > currentIndex) increment = 1;
                        else if (activeIndex < currentIndex) increment = -1;
                        currentIndex += increment;

                        links[currentIndex].classList.add("active");
                        if (currentIndex != -1)
                            links[currentIndex - increment].classList.remove("active");

                        if (currentIndex == activeIndex) {
                            e.target.classList.add("active");
                            increment = 0;
                            clearInterval(t);
                        }
                    }, 50);
                    light.style.left = `${e.target.offsetLeft + light.offsetWidth / 4}px`;
                });
            });
        </script>


@auth


<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">{{ Auth::user()->name }}</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
        @if(Auth::user()->role == 'user')
        @endif
        @if(Auth::user()->role == 'admin')
            <a href="">Usuarios</a>
            <br>
            <a href="">Eventos</a>
            <br>
            <a href="">Infraestructura</a>
            <br>
            <a href="">Ambiente</a>
        @endif
        <div>
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

  </div>
</div>
@endauth
    </body>

</html>
