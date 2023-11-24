<?php 
    // connect file index sama utilities 
	require "functions.php";

    if(isset($_POST["submit"])){
        // cek data berhasil ditambah 
        if(insert($_POST) > 0){
            // echo "Data berhasil ditambahkan";
            echo "
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = './student-list.php';
                </script>
            ";
        }else{
            echo mysqli_error($conn);
            echo "
                <script>
                    alert('data gagal ditambahkan!');
                    document.location.href = './student-list.php';
                </script>
            ";
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>PPDB Jatim</title>
  </head>
  <body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container-xl justify-content-between">
            <div>
                <a class="navbar-brand" href="index.php" style="font-weight: bold;">SMA  Anime</a>
            </div>
        </div>
    </nav>
</header>

    <style>
        body {
            background: url('https://wallpapercave.com/wp/wp4389589.jpg') no-repeat center center/cover;
            font-family: Arial, sans-serif;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        .container-xl {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            margin-top: 20px;
            width: 90%;
            max-width: 600px;
        }

        
        .form-control,
        .btn-success {
            background: rgba(255, 255, 255, 0.3);
            border: none;
            color: #ffffff;
            border-radius: 25px;
            padding: 10px 20px;
            margin-top: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
        }




        .form-control {
            width: 100%;
        }

        .form-control::placeholder {
            color: #ffffff;
            opacity: 0.8;
        }

        .btn-success:hover {
            transform: scale(1.05);
            background: rgba(255, 255, 255, 0.5);
        }
    </style>
	  <main class="container-xl">
		  <h1 class="text-center mt-4 mb-4 fs-sm-1 fs-4">Add New Student</h1>
		  <div class="mx-md-auto mx-3 border pb-3 shadow-sm mb-4" style="max-width: 40rem; background: rgba(0, 0, 0, 0.2)">
            <div height: 6rem" class="px-3  d-flex align-items-center mb-3">
                <h2 class="fs-1" 
                    style="color:white; 
                    font-weight: bold;"> SMA Anime <span style="font-size: 1.2rem; font-weight: lighter">.</span></h2> 
            </div>
            <div class="px-3">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input required name="name" type="text" class="form-control" id="name" placeholder="Akmal Nafis">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Complete Address</label>
                        <textarea required name="address" class="form-control" id="address" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Your gender</label>
                        <div class="d-flex">
                            <div class="form-check me-3" >
                                <input required class="form-check-input" type="radio" name="gender" id="male" value="L" checked>
                                <label class="form-check-label" for="male">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input required class="form-check-input" type="radio" name="gender" id="female" value="P">
                                <label class="form-check-label" for="female">
                                    Female
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="religion">
                            Select Your Religion
                        </label>
                            <select name="religion" id="religion" class="form-select" aria-label="Default select example">
                            <option value="Islam" selected>Islam</option>
                            <option value="Katolik">Katolik</option>
                            <option value="kristen">Kristen</option>
                            <option value="budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Konguchu">Konguchu</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="school_origin" class="form-label">School Origin</label>
                        <input required name="school_origin" type="text" class="form-control" id="school_origin" placeholder="SMP Tunggal maju jaya">
                    </div>
                    <div class="mb-5">
                        <label for="image" class="form-label">Upload Image</label>
                        <input required name="image" type="file" class="form-control" id="image">
                    </div>
                    <button type="submit" name="submit" class="btn btn-success" style="width: 100%;">Submit</button>
                </form>
            </div>
		  </div>
	  </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>