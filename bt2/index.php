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
                DIỆN TÍCH VÀ CHU VI HÌNH TRÒN
            </div>
            <div class="form_body">
                <div class="form__item">
                    <label for="radius" class="form__label">Bán kính</label>
                    <input type="text" class="form__input" name="radius">
                </div>
                <div class="form__item">
                    <label for="area" class="form__label">Diện tích</label>
                    <input type="text" style="background-color: #54BAB9;" class="form__input" name="area" readonly 
                        value="<?php
                            if(isset($_POST['submit'])) {
                                if(is_numeric($_POST['radius'])) {
                                    $area = pi() * pow($_POST['radius'],2);
                                    echo round($area);
                                } 
                                else {
                                    echo 'Numberic values are required';
                                }
                            }
                        ?>">
                </div>
                <div class="form__item">
                    <label for="circum" class="form__label">Chu vi</label>
                    <input type="text" style="background-color: #54BAB9;"  class="form__input" name="circum" readonly 
                        value="<?php
                            if(isset($_POST['submit'])) {
                                if(is_numeric($_POST['radius'])) {
                                    $circum = 2 * pi() * $_POST['radius'];
                                    echo round($circum);
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