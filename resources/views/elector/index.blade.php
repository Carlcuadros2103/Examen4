Ingresar datos del elector
<form action="{{ url('/elector')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

    <label for="dni">{{'DNI'}}</label>
    <input type="text" name="dni" id="dni" value="">
    <input type="submit" value="ingresar">
</form>