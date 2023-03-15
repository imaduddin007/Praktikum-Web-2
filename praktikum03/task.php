<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title></title>
</head>

<body>
    <div class="container">
        <h1>Form Registrasi</h1>
        <form method="POST" action="task.php">
            <!-- <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-adn"></i>
                            </div>
                        </div>
                        <input id="nim" name="nim" type="text" class="form-control">
                    </div>
                </div>
            </div> -->
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
            <!-- <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="rabbit">
                        <label for="jk_0" class="custom-control-label">Rabbit</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="duck">
                        <label for="jk_1" class="custom-control-label">Duck</label>
                    </div>
                </div>
            </div> -->
            <!-- <div class="form-group row">
                <label for="ps" class="col-4 col-form-label">Program Studi</label>
                <div class="col-8">
                    <select id="ps" name="ps" class="custom-select">
                        <option value="rabbit">Rabbit</option>
                        <option value="duck">Duck</option>
                        <option value="fish">Fish</option>
                    </select>
                </div>
            </div> -->
            <div class="form-group row">
                <label class="col-4">Skill Web & Programming</label>
                <div class="col-8">
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="HTML">
                        <label for="skill[]_0" class="custom-control-label">HTML</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="CSS">
                        <label for="skill[]_1" class="custom-control-label">CSS</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="Javascript">
                        <label for="skill[]_2" class="custom-control-label">Javascript</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="Bootsrap">
                        <label for="skill[]_3" class="custom-control-label">Bootsrap</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="PHP">
                        <label for="skill[]_4" class="custom-control-label">PHP</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="Python">
                        <label for="skill[]_5" class="custom-control-label">Pyhton</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="Java">
                        <label for="skill[]_6" class="custom-control-label">Java</label>
                    </div>
                </div>
            </div>
            <!-- <div class="form-group row">
                <label for="domisili" class="col-4 col-form-label">Domisili</label>
                <div class="col-8">
                    <select id="domisili" name="domisili" class="custom-select">
                        <option value="rabbit">Rabbit</option>
                        <option value="duck">Duck</option>
                        <option value="fish">Fish</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input id="email" name="email" type="text" class="form-control">
                </div>
            </div> -->
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <hr>
        <?php 
        
        $nama = $_POST['nama'];
        $skill = $_POST['skill'];
        $skor = 0;

        foreach ($skill as $s) {
            switch ($s) {
                case 'HTML':
                    $skor += 10;
                    break;
                case 'CSS':
                    $skor += 10;
                    break;    
                case 'Javascript':
                    $skor += 20;
                    break;
                case 'Boostrap':
                    $skor += 20;
                    break;
                case 'PHP':
                    $skor += 30;
                    break;
                case 'Python':
                    $skor += 30;
                    break;      
                case 'Java':
                    $skor += 50;
                    break;  
                default:
                    $skor += 0;
                    break;
            }
        }
        echo "Nama : " . $nama;
        echo "<br>Skor : " . $skor;
        echo "<br>Skill : " ;
        foreach ($skill as $s) {
            echo $s . " ,";
        }

        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>