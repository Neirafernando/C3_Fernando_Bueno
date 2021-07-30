@extends("layouts.master")

@section("contenido")

    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-warning text-white">
                    <span>Registrar Lectura</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="fecha-txt" class="form-label">fecha</label>
                        <input type="date" id="fecha-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="hora-select" class="form-label">Hora</label>
                        <input type="selec" id="hora-txt" class="form-control"></input>
                            
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="medidor-select" class="form-label">Medidor</label>
                        <select class="form-select" id="medidor-select">
                            
                           
                          </select>
                    </div>
                    <div class="mb-3">
                        <label for="direccion-txt" class="form-label">Direccion</label>
                        <input type="text" id="Direccion-txt" class="form-control"></input>
                    </div>
                    <div class="mb-3">
                        <label for="valor-txt" class="form-label">Valor</label>
                        <input type="number" class="form-control" id="valor-txt">
                    </div>
                    <div class="mb-3">
                        <label for="tmed-select" class="form-label">tipo de medida</label>
                        <select class="form-select" id="tmed-select">
                            
                          </select>
                    </div>

                    
                </div>
                <div class="card-footer d-grid gap-1">
                    <button id="registrar-btn" class="btn btn-info">Registrar</button>
                </div>
            </div>
        </div>
    </div>

@endsection
<!-- Esto define el contenido de la seccion javascript del master -->
@section("javascript")
   
@endsection