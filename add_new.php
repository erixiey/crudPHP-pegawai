<?php
include "db_conn.php";

if(isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `crud`(`id`, `first_name`, `last_name`, `email`, `gender`) 
    VALUES (NULL,'$first_name','$last_name','$email','$gender')";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: index.php?msg=New record created successfully");
    }
    else {
        echo "Failed: " . mysqli_error($conn);

    }
}

?>




<!DOCTYPE html>
<html lang="en">
<>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CRUD Application</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5"
    style="background-color: #D8B4F8;">
        Form Akun Pegawai
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Tambahkan Pengguna Baru :D</h3>
            <p class="text-muted">Lengkapi formulir di bawah ini untuk menambahkan user baru</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row">
                    <div class="col">
                        <label class="form-label">Nama Awal</label>
                        <input type="text" class="form-control" name="first_name" placeholder="Ishigami" >
                    </div>

                    <div class="col">
                        <label class="form-label">Nama Akhir</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Senku" >
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="senku@example.com" >
                </div>

                <div class="form-group mb-3">
                    <label>Kelamin:</label> &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="Pria" value="Pria" >
                    <label for="Pria" class="form-input-label" >Pria</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="Wanita" value="Wanita" >
                    <label for="Wanita" class="form-input-label" >Wanita</label>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit" >Simpan</button>
                    <a href="index.php" class="btn btn-danger" >Batalkan</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>