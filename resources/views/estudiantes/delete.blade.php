<x-layout>
    <div class="card mb-3">
        <h5 class="card-header bg-danger text-white">Confirme que desea eliminar el registro del Estudiante</h5>
        <div class="card-body">
        <form action ="{{ route('estudiantes.destroy', ['estudiante' => $student-> id ]) }}" method="post">
        @include('components.validations')
                @csrf()
                @method('delete')
                <div class="row">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="rne" name="rne" placeholder="RNE o Identificador" value="{{  $student->rne }}">  <readonly>
                            <label for="rne"> Registro nacional de estudiantes</label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombre completo" value="{{
                         $student->nombres }}" readonly>

                        <label for="nombres">Nombres</label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellido completo" value="{{ 
                        $student->apellidos }}" readonly>
                        <label for="apellidos">Apellidos</label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating">
                                <select class="form-select" id="sexo" aria-label="sexo" name="sexo" disabled>
                                    <option value="Femenino" {{$student-> sexo == "Femenino " ? 'selected' : '' }}>Femenino</option>
                                    <option value="Maculino" {{$student-> sexo == "Masculino " ? 'selected' : '' }}>Masculino</option>
                                </select>
                                <label for="sexo">sexo</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floatign mb-3">
                                <input type="date" class="form-control" id="fechanac" name="fechanac" placeholder="Fecha de nacimento"
                                    value="{{ $student->fechanac }}" readonly>
                                <label for="fechanac">nacimiento</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="form-floating">
                            <select class="form-select" id="colegio" aria-label="colegio" name="colegio" disabled>
                                <option value="IGFDR" {{$student-> colegio == "IGFDR " ? 'selected' : '' }}>IGFDR</option>
                                <option value="IGFM" {{$student-> colegio == "IGFM " ? 'selected' : '' }}>IGFM</option>
                                <option value="IGJHC" {{$student-> colegio == "IGJHC " ? 'selected' : '' }}>IGJHC</option>
                                <option value="CEMNGCIS" {{$student-> colegio == "CEMNGCIS " ? 'selected' : '' }}>CEMNGCIS</option>
                                <option value="CEMNGABCD" {{$student-> colegio == "CEMNGABCD " ? 'selected' : '' }}>CEMNGABCD</option>
                                <option value="CEMNGSJ" {{$student-> colegio == "CEMNGSJ " ? 'selected' : '' }}>CEMNGSJ</option>
                                <option value="CEMNGSCJ" {{$student-> colegio == "CEMNGSCJ " ? 'selected' : '' }}>CEMNGSCJ</option>
                            </select>
                            <label for="colegio">colegio</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="form-floating">
                            <select class="form-select" id="curso" aria-label="curso" name="curso" disabled>
                                <option value="septimo" {{$student->curso == "septimo " ? 'selected' : '' }}>septimo</option>
                                <option value="octavo" {{$student->curso == "octavo " ? 'selected' : '' }}>octavo</option>
                                <option value="noveno" {{$student->curso == "noveno " ? 'selected' : '' }}>noveno</option>
                                <option value="decimo" {{$student->curso == "decimo " ? 'selected' : '' }}>decimo</option>
                                <option value="undecimo" {{$student->curso == "undecimo " ? 'selected' : '' }}>undecimo</option>
                                <option value="duodecimo" {{$student->curso == "duodecimo " ? 'selected' : '' }}>duodecimo</option>
                            </select>
                            <label for="curso">curso</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floatign mb-3">
                            <input type="number" class="form-control" id="seccion" name="seccion" placeholder="seccion" name="seccion" value="{{ 
                            $student->seccion}}" readonly>
                            <label for="seccion">seccion</label>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-floating">
                        <select class="form-select" id="carrera" aria-label="carrera" name="carrera" disabled>
                            <option value="Tercer Ciclo" {{$student->carrera =="Tercer Ciclo" ? 'selected' :'' }}>tercer ciclo</option>
                            <option value="BTP-Info" {{$student->carrera =="BTP-Info" ? 'selected' : '' }}>BTP-info</option>
                            <option value="BTP-Conta" {{$student->carrera =="BTP-Conta" ? 'selected' : ''}}>BTP-conta</option>
                            <option value="BCH" {{$student->carrera =="BCH" ? 'selected' :''}}>BCH</option>
                            <option value="BTP-Conf" {{$student->carrera =="BTP-Conf" ? 'selected' : ''}}>BTP-conf</option>
                            <option value="BTP-Elect" {{$student->carrera =="BTP-Elect" ? 'selected' :''}}>BTP-elect</option>
                        </select>
                        <label for="carrera">carrera</label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-floating">
                        <select class="form-select" id="jornada" aria-label="jornada" name="jornada" disabled>
                            <option value="Matutina" {{$student->jornada  == "Matutina" ? 'selected ' : '' }}>matutina</option>
                            <option value="Vespertina" {{$student->jornada  == "Vespertina" ? 'selected ' : '' }}>vespertina</option>
                            <option value="Nocturna" {{$student->jornada  == "Nocturna " ? 'selected ' : '' }}>nocturna</option>
                        </select>
                        <label for="jornada">jornada</label>
                    </div>
                </div>
              </div>
              <div class="row">
             <div class="d-grip gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-danger float-end">si, Eliminar</button>
                <a href="{{ route('estudiantes.index') }}" class="btn btn-warning float-end">Cancelar</a>
              </div>
              </div>
            </form>
    </div>
    </div>
</x-layout>