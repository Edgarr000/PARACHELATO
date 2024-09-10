<x-layout>
    <div class="card mb-3">
        <h5 class="card-header bg-secondary text-white">Nuevo registro de Estudiantes</h5>
        <div class="card-body">
            <form action="{{route('estudiantes.store')}}" method="post">
                @include('components.validations')
                @csrf()
                <div class="row">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="rne" name="rne" placeholder="RNE o Identificador" value="{{ old('rne ')}}">
                        <label for="rne">Registro nacional de estudiantes</label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombre completo" value="{{ old('nombres ')}}">
                        <label for="nombres">Nombres</label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellido completo" value="{{ old('apellidos')}}">
                        <label for="apellidos">Apellidos</label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating">
                                <select class="form-select" id="sexo" aria-label="sexo" name="sexo">
                                    <option value="Femenino" {{old('sexo') == "Femenino " ? 'selected' : '' }}>Femenino</option>
                                    <option value="Maculino" {{old('sexo') == "Masculino " ? 'selected' : '' }}>Masculino</option>
                                </select>
                                <label for="sexo">sexo</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floatign mb-3">
                                <input type="date" class="form-control" id="fechanac" name="fechanac" placeholder="Fecha de nacimento" value="{{ old('feachanac')}}">
                                <label for="fechanac">nacimiento</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="form-floating">
                            <select class="form-select" id="colegio" aria-label="colegio" name="colegio">
                                <option value="IGFDR" {{old('colegio') == "IGFDR " ? 'selected' : '' }}>IGFDR</option>
                                <option value="IGFM" {{old('colegio') == "IGFM " ? 'selected' : '' }}>IGFM</option>
                                <option value="IGJHC" {{old('colegio') == "IGJHC " ? 'selected' : '' }}>IGJHC</option>
                                <option value="CEMNGCIS" {{old('colegio') == "CEMNGCIS " ? 'selected' : '' }}>CEMNGCIS</option>
                                <option value="CEMNGABCD" {{old('colegio') == "CEMNGABCD " ? 'selected' : '' }}>CEMNGABCD</option>
                                <option value="CEMNGSJ" {{old('colegio') == "CEMNGSJ " ? 'selected' : '' }}>CEMNGSJ</option>
                                <option value="CEMNGSCJ" {{old('colegio') == "CEMNGSCJ " ? 'selected' : '' }}>CEMNGSCJ</option>
                            </select>
                            <label for="colegio">colegio</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="form-floating">
                            <select class="form-select" id="curso" aria-label="curso" name="curso">
                                <option value="septimo" {{old('curso') == "septimo " ? 'selected' : '' }}>septimo</option>
                                <option value="octavo" {{old('curso') == "octavo " ? 'selected' : '' }}>octavo</option>
                                <option value="noveno" {{old('curso') == "noveno " ? 'selected' : '' }}>noveno</option>
                                <option value="decimo" {{old('curso') == "decimo " ? 'selected' : '' }}>decimo</option>
                                <option value="undecimo" {{old('curso') == "undecimo " ? 'selected' : '' }}>undecimo</option>
                                <option value="duodecimo" {{old('curso') == "duodecimo " ? 'selected' : '' }}>duodecimo</option>
                            </select>
                            <label for="curso">curso</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floatign mb-3">
                            <input type="number" class="form-control" id="seccion" name="seccion" placeholder="seccion" name="seccion" value="{{ old('seccion' )}}">
                            <label for="seccion">seccion</label>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-floating">
                        <select class="form-select" id="carrera" aria-label="carrera" name="carrera">
                            <option value="Tercer Ciclo"  {{old ('carrera') =="Tercer Ciclo" ? 'selected' :'' }}>tercer ciclo</option>
                            <option value="BTP-Info"  {{old ('carrera') =="BTP-Info" ? 'selected' : '' }}>BTP-info</option>
                            <option value="BTP-Conta"  {{old ('carrera') =="BTP-Conta" ? 'selected' : ''}}>BTP-conta</option>
                            <option value="BCH"  {{old ('carrera') =="BCH" ? 'selected' :''}}>BCH</option>
                            <option value="BTP-Conf"  {{old ('carrera') =="BTP-Conf" ? 'selected' : ''}}>BTP-conf</option>
                            <option value="BTP-Elect"  {{old ('carrera') =="BTP-Elect" ? 'selected' :''}}>BTP-elect</option>
                        </select>
                        <label for="carrera">carrera</label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-floating">
                        <select class="form-select" id="jornada" aria-label="jornada" name="jornada">
                            <option value="Matutina" {{old('jornada') == "Matutina" ? 'selected ' : '' }} >matutina</option>
                            <option value="Vespertina" {{old('jornada') == "Vespertina" ? 'selected ' : '' }} >vespertina</option>
                            <option value="Nocturna" {{old('jornada') == "Nocturna " ? 'selected ' : '' }} >nocturna</option>
                        </select>
                        <label for="jornada">jornada</label>
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="d-grip gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-secondary float-end">Guardar</button>
                <a href="{{ route('estudiantes.index') }}"  class="btn btn-warning float-end">Cancelar</a>
            </div>
        </div>
        </form>
    </div>
    </div>
</x-layout>