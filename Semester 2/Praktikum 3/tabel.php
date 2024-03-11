<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
        <fieldset>
            <legend>Form Registrasi IT Club Data Science</legend>
<form>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="text" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="NIM" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="NIM" name="NIM" placeholder="NIM" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="laki-laki"> 
        <label for="radio_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="perempuan"> 
        <label for="radio_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="Prodi Studi" class="col-4 col-form-label">Prodi Studi</label> 
    <div class="col-8">
      <select id="Prodi Studi" name="Prodi Studi" class="custom-select">
        <option value="teknik informatika">Teknik Informatika</option>
        <option value="sistem informasi">Sistem Informasi</option>
        <option value="bisnis digital">Bisnis Digital</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill Web &amp; Programming</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill web" id="skill web_0" type="checkbox" class="custom-control-input" value="html"> 
        <label for="skill web_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill web" id="skill web_1" type="checkbox" class="custom-control-input" value="css"> 
        <label for="skill web_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill web" id="skill web_2" type="checkbox" class="custom-control-input" value="javaS"> 
        <label for="skill web_2" class="custom-control-label">Java Script</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill web" id="skill web_3" type="checkbox" class="custom-control-input" value="bootstrap"> 
        <label for="skill web_3" class="custom-control-label">RWD Bootstrap</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill web" id="skill web_4" type="checkbox" class="custom-control-input" value="php"> 
        <label for="skill web_4" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill web" id="skill web_5" type="checkbox" class="custom-control-input" value="python"> 
        <label for="skill web_5" class="custom-control-label">Python</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill web" id="skill web_6" type="checkbox" class="custom-control-input" value="java"> 
        <label for="skill web_6" class="custom-control-label">Java</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="Domisili" class="col-4 col-form-label">Tempat Domisili</label> 
    <div class="col-8">
      <select id="Domisili" name="Domisili" class="custom-select">
        <option value="depok">Depok</option>
        <option value="bogor">Bogor</option>
        <option value="jkt">Jakarta</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" placeholder="Email" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</fieldset>