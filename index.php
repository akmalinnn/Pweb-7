<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O5oVMWSktQOp6b7In1Zl3/Ji5Ck6E2+nJQF+8xjzZsbO6PDm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Daftar Mahasiswa</title>

    <style>
      
      body {
    margin: 0;
    padding: 0;
    background: url('https://wallpapercave.com/wp/wp4389589.jpg') no-repeat center center/cover;
    font-family: Arial, sans-serif;
    color: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background: rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(10px);
    padding: 30px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    display: flex;
    flex-direction: column;
    align-items: center;
    max-width: 80%;
    width: 400px;
}

.btn-custom,
.btn-secondary {
    background: rgba(255, 255, 255, 0.3);
    border: none;
    color: #ffffff;
    border-radius: 25px;
    padding: 10px 20px;
    transition: all 0.3s ease;
    margin-top: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(5px);
    text-decoration: none; /* Remove underline from links */
}

.btn-custom:hover,
.btn-secondary:hover {
    transform: scale(1.05);
    background: rgba(255, 255, 255, 0.5);
}

        @media (max-width: 768px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="display-4 mb-4"> SMA Anime</h1>
        <div class="mb-4">Pendaftaran Siswa Baru</div>
        <a href="./student-list.php" class="btn btn-custom btn-lg">Students List</a>
        <a href="./add.php" class="btn btn-secondary btn-lg">Add New Student</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-GLhlTQ8iRABdZLl6O5oVMWSktQOp6b7In1Zl3/Ji5Ck6E2+nJQF+8xjzZsbO6PDm" crossorigin="anonymous"></script>
</body>

</html>
