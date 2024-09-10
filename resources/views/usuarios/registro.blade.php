<x-layout>
    <div class="card mb-3">
        <div class="col-3"></div>
        <div class="col-6 align-self-center">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Registro de usuarios</h5>
                    Escriba los siguientes datos
                </div>
                <div class="card-body">
                    <form action="{{route('userCreate')}}" method="post">
                        @include('components.validations')
                        @csrf()
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="nombres de usuarios"
                                autofocus value="{{old('name')}}">
                            <label for="name">nombres de usuarios</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email"
                                name="correo@servidor.algo" value="{{old('email')}}">
                            <label for="email">correo electronico</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="contraseña" value="{{old('password')}}">
                            <label for="password">contraseña</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation" placeholder="contraseña"
                                value="{{old('password_confirmation')}}">
                            <label for="password">repetir contraseña</label>
                        </div>
                        <div class="d-grid gap-2 mb-3">
                            <button class="btn btn-primary" type="submit">crear</button>
                            <a href="{{route('formRegister')}}" class="btn btn-secondary">cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3"></div>
</x-layout>