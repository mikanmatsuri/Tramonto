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

                    <!-- 中央の作る メンバーシップのフォーム作る-->
                    <div class="center-conts">
                        <div>
                            <div class="center-menu-header">Virtual Tour</div>
                            <div class="center-menu-container">
                                <div class="virtualtour-center">
                                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/nvadRx0Ctdg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
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
