<?php  
    // connect file index sama utilities 
    require "functions.php";

    $students = query("SELECT * FROM students");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Daftar Murid</title>

    <style>
        body {
            margin: 0;
            padding: 0;
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
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            margin-top: 20px;
            width: 90%;
            max-width: 1200px;
        }

			

        .btn-success,
        .btn-warning,
        .btn-danger {
            background: rgba(255, 255, 255, 0.3);
            border: none;
            color: #ffffff;
            border-radius: 25px;
            padding: 10px 20px;
            transition: all 0.3s ease;
            margin-top: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            text-decoration: none;
        }

        .btn-success:hover,
        .btn-warning:hover,
        .btn-danger:hover {
            transform: scale(1.05);
            background: rgba(255, 255, 255, 0.5);
        }

        .table {
            background: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(5px);
        }

		

        .table-dark th{
			background: rgba(0, 0, 0, 0.5);
		}
        .table-light td {
            background: rgba(255, 255, 255, 0.5);
        }

					
		.navbar-nav {
			flex-direction: row;
		}

		.navbar-nav .nav-link {
			margin-right: 15px;
		}

    </style>
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


    <main class="container-xl">
        <h1 class="text-center mt-4 mb-5 fs-sm-1 fs-4">Student List  SMA Anime</h1>
        <div class="mb-3">
            <button type="button" class="btn btn-success btn-sm">
                <a href="./add.php" style="color: white; text-decoration: none">
                    <i class="fas fa-plus" style="color: white;"></i> Add New Students
                </a>
            </button>
        </div>
        <div class="px-2">
            <table class="table table-hover">
                <thead>
                    <tr class="table-dark">
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col" class="d-none d-md-table-cell">Address</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Religion</th>
                        <th scope="col">School Origin</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 1; ?>
                    <?php foreach($students as $student) : ?>
                        <tr class="table-light"> 
                            <th scope="row"><?= $count; ?></th>
                            <td><?= $student["name"] ?></td>
                            <?php 
                                $address = $student["address"]; 
                                if(strlen($address) >= 15){
                                    $address = substr($address, 0, 15) . "...";
                                }
                            ?>
                            <td class="d-none d-md-table-cell"><?= $address ?></td>
                            <td><?= $student["gender"] ?></td>
                            <td><?= $student["religion"] ?></td>
                            <td><?= $student["school_origin"] ?></td>
                            <td>
                                <img style="width: 5rem;" src="./img/<?= $student["image"] ?>" alt="<?= $student["name"]?> image">
                            </td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm btn-lg-lg">
                                    <a href="edit.php?id=<?= $student["id"]; ?>" 
                                        style="color: black; text-decoration: none">
                                        Edit
                                    </a>
                                </button>    
                                <button type="button" class="btn btn-danger btn-sm">
                                    <a href="delete.php?id=<?= $student["id"]; ?>"
                                        onclick="return confirm('Are you sure?');" 
                                        style="color: black; text-decoration: none">
                                        Delete
                                    </a>
                                </button>
                            </td>
                        </tr>
                        <?php $count++; ?>
                    <?php endforeach ;?>
					</tbody>
              </table>
          </div>
      </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

