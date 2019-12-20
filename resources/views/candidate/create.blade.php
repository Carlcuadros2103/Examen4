Crear datos del candidato
<form action="{{ url('/candidate')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

    <label for="list">{{'lista'}}</label>
    <input type="text" name="list" id="list" value="">
    <br/>
    <label for="name">{{'nombre'}}</label>
    <input type="text" name="name" id="name" value="">
    <br/>
    <input type="submit" value="Agregar">
</form>