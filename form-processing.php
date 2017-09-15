<?php
$status = '';
$message = '';

if (isset($_POST['form']) && $_POST['form'] === 'registration') {
    $status = 'success';
    $message = 'Вы успешно зарегистрировались!';

    /**************** проверка полей формы ************************/
    do {
        // проверка имя на пустоту
        if (!isset($_POST['name']) || $_POST['name'] === '') {
            $status = 'danger';
            $message = "Имя не должно быть пустое";
            break;
        }
        // проверка имя на длину
        $name = $_POST['name'];
        $nameLen = strlen($name);
        $minNameLen = 4;
        $maxNameLen = 20;
        if ($nameLen < $minNameLen) {
            $status = 'danger';
            $message = "Имя не должно быть меньше $minNameLen символов";
            break;
        }
        if ($nameLen > $maxNameLen){
            $status = 'danger';
            $message = "Имя не должно быть больше $maxNameLen символов";
            break;
        }
        // проверка емейла на пустоту
        if (!isset($_POST['email']) || $_POST['email'] === '') {
            $status = 'danger';
            $message = "Емейл не должн быть пустым";
            break;
        }
        // проверка емейла на знаки
        $Email = $_POST['email'];
        if(!preg_match("/^([a-z0-9_\.-]+)@([a-z0-9_\.-]+)\.([a-z\.]{2,6})$/", $Email)) {
            $status = 'danger';
            $message = "Уведите правильный емейл";
            break;
        }
        // проверка телефона на пустоту
        if (!isset($_POST['tel']) || $_POST['tel'] === '' ) {
            $status = 'danger';
            $message = "Телефон не должен быть пустым";
            break;
        }
        // проверка правельности ввода телефона
        $Tel = $_POST['tel'];
        // todo
        if(!preg_match("/^\+380\d{9}$/", $Tel)) {
            $status = 'danger';
            $message = "Неверно введен телефон";
            break;
        }
        // проверка пароля на пустоту
        if (!isset($_POST['pass']) || $_POST['pass'] === '' ) {
            $status = 'danger';
            $message = "Пароль не должен быть пустым";
            break;
        }
        // проверка правельности введения пароля
        $Pass = $_POST['pass'];
        // todo
        if(!preg_match("/^[\da-zA-Z_]{6,20}$/",$Pass)) {
            $status = 'danger';
            $message = "неверно введен пароль";
            break;
        }
        // проверка повторного пароля на пустоту
        if (!isset($_POST['pass-conf']) || $_POST['pass-conf'] === '') {
            $status = 'danger';
            $message = "Повторний пароль не должен быть пустым";
            break;
        }
        //проверка повторения пароля
        $Pass2 = $_POST['pass-conf'];
        if ($Pass2 !== $Pass) {
            $status = 'danger';
            $message = "неверно введен повторний пароль";
            break;
        }
        // проверка дати на пустоту
        if (!isset($_POST['birth']) || $_POST['birth'] === '') {
            $status = 'danger';
            $message = "дата не должна быть пуста";
            break;
        }
        //проверка правильности ввода даты
        $test_date = $_POST['birth'];
        $test_arr  = explode('-', $test_date);
        if (count($test_arr) == 3) {
            if (!checkdate($test_arr[0], $test_arr[1], $test_arr[2])) {
                $status = 'danger';
                $message = "неправильная дата";
                break;
            } else {
                // problem with dates ...
            }
        } else {
            // problem with input ...
        }

    } while (0);
    /*************** проверка полей формы ************************/
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Обработка форм</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- messages -->
            <div class="col-3"></div>
            <div class="col-6">
                <?= "<p class='alert alert-$status'>$message </p>"; ?>
            </div>
            <div class="col-3"></div>
            <!-- form -->
            <div class="col-3"></div>
            <div class="col-6">
                <form name="test" action="form-processing.php"  method="post">
                    <input type="hidden" name="form" value="registration">
                    <div class="form-group row">
                        <div class="col-3">
                            <label for="example-text-input" class="col-form-label">Name</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" name="name" placeholder="Name" id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-3">
                            <label for="example-email-input" class="col-form-label">Email</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" name="email" placeholder="bootstrap@example.com" id="example-email-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-3">
                            <label for="example-tel-input" class="col-form-label">Telephone</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="tel" name="tel" placeholder="1-(555)-555-5555" id="example-tel-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-3">
                            <label for="example-password-input" class="col-form-label">Password</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="password" name="pass" id="example-password-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-3">
                            <label for="example-password" class="col-form-label">Password-confirmation</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control"  type="password" name="pass-conf"  id="example-password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-3">
                            <label for="example-date-input" class="col-form-label">Date of birth</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="date" name="birth" placeholder="2011-08-19" id="example-date-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-3">
                            <label class="col-form-label">Sex</label>
                        </div>
                        <div class="col-9">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="sex" checked id="inlineRadio2" value="male"> male
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="sex" id="inlineRadio3" value="female"> female
                                </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>
