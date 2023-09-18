<html>
<head>
    <title>Laba_Vasileva</title>
</head>
<body>
<p>Hello world!</p>

<form>
    <div class="container">
        <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') { ?>
            <form action="form.php" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Firstname</label>
                    <input type="text" class="form-control" name="Имя" id="exampleFormControlInput1" value="<?php echo $_POST['Имя'] ?? '' ?>" placeholder="Введите Ваше Имя">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Lastname</label>
                    <input type="text" class="form-control" name="Фамилия" id="exampleFormControlInput2" value="<?php echo $_POST['Фамилия'] ?? '' ?>" placeholder="Введите Вашу Фамилию">
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
            echo '<b>Имя</b> = ' . ($_POST['Имя'] ?? '') . '<br>';
            echo 'Фамилия = ' . ($_POST['Фамилия'] ?? '');
        }
        ?>
    </div>
</form>

</body>
</html>