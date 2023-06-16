<x-layouts.app>
    <h1>Gestionar Usuarios</h1>
    <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Seleccionar Rol
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Participantes</a></li>
        <li><a class="dropdown-item" href="#">Expositores</a></li>
        <li><a class="dropdown-item" href="#">Controladores</a></li>
        <li><a class="dropdown-item" href="#">Todos</a></li>
    </ul>
    <div class="table-responsive">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">CI</th>
      <th scope="col">Ape Paterno</th>
      <th scope="col">Nombre</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach( $usuarios as $usuario)
        <tr>
            <th scope="row">{{$usuario->id}}</th>
            <td>{{$usuario->apellido_Pat}}</td>
            <td> {{$usuario->name}} </td>
            <td>@mdo</td>
        </tr>
    @endforeach
  </tbody>
  </table>
</div>
    </div>
</x-layouts>  