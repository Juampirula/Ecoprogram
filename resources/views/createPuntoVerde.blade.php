@extends('layouts.app')

@section('content')
<div style="display: flex; justify-content: space-between;">
    <div style="flex: 1; margin-right: 10px;">
        <h1>Punto Verde</h1>
        <form method="POST" action="{{ route('puntos-verdes.store') }}">
            @csrf
            <label for="nombre">Nombre del Punto Verde:</label>
            <input type="text" name="nombre" required>

            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" required></textarea>

            <!-- Otros campos según tus requerimientos -->

            <button type="submit">Guardar Punto Verde</button>
        </form>
    </div>
    <div style="flex: 1; margin-left: 10px;">
        <h1>Comentario</h1>
        <form method="POST" action="{{ route('comentario.store') }}">
            @csrf
            <label for="contenido">Contenido del Comentario:</label>
            <textarea name="contenido" required></textarea>

            <!-- Otros campos según tus requerimientos -->

            <button type="submit">Guardar Comentario</button>
        </form>
    </div>
</div>

<div style="display: flex; justify-content: space-between; margin-top: 20px;">
    <div style="flex: 1; margin-right: 10px;">
        <h1>Reporte</h1>
        <form method="POST" action="{{ route('reporte.store') }}">
            @csrf
            <label for="motivo">Motivo del Reporte:</label>
            <textarea name="motivo" required></textarea>

            <!-- Otros campos según tus requerimientos -->

            <button type="submit">Enviar Reporte</button>
        </form>
    </div>
    <div style="flex: 1; margin-left: 10px;">
        <h1>Usuario</h1>
        <form method="POST" action="{{ route('usuario.store') }}">
            @csrf
            <label for="nombre">Nombre de Usuario:</label>
            <input type="text" name="nombre" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" required>

            <!-- Otros campos según tus requerimientos -->

            <button type="submit">Crear Usuario</button>
        </form>
    </div>
</div>
@endsection
