<!DOCTYPE html>
<html>
<head>
    <title>Заголовок страницы в браузере</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        </ul>
    </header>
</div>
<div class="container">
    <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') { ?>
        <form action="form.php" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Firstname</label>
                <input type="text" class="form-control" name="firstname" id="exampleFormControlInput1" value="<?php echo $_POST['firstname'] ?? '' ?>">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Lastname</label>
                <input type="text" class="form-control" name="lastname" id="exampleFormControlInput2" value="<?php echo $_POST['lastname'] ?? '' ?>" placeholder="Фамилия">
            </div>

            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Сохранить">
            </div>
        </form>
        <?php
    }
    ?>
</div>
<div class="container">
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo '<b>firstname</b> = ' . ($_POST['firstname'] ?? '') . '<br>';
        echo 'lastname = ' . ($_POST['lastname'] ?? '');
    }
    ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>