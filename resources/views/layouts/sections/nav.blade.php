<nav class="navbar navbar-expand-md navbar-dark bg-menuColor shadow-sm p-0">
    <div class="container-fluid row d-flex justify-content-center">
        <ul class="nav">
            <li class="nav-item dropdown ">
                <div class="btn-group rounded">
                    <button type="button" class="btn txt-style-healthy ml-30 btn-outline-darkorange pt-2 pb-2 border-0 rounded-0 p-0 text-outline-dark  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('Grupo de Alimentos') }}&nbsp;&nbsp;</button>
                    <div class="dropdown-menu bg-menuColor">
                        <a class="dropdown-item txt-style-healthy btn-outline-darkorange ml-30 pt-2 pb-2 btn " href="/leche-y-derivados">
                            {{ __('Leche y Derivados') }}
                        </a>
                        <a class="dropdown-item txt-style-healthy btn-outline-darkorange ml-30 pt-2 pb-2 btn " href="/cereales">
                            {{ __('Cereales') }}      
                        </a>
                        <a class="dropdown-item txt-style-healthy btn-outline-darkorange ml-30 pt-2 pb-2 btn " href="/azucar-y-dulces">
                            {{ __('Azúcar y Dulces') }}      
                        </a>
                        <a class="dropdown-item txt-style-healthy btn-outline-darkorange ml-30 pt-2 pb-2 btn " href="/legumbres-frutos-secos-y-patatas">
                            {{ __('Legumbres, frutos secos y patatas') }}      
                        </a>
                        <a class="dropdown-item txt-style-healthy btn-outline-darkorange ml-30 pt-2 pb-2 btn " href="/verduras-y-hortalizas">
                            {{ __('Verduras y hortalizas') }}      
                        </a>
                        <a class="dropdown-item txt-style-healthy btn-outline-darkorange ml-30 pt-2 pb-2 btn " href="/frutas">
                            {{ __('Frutas') }}      
                        </a>
                        <a class="dropdown-item txt-style-healthy btn-outline-darkorange ml-30 pt-2 pb-2 btn " href="/mantecas-y-aceite-grasas">
                            {{ __('Mantecas y aceite, grasas') }}      
                        </a>
                        <a class="dropdown-item txt-style-healthy btn-outline-darkorange ml-30 pt-2 pb-2 btn " href="carnicos-pescado-y-huevo">
                            {{ __('Cárnicos, pescado y huevo') }}      
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link btn txt-style-healthy ml-30 btn-outline-darkorange pt-2 pb-2 p-0 border-0 rounded-0 text-outline-dark " href="/celiacos-e-intolerancias">
                    {{ __('Celíacos e intolerancias') }}
                </a>
            </li>
            <li class="nav-item dropdown ">
                <div class="btn-group ">
                    <button type="button" style="max-width: 90px;" class="btn txt-style-healthy btn-outline-darkorange pt-2 pb-2 p-0 border-0 rounded-0 text-outline-dark dropdown-toggle dropdown-toggle-split ml-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('Dietas') }}&nbsp;&nbsp;</button>
                    <div class="dropdown-menu bg-menuColor">
                        <a class="dropdown-item txt-style-healthy btn-outline-darkorange ml-30 pt-2 pb-2 btn " href="/dietas/infantil">
                            {{ __('Infantil') }}
                        </a>
                        <a class="dropdown-item txt-style-healthy btn-outline-darkorange ml-30 pt-2 pb-2 btn " href="/dietas/perder-peso">
                            {{ __('Perder peso') }}      
                        </a>
                        <a class="dropdown-item txt-style-healthy btn-outline-darkorange ml-30 pt-2 pb-2 btn " href="/dietas/ganar-peso">
                            {{ __('Ganar peso') }}      
                        </a>
                        <a class="dropdown-item txt-style-healthy btn-outline-darkorange ml-30 pt-2 pb-2 btn " href="/dietas/embarazadas">
                            {{ __('Embarazadas') }}      
                        </a>
                        <a class="dropdown-item txt-style-healthy btn-outline-darkorange ml-30 pt-2 pb-2 btn " href="/dietas/mantenimiento">
                            {{ __('Mantenimiento') }}      
                        </a>
                        <a class="dropdown-item txt-style-healthy btn-outline-darkorange ml-30 pt-2 pb-2 btn " href="/dietas/deportista">
                            {{ __('Deportistas') }}      
                        </a>
                        <a class="dropdown-item txt-style-healthy btn-outline-darkorange ml-30 pt-2 pb-2 btn " href="/dietas/menopausia">
                            {{ __('Menopausia') }}      
                        </a>
                        <a class="dropdown-item txt-style-healthy btn-outline-darkorange ml-30 pt-2 pb-2 btn " href="/dietas/diabetes">
                            {{ __('Diabetes') }}      
                        </a>
                        <a class="dropdown-item txt-style-healthy btn-outline-darkorange ml-30 pt-2 pb-2 btn " href="/dietas/celiacos">
                            {{ __('Celíacos') }}      
                        </a>
                        <a class="dropdown-item txt-style-healthy btn-outline-darkorange ml-30 pt-2 pb-2 btn " href="/dietas/veganos-y-vegetarianos">
                            {{ __('Veganos y vegetarianos') }}      
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link btn txt-style-healthy ml-30 btn-outline-darkorange pt-2 pb-2 p-0 border-0 rounded-0 text-outline-dark " href="/alimentacion-infantil">
                    {{ __('Alimentación infantil') }}
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link btn txt-style-healthy ml-30 btn-outline-darkorange pt-2 pb-2 p-0 border-0 rounded-0 text-outline-dark " href="/embarazadas">
                    {{ __('Embarazadas') }}
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link btn txt-style-healthy ml-30 btn-outline-darkorange pt-2 pb-2 p-0 border-0 rounded-0 text-outline-dark " href="/productos-ecologicos">
                    {{ __('Productos ecológicos') }}
                </a>
            </li>
          </ul>
        {{-- <a class="navbar-brand" href="{{ url('/') }}">
            {{ __('Alimento') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
    </div>
</nav>