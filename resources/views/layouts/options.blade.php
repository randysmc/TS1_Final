<ul>
    @if($employeeData['roleDescription'] === 'Admin')
    <li><a href="{{ url('employee') }}">
            <span class="item">Lista de Empleados</span>
        </a></li>

    <li><a href="{{ url('employee/create') }}">
            <span class="item">Registrar empleado</span>
        </a></li>



    @elseif($employeeData['roleDescription'] === 'WasteClassifier')
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



    @elseif($employeeData['roleDescription'] === 'Operator')
    <li><a href="{{ route('conversion.index') }}">
            <span class="item">Lista de Conversiones</span>
        </a></li>
    <li><a href="{{ route('conversion.create')  }}">
            <span class="item">Realizar un nuevo proceso de Reciclaje</span>
        </a></li>

    <li><a href="{{ route('recycled-waste-inventory.index') }}">
            <span class="item">Inventario de Residuos Reciclados</span>
        </a></li>
    <li><a href="{{ route('recycled-waste-inventory.create')  }}">
            <span class="item">Preparar nuevo Elemento para Reciclar</span>
        </a></li>



    @elseif($employeeData['roleDescription'] === 'Seller')

    <li><a href="{{ route('sell.create') }}">
            <span class="item">Registrar venta</span>

    <li><a href="{{ route('sell.index') }}">
            <span class="item">Lista de ventas</span>
        </a></li>

        <li><a href="{{ route('report.residuosMasIngresados') }}">Residuos Más Ingresados</a></li>
        <li><a href="{{ route('report.residuosMasReciclados') }}">Residuos Más Reciclados</a></li>
        <li><a href="{{ route('report.residuosRecicladosMasVendidos') }}">Reciclaje Mas Vendido</a></li>
        <li><a href="{{ route('report.residuosMasReciclados') }}">Residuos Más Reciclados</a></li>
        <li><a href="{{ route('report.residuosMasReciclados') }}">Residuos Más Reciclados</a></li>
        <li><a href="{{ route('report.residuosMasReciclados') }}">Residuos Más Reciclados</a></li>

    </a></li>
    @endif
</ul>