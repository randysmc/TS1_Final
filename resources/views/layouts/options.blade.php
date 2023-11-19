<ul>
    @if($employeeData['roleDescription'] === 'Admin')
        <li><a href="{{ url('employee/index') }}">
            <span class="item">Lista de Empleados</span>
        </a></li>

        <li><a href="{{ url('employee/create') }}">
            <span class="item">Registrar empleado</span>
        </a></li>

        <li><a href="{{ route('waste-income.create') }}">
            <span class="item">Ingresar residuos por empleado</span>
        </a></li>

        <li><a href="{{ route('waste-income.index') }}">
            <span class="item">Lista de Ingresos de residuos por empleado</span>
        </a></li>

        <li><a href="{{ route('waste-inventory.create') }}">
            <span class="item">Registrar Ingreso a Inventario</span>
        </a></li>

        <li><a href="{{ route('waste-inventory.index') }}">
            <span class="item">Inventario de residuos ingresados</span>
        </a></li>

        <li><a href="{{ route('recycled-waste-inventory.index') }}">
            <span class="item">Inventario de residuos Reciclados</span>
        </a></li>

        <li><a href="{{ route('recycled-waste-inventory.create') }}">
            <span class="item">Registrar un nuevo Reciclaje</span>
        </a></li>

        <li><a href="{{ route('sell.index') }}">
            <span class="item">Lista de ventas</span>
        </a></li>

        <li><a href="{{ route('sell.create') }}">
            <span class="item">Ingresar nueva venta</span>
        </a></li>

        

    @elseif($employeeData['roleDescription'] === 'WasteClassifier')
        <li><a href="{{ url('home') }}">
            <span class="item">Lista de Residuos</span>
        </a></li>
        <li><a href="{{ url('waste-inventory/create') }}">
            <span class="item">Registrar Residuo</span>
        </a></li>
        <li><a href="{{ route('waste-income.index') }}">
            <span class="item">Lista de Ingresos</span>
        </a></li>
        <li><a href="{{ route('waste-inventory.create') }}">
            <span class="item">Registrar Ingreso</span>
        </a></li>

    @elseif($employeeData['roleDescription'] === 'Operator')
        <li><a href="{{ url('home') }}">
            <span class="item">Lista de reciclaje</span>
        </a></li>
        <li><a href="{{ url('recycled-waste-inventory/create') }}">
            <span class="item">Registrar reciclaje</span>
        </a></li>

    @elseif($employeeData['roleDescription'] === 'Seller')
    <li><a href="{{ url('home') }}">
        <span class="item">Lista de ventas</span>
    </a></li>
    <li><a href="{{ url('recycled-waste-inventory/create') }}">
        <span class="item">Registrar venta</span>
    </a></li>
    @endif  
</ul>