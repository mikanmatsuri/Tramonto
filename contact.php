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
                            <div class="center-menu-header">CONTACT</div>
                            <div class="center-menu-container">
                                <div>
                                    <span class="contact-center-menu-sentence">
                                        Telephone 215-542-7144
                                    </span>
                                    <span class="contact-center-menu-sentence">
                                        215-542-5003
                                    </span>
                                    <span class="contact-center-menu-sentence">
                                        Welsh Road Maple Glen, PA 19002
                                    </span>
                                </div>
                                <div class="center-contact-conts">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12344878.428305836!2d3.7241571053141707!3d40.94015826668297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d4fe82448dd203%3A0xe22cf55c24635e6f!2z44Kk44K_44Oq44Ki!5e0!3m2!1sja!2sjp!4v1597827818907!5m2!1sja!2sjp" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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

