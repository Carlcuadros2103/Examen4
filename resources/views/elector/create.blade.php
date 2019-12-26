Crear datos del elector
<form action="{{ url('/elector')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

    <label for="dni">{{'DNI'}}</label>
    <input type="text" name="dni" id="dni" value="">
    <br/>
    <label for="mail">{{'correo'}}</label>
    <input type="text" name="mail" id="mail" value="">
    <br/>
    <label for="password">{{'Contraseña'}}</label>
    <input type="password" name="password" id="password" value="">
    <br/>
    <input type="submit" value="Agregar">
</form>