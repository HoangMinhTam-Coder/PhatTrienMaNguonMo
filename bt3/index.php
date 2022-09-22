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
                    <label for="name_it" class="form__label">TÊN CHỦ HỘ</label>
                    <input type="text" class="form__input" name="name_it">
                </div>
                <div class="form__item">
                    <label for="old_inx" class="form__label">CHỈ SỐ CŨ</label>
                    <input type="text" class="form__input" name="old_inx">
                </div>
                <div class="form__item">
                    <label for="new_inx" class="form__label">CHỈ SỐ MỚI</label>
                    <input type="text"  class="form__input" name="new_inx">
                </div>
                <div class="form__item">
                    <label for="price" class="form__label">ĐƠN GIÁ</label>
                    <input type="text"  class="form__input" name="price">
                </div>
                <div class="form__item">
                    <label for="sum_ct" class="form__label">SỐ TIỀN THANH TOÁN</label>
                    <input type="text" style="background-color: #54BAB9;"  class="form__input" name="sum_ct" readonly value="<?php
                            $dongia = 0;
                            if(isset($_POST['submit'])) {
                                if(is_numeric($_POST['price'])) {
                                    $dongia = $_POST['price'];
                                }
                                else {
                                    $dongia = 2000;
                                }
                                if( is_numeric($_POST['old_inx']) && is_numeric($_POST['new_inx'])) {
                                    $total = ($_POST['new_inx'] - $_POST['old_inx']) * $dongia;
                                    echo round($total);
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