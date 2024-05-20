<form action="{{route('frmpaquete.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>
        Ingrese el codigo
        <br>
        <input type="text" name="codigo">
        <br>
    </label>
    <label>
        Ingrese la descripcion
        <br>
        <input type="text" name="descripcion">
        <br>
    </label>
    <label>
        Ingrese el destinatario
        <br>
        <input type="text" name="destinatario">
        <br>
    </label>
    <label>
        Ingrese la direccion
        <br>
        <input type="text" name="direccion">
        <br>
    </label>
    <label>
        Ingrese el id del camionero
        <br>
        <input type="text" name="camionero_id">
        <br>
    </label>
        <br><br>
        <button type="submit">Enviar Formulario:</button>
        </form>
