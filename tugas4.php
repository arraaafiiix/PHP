
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
  .form-group{
  display: flex;
  margin: 20px;
  text-decoration:none;
  }
  .form-horizontal{
    margin : 0 auto;
    width: 800px;
    justify-content: center;
    align-items: center;
    margin-top:100px;
  }

  .h1{
    text-align: center;
  }
  
</style>
<body>

 
<form class="form-horizontal" nama="f1" method="POST" action="tugas42.php">
<fieldset>

<!-- Form Name -->

<h1 style="text-align: center;">Form Regestrasi</h1><br>

<!-- Text input-->
<div class="form-group">
  
      <label class="col-md-4 control-label" for="Nama Lengkap">Nama Lengkap</label>  
      <div class="col-md-4">
      <input id="Nama Lengkap" name="Nama Lengkap" type="text" placeholder="jo suwe-suwe" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Umur">Umur</label>  
  <div class="col-md-4">
  <input id="Umur" name="Umur" type="text" placeholder="dang og!!!" class="form-control input-md">
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Gender">Gender</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="Gender-0">
      <input type="radio" name="Gender" id="Gender-0" value="1" checked="checked">
      Laki-Laki
    </label> 
    <label class="radio-inline" for="Gender-1">
      <input type="radio" name="Gender" id="Gender-1" value="">
      Perempuan
    </label>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Pendidikan">Pendidikan</label>
  <div class="col-md-4">
    <select id="Pendidikan" name="Pendidikan" class="form-control">
      <option value="SMA">S1</option>
      <option value="SMP">S2</option>
      <option value="">sarjana pendidikan 3</option>
    </select>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Hobi">Hobi</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="Hobi-0">
      <input type="checkbox" name="Hobi" id="Hobi-0" value="1">
      membaca buku
    </label>
	</div>
  <div class="checkbox">
    <label for="Hobi-1">
      <input type="checkbox" name="Hobi" id="Hobi-1" value="2">
      traveling
    </label>
	</div>
  <div class="checkbox">
    <label for="Hobi-2">
      <input type="checkbox" name="Hobi" id="Hobi-2" value="">
      olahraga
    </label>
	</div>
  <div class="checkbox">
    <label for="Hobi-3">
      <input type="checkbox" name="Hobi" id="Hobi-3" value="">
      nonton
    </label>
	</div>
  <div class="checkbox">
    <label for="Hobi-4">
      <input type="checkbox" name="Hobi" id="Hobi-4" value="">
      hiking
    </label>
	</div>
  <div class="checkbox">
    <label for="Hobi-5">
      <input type="checkbox" name="Hobi" id="Hobi-5" value="">
      turu
    </label>
	</div>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button>
  </div>
</div>

</fieldset>
</form>

</body>
</html>

