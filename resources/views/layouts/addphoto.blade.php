
<link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<form enctype="multipart/form-data" method="post" action="{{route('photo')}}">
{{ csrf_field() }}
<p>Загрузите ваши фотографии на сервер</p>
   <p><input type="text" name="title" value="Имя файла"></p>
   <p><input type="date" name="date" ></p>
   <p><input type="file" name="file" ></p>
   <input type="submit" value="Отправить"></p>
</form>
