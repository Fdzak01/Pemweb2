<?php  
require_once 'navbar.html';
require_once 'sidebar.html';
require_once 'proses_registrasi.php';
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Regist</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container">
    <h2>Form Registrasi</h2>

    <form method="POST">
      <div class="form-group row">
        <label for="nim" class="col-4 col-form-label">NIM</label>
        <div class="col-8">
          <input id="nim" name="nim" type="text" required="required" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="name" class="col-4 col-form-label">Nama Lengkap</label>
        <div class="col-8">
          <input id="name" name="name" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4">Jenis Kelamin</label>
        <div class="col-8">
          <div class="custom-control custom-radio custom-control-inline">
            <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Pria"
              required="required">
            <label for="gender_0" class="custom-control-label">Pria</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Wanita"
              required="required">
            <label for="gender_1" class="custom-control-label">Wanita</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="domisili" class="col-4 col-form-label">Domisili</label>
        <div class="col-8">
          <select id="domisili" name="domisili" class="custom-select" required="required">
            <?php foreach($domisili as $dom){ ?>
              <option value="<?= $dom ?>"><?= $dom ?></option>

            <?php } ?>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="program_studi" class="col-4 col-form-label">Program Studi</label>
        <div class="col-8">
          <select id="program_studi" name="program_studi" class="custom-select" required="required">
            <?php foreach($program_studi as $key => $value) {?>
            <option value="<?= $key; ?>"><?= $value; ?></option>

            <?php }?>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4">Skill Web & Programming</label>
        <div class="col-8">
          <div class="custom-control custom-checkbox custom-control-inline">
            <input name="skills" id="skills_0" type="checkbox" class="custom-control-input" value="HTML"
              >
            <label for="skills_0" class="custom-control-label">HTML</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline">
            <input name="skills" id="skills_1" type="checkbox" class="custom-control-input" value="CSS"
              >
            <label for="skills_1" class="custom-control-label">CSS</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline">
            <input name="skills" id="skills_2" type="checkbox" class="custom-control-input" value="Javascript"
              >
            <label for="skills_2" class="custom-control-label">Javascript</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline">
            <input name="skills" id="skills_3" type="checkbox"  class="custom-control-input"
              value="PHP">
            <label for="skills_3" class="custom-control-label">PHP</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline">
            <input name="skills" id="skills_4" type="checkbox"  class="custom-control-input"
              value="Python">
            <label for="skills_4" class="custom-control-label">Python</label>
          </div>
        </div>
      </div>

      <div class="form-group row">
        <label for="email" class="col-4 col-form-label">Email</label>
        <div class="col-8">
          <input id="email" name="email" type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>

    <?php if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $domisili = $_POST['domisili'];
        $program_studi = $_POST['program_studi'];
        $skill = $_POST['skills'];
        $email = $_POST['email'];
      ?>

    <table class="table table-bordered">
      <tr class="table-primary">
        <th>NIM</th>
        <th>Nama</th>
        <th>Gender</th>
        <th>Domisili</th>
        <th>Program Studi</th>
        <th>Skill Programming</th>
        <th>E-mail</th>
      </tr>
      <tr>
        <td><?= $nim?></td>
        <td><?= $name?></td>
        <td><?= $gender?></td>
        <td><?= $domisili?></td>
        <td><?= $program_studi?></td>
        <td><?= $skill?></td>
        <td><?= $email?></td>
      </tr>
    </table>
    <?php }?>
  </div>
</body>"


<?php require_once 'footer.html';
?>