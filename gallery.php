<!DOCTYPE html>
<html lang="ja">
<!--head.phpのモジュールを呼び出している-->
<?php include("modules/head.php")?>

    <body>
        <div class="contents">
            <div class="background-photo">
                <div class="left-top-logo">
                    <a href="index.php">
                        <img alt="イタリア料理店内の背景画像" src="img/site-logo.png">
                    </a>
                </div>
                <div class="middle-conts">
                    <!--left-conts.phpのモジュールを呼び出している-->
                    <?php include ("modules/left-conts.php")?>


                    <!--中央は可変する-->
                    <div class="center-conts">
                        <div>
                            <div class="center-menu-header">Gallery</div>
                            <div class="center-menu-container gallery-page-conts">
                                <div class="gallery-page-allow-left">
                                    <img src="img/gallry-page-left-allow.png">
                                </div>
                                <div class="gallery-page-center-conts">
                                    <div class="gallery-page-pic-box">
                                        <!--余裕があればJSで画像を表示させて動かす-->
                                        <img src="img/gallery-left.png">
                                        <img class="gallery-page-pic-hidden" src="img/gallery-center.png">
                                        <img class="gallery-page-pic-hidden" src="img/gallery-right.png">
                                    </div>
                                </div>
                                <div class="gallery-page-allow-right">
                                    <img src="img/gallry-page-right-allow.png">
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>

                    <!--right-conts.phpのモジュールを呼び出している-->
                    <?php include ("modules/right-conts.php")?>
                    <div class="clear"></div>
                </div>
                <!-- floatをクリアボスしている -->
                <div class="clear"></div>

                <!--gallery-conts.phpのモジュールを呼び出している-->
                <?php include ("modules/gallery-conts.php")?>
                <!-- floatをクリアボスしている -->
                <div class="clear"></div>

                <!--footer.phpのモジュールを呼び出している-->
                <?php include ("modules/footer.php")?>
                <!-- floatをクリアボスしている -->
                <div class="clear"></div>
            </div>
        </div>
    </body>
</html>
