<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post" class="form">
        <div class="form__container">
            <div class="form__title">
                DIỆN TÍCH HÌNH CHỮ NHẬT
            </div>
            <div class="form_body">
                <div class="form__item">
                    <label for="height" class="form__label">Chiều dài</label>
                    <input type="text" class="form__input" name="height">
                </div>
                <div class="form__item">
                    <label for="width" class="form__label">Chiều rộng</label>
                    <input type="text" class="form__input" name="width">
                </div>
                <div class="form__item">
                    <label for="area" class="form__label">Diện tích</label>
                    <input type="text" class="form__input" name="area" readonly 
                        value="<?php
                            if(isset($_POST['submit'])) {
                                if(is_numeric($_POST['height']) && is_numeric($_POST['width'])) {
                                    $total = $_POST['height'] * $_POST['width'];
                                    echo $total;
                                } 
                                else {
                                    echo 'Numberic values are required';
                                }
                            }
                        ?>">
                </div>
                <button type="submit" class="form__submit" name="submit">Tính</button>
            </div>
        </div>
    </form>
</body>
</html>