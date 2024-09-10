<x-layout>
    <div class="card mb-3">
        <div class="card-header">
            <h5>Lista de estudiantes</h5>
            <a href="{{route('estudiantes.create')}}" class="btn btn-secondary float-end">Nuevo</a>
        </div>
        <div class="card-body">
            @include('components.success')
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col" style="width: 100px;">#</th>
                        <th scope="col">RNE</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Nacimiento</th>
                        <th scope="col">Colegio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td scope="row">
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <a href="{{ route('estudiantes.edit', ['estudiante' => $student->id]) }}" class="btn btn-primary">Editar</a>
                                    <a href="{{ route('estudiantes.show', ['estudiante' => $student->id]) }}" class="btn btn-danger">Eliminar</a>
                                </div>
                            </td>
                            <td>{{ $student->rne }}</td>
                            <td>{{ $student->nombres }}</td>
                            <td>{{ $student->apellidos }}</td>
                            <td>{{ $student->sexo }}</td>
                            <td>{{ $student->fechanac }}</td>
                            <td>{{ $student->colegio }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>