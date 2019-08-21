<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-light">
                <thead class="color text-light">
                <tr>
                    <th scope="col">Placa</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Comentario</th>
                </tr>
                </thead>
                <tbody>
                @if (count($vehicles) == 0)

                    <div class="container text-center font-weight-bold text-danger">No existen vehiculos registrados</div>
                    <br>

                @endif
                @foreach ($vehicles as $veh)
                    @if ($veh["marca"] =="Mazda")
                        <tr>
                            <td> {{ $veh->placa }} </td>
                            <td> {{ $veh->marca }} </td>
                            <td><font color="green">Los de Mazda son los mejores</font></td>
                        </tr>
                    @elseif ($veh["marca"] =="Toyota")
                        <tr>
                            <td> <b><font color="red">{{ $veh->placa }}</font></b> </td>
                            <td> {{ $veh->marca }}</td>
                            <td></td>
                        </tr>
                    @else
                        <tr>
                        <td> {{ $veh->placa }} </td>
                        <td> {{ $veh->marca }} </td>
                        <td></td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
