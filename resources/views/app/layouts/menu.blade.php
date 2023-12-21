<div class="topo">

    <div class="logo">
        <img src="{{ asset('img/logo.png') }}">
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('app.home') }}">Home</a></li>
            <li><a href="{{ route('cliente.index') }}">Clientes</a></li>
            <li><a href="{{ route('pedido.index') }}">Pedidos</a></li>
            <li><a href="{{ route('app.proveedor') }}">Proveedor</a></li>
            <li><a href="{{ route('producto.index') }}">Productos</a></li>
            <li><a href="{{ route('app.salir') }}">Salir</a></li>
        </ul>
    </div>
</div>
