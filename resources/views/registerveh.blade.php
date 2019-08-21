<form action={{route("register_vehicle")}} method="post">
    @csrf
    <div>
        <label for="id">Cedula:</label>
        <input type="number" id="id" name ="id" required/>
        @if ($errors->has('id'))
            <p class="text-danger">{{ $errors->first('id') }}</p>
        @endif
    </div>
    <div>
        <label for="name">Nombre del dueño:</label>
        <input type="text" id="name" name ="name"required />
        @if ($errors->has('name'))
            <p class="text-danger">{{ $errors->first('name') }}</p>
        @endif
    </div>
    <div>
        <label for="placa">Placa:</label>
        <input type="text" id="placa" name ="placa"  required />
        @if ($errors->has('placa'))
            <p class="text-danger">{{ $errors->first('placa') }}</p>
        @endif
    </div>
    <div>
        <label for="marca">Marca:</label>
        <select name="marca" id="marca">
            <option value="Chevrolet">Chevrolet</option>
            <option value="Mazda">Mazda</option>
            <option value="Toyota">Toyota</option>
        </select>
        @if ($errors->has('marca'))
            <p class="text-danger">{{ $errors->first('marca') }}</p>
        @endif
    </div>

    <div class="button">
        <button type="submit">Registrar</button>
    </div>
</form>
