<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @vite(['resources/css/style.css','resources/css/style_texto.css'])
    <title>Document</title>
     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<style>

*{
    padding: 0;
    margin: 0;
    color : rgb(103, 234, 246);
}

th,td{
    color : white;
}






body{
    min-height: 100vh;
    justify-content: center;
    align-items: center;
    background: linear-gradient(181deg,
                             rgba(28,28,28,0.9) 20%,
                              rgba(43,113,151,0.7) 150%),
                              url(https://images.unsplash.com/photo-1537202108838-e7072bad1927?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=746&q=80) rgba(28,28,28,0.8);

    background-repeat: no-repeat;
    background-size: cover;
    scroll-behavior: smooth;
    animation: myAnim 8s ease 0s infinite alternate-reverse both;

}

@keyframes myAnim {
	0% {
		background-position: 100% 50%;
	}

	100% {
		background-position: 0% 50%;
	}
}
a{
    color: #fff;
    text-decoration: none;
}


.scroll-container {
  overflow-y: scroll;
}
/* Estilos personalizados del scroll */
.scroll-container::-webkit-scrollbar {
  width: 10px;
}

.scroll-container::-webkit-scrollbar-track {
  background-color: #f1f1f1;
}

.scroll-container::-webkit-scrollbar-thumb {
  background-color: #888;
}

/* Restaurar estilos predeterminados del scroll */
.scroll-container {
  scrollbar-width: auto;
  scrollbar-color: auto;
}




</style>

</head>
<body >

    <div class="contenedor scroll-container" style="height: 700px;">
      
            {{ $slot }}
     
<br>
<br>
<br>
<br>
        <x-layouts.footer/>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
