<ul>
    @if($employeeData['roleDescription'] === 'Admin')

    <li><a href="{{route('principal.home')}}">
            <span class="item">Home</span>
        </a></li>
    <li><a href="{{ url('employee') }}">
            <span class="item">Lista de Empleados</span>
        </a></li>

    <li><a href="{{ url('employee/create') }}">
            <span class="item">Registrar empleado</span>
        </a></li>
        <li><a href="{{route('principal.about')}}">
            <span class="item">About</span>
        </a></li>



    @elseif($employeeData['roleDescription'] === 'WasteClassifier')
    <li><a href="{{route('principal.home')}}">
            <span class="item">Home</span>
        </a></li>
    <li><a href="{{ route('waste-inventory.index') }}">
            <span class="item">Inventario de Residuos </span>
        </a></li>
    <li><a href="{{ route('waste-inventory.create')}}">
            <span class="item">Registrar Nuevo Residuo</span>
        </a></li>
    <li><a href="{{ route('waste-income.index') }}">
            <span class="item">Lista de Ingresos por trabajador</span>
        </a></li>
    <li><a href="{{ route('waste-income.create') }}">
            <span class="item">Registrar nuevo Ingreso</span>
        </a></li>
        <li><a href="{{route('principal.about')}}">
            <span class="item">About</span>
        </a></li>



    @elseif($employeeData['roleDescription'] === 'Operator')
    <li><a href="{{route('principal.home')}}">
            <span class="item">Home</span>
        </a></li>
    <li><a href="{{ route('conversion.index') }}">
            <span class="item">Conversiones</span>
        </a></li>
    <li><a href="{{ route('conversion.create')  }}">
            <span class="item">Realizar Nueva Conversion</span>
        </a></li>

    <li><a href="{{ route('recycled-waste-inventory.index') }}">
            <span class="item">Inventario de Residuos Reciclados</span>
        </a></li>
    <li><a href="{{ route('recycled-waste-inventory.create')  }}">
            <span class="item">Nuevo Elemento para Reciclar</span>
        </a></li>
        <li><a href="{{route('principal.about')}}">
            <span class="item">About</span>
        </a></li>



    @elseif($employeeData['roleDescription'] === 'Seller')
    <li><a href="{{route('principal.home')}}">
            <span class="item">Home</span>
        </a></li>

    <li><a href="{{ route('sell.create') }}">
            <span class="item">Registrar venta</span>
        </a></li>

    <li><a href="{{ route('sell.index') }}">
            <span class="item">Lista de ventas</span>
        </a></li>
        <li><a href="{{route('principal.about')}}">
            <span class="item">About</span>
        </a></li>





    @elseif($employeeData['roleDescription'] === 'Manager')
    <li><a href="{{route('principal.home')}}">
            <span class="item">Home</span>
        </a></li>
    <li>
    <li>
        <a href="{{ route('reports.index')}}">
            <span class="item">Reportes</span>
    </li>
    </li>
    <li><a href="{{route('principal.about')}}">
            <span class="item">About</span>
        </a></li>
    @endif
</ul>