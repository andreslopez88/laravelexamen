<form action="{{route('frmpaquete.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>
        Ingese la potencia
        <br>
        <input type="text" name="potencia">
        <br>
    </label>
    <label>
        Ingrese la matricula
        <br>
        <input type="text" name="matricula">
        <br>
    </label>
    <label>
        Ingrese el modelo
        <br>
        <input type="text" name="modelo">
        <br>
    </label>
    <label>
        Ingrese el tipo
        <br>
        <input type="text" name="tipo">
        <br>
    </label>
        <br><br>
        <button type="submit">Enviar Formulario:</button>
        </form>
