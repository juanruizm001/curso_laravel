@extends('layout')

@section('content')

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Aprendiendo PHP y Laravel profesional</h1>
        <p>Esta es una prueba de PHP y Laravel.</p>
        <p><a class="btn btn-primary btn-lg" role="button">Postúlate &raquo;</a></p>
    </div>
</div>

<div class="container">
    <h1>Últimos candidatos</h1>
    <h2>Backend Developers</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Tipo de Trabajo</th>
            <th>Descripción</th>
            <th>Ver</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Juan Ruiz</td>
            <td>Ingeniero Informático</td>
            <td>Me gusta aprender nuevos lenguajes de programación</td>
            <td width="50">
                <a href="" class="btn btn-info">
                    Ver
                </a>
            </td>
        </tr>
        </tbody>
    </table>
    <p>
        <a href="">
            Ver a todos en backend developer
        </a>
    </p>
</div>


@stop