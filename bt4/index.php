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
    <?php 
        $total = 0;
        function myTest() {
            if(isset($_POST['submit'])) {
                if(is_numeric($_POST['math']) && is_numeric($_POST['physics']) && is_numeric($_POST['chemistry'])) {
                    global $total;
                    $total = $_POST['math'] + $_POST['physics'] + $_POST['chemistry'];
                    return $total;
                } 
            }
        }
    ?>

    <form action="index.php" method="post" class="form">
        <div class="form__container">
            <div class="form__title">
                KẾT QUẢ THI ĐẠI HỌC
            </div>
            <div class="form_body">
                <div class="form__item">
                    <label for="math" class="form__label">TOÁN</label>
                    <input type="text" class="form__input" name="math">
                </div>
                <div class="form__item">
                    <label for="physics" class="form__label">LÝ</label>
                    <input type="text" class="form__input" name="physics">
                </div>
                <div class="form__item">
                    <label for="chemistry" class="form__label">HÓA</label>
                    <input type="text"  class="form__input" name="chemistry">
                </div>
                <div class="form__item">
                    <label for="benchmarks" class="form__label">ĐIỂM CHUẨN</label>
                    <input type="text"  class="form__input" name="benchmarks">
                </div>
                <div class="form__item">
                    <label for="total_score" class="form__label">TỔNG ĐIỂM</label>
                    <input type="text" style="background-color: #54BAB9;"  class="form__input" name="total_score" readonly value="<?php
                            echo myTest();
                        ?>">
                </div>
                <div class="form__item mb__10">
                    <label for="sum_ct" class="form__label">KẾT QUẢ THI</label>
                    <input type="text" style="background-color: #54BAB9;"  class="form__input" name="sum_ct" readonly value="<?php
                            if(isset($_POST['submit'])) {
                                if(($_POST['math'] > 0) && ($_POST['physics'] > 0) && ($_POST['chemistry'] > 0) && (myTest() > $_POST['benchmarks'])){
                                        echo "Đậu";
                                    }
                                    else {
                                        echo "Rớt";
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