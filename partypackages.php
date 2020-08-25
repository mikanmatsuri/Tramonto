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

                <!--中央は可変する ※これから作成予定-->
                <div class="center-conts">
                    <div>
                        <div class="center-menu-header">Partypackage</div>
                        <div class="center-menu-container">
                            <div class="center-news-sentence in-production-conts">
                                <span class="in-production">制作中( ´ ▽ ` )ﾉ</span>
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
