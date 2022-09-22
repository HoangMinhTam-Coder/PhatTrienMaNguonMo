<?php ?>

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
                TÍNH TIỀN KARAOKE
            </div>
            <div class="form_body">
                <div class="form__item">
                    <label for="time_start" class="form__label">GIỜ BẮT ĐẦU</label>
                    <input type="text" class="form__input" name="time_start">
                </div>
                <div class="form__item">
                    <label for="time_end" class="form__label">GIỜ KẾT THÚC</label>
                    <input type="text" class="form__input" name="time_end">
                </div>
                <div class="form__item mb__10">
                    <label for="pay" class="form__label">TIỀN THANH TOÁN</label>
                    <input type="text" style="background-color: #54BAB9;"  class="form__input" name="pay" readonly value="
                    <?php 
                        $message = "Thoi gian ket thuc phai lon hon thoi gian bat dau";
                        $message2 = "Thoi gian ket thuc ko the bang thoi gian ket thuc";
                        $message3 = "Thoi gian nghỉ";
                        $tien = 0;
                        if(isset($_POST['submit'])) {
                            if($_POST['time_end'] > $_POST['time_start']) {
                                $time = $_POST['time_end'] - $_POST['time_start'];
                                    if($_POST['time_start'] <= 10 && $_POST['time_end'] >= 24) {
                                        echo $message3;
                                    }
                                    else {
                                        if($time < 17) {
                                            $tien = $time * 20000;
                                        } 
                                        else {
                                            if($time < 24) {
                                                $tien = 17 * 20000 + (($time - 17) * 45000);
                                            }
                                        }
                                    }
                                echo $tien;
                            } else {
                                echo $message;
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