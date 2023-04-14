<form action="{{url('/foto')}}" method="post" enctype="multipart/form-data">
@csrf
<label for="Titulo"> Título </label>
<input type="text" name="Titulo">
<br>
<label for="Titulo"> Descripción </label>
<input type="text" name="Descripcion">
<br>
<label for="Titulo"> Foto </label>
<input type="file" name="Foto">
<br>
<input type="submit" value="Guardar Datos" id="Enviar">

</form>