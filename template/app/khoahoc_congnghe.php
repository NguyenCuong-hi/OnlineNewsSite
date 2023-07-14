<html>

</html>
<?php
require_once(BASE_PATH . '/template/app/layouts/header.php');
?>


<div class="body_getdata" style="display: flex; margin-top: 30px; margin-right: 32px;">

    <?php require_once(BASE_PATH . '/template/app/layouts/menuleft.php') ?>

    <div class="body_data" style="width: 62%; display: flex;  flex-direction: column;
         padding: 10px 50px; box-sizing: border-box">
        <div style="width: 100%; display: flex; justify-content: center">
            <form method="GET" action="<?= url('khoahoccongnghe') ?>"
                  style="display: flex; margin-right: 8px ; width: 100%;">
                <div style="display: flex; align-items: center; width: 80%;">
                    <div style="font-size: 16px; margin-right: 8px; display: flex;
                    flex-direction: column ; width: 100%">
                        <input type="text" name="keyword"
                                 style="padding-left: 8px ; width: 100%; margin: 1px 3px;"/>
                        <button type="submit"
                                style=" margin-left: 3px; background-color: #ddd; border: none;
                            height: 30px;  border-radius: 4px; font-size: 16px; width: 92px;">
                            Tìm kiếm
                        </button>
                    </div>
                </div>

                <div style="display: flex; width: 50%">
                    <label style="margin-right: 8px; width: 50%">
                        <input type="radio" name="title"> Tiêu đề
                    </label>
                    <label style="width: 50%">
                        <input type="radio" name="author"> Tác giả
                    </label>
                </div>

            </form>

        </div>
        <?php foreach ($data as $datas): ?>
            <div>
                <div style="font-size: 16px; font-weight: 500; border-bottom: 2px dotted red;
                border-left: 2px solid rgb(241,243,244); padding-left: 30px;">
                    <span>
                        <?php $id = $datas['id'] ?>
                        <a style=" font-weight: 600; font-size: 18px" href="<?= url('khcn/tap-chi/id=' . $id) ?>">
                            <?php echo $datas['title']; ?>
                            </a>
                    </span>
                    <div style=" margin-bottom: 8px">
                        <ul style="list-style-type: circle; margin-bottom: 8px">
                            <li>Số tạp chí: <?php echo $datas['code_name'] ?></li>
                            <li>Tác giả: <?php echo $datas['author_name'] ?></li>
                            <li>Tạp chí xuất bản: <?php echo $datas['cat_name'] ?></li>
                            <li><a href="#">Tóm tắt</a></li>
                        </ul>
                    </div>
                    <div class="footer-element" style="text-align: end; margin-bottom: 8px;
                    display: flex; justify-content: flex-end;">
                        <div class="icon" style="margin-right: 12px;">
                            <img style="max-width: 24px; max-height: 19px ;margin: -4px 4px 2px;"
                                 src="./public/banner-image/dowload.png" alt="Download Icon"/>
                        </div>
                        <div class="icon">
                            <img style="max-width: 24px; max-height: 12px"
                                 src="./public/banner-image/eyes.png" alt="Eyes Icon"/>
                        </div>
                    </div>

                </div>

            </div>
        <?php endforeach; ?>
    </div>

    <div class="img_lienket" style="width: 15%; ">
        <img style="width: 100%" src="./public/banner-image/bo-cong-thuong.png">
        <img style="width: 100%" src="./public/banner-image/DHKTKTCN.png">
        <img style="width: 100%" src="./public/banner-image/khcn.png">

    </div>

</div>
<?php
require_once(BASE_PATH . '/template/app/layouts/phantrang.php')
?>

<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>