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
                    <div class="careers-center-conts">
                        <div>
                            <div class="careers-center-menu-header">CAREERS</div>
                            <div class="careers-center-menu-container">
                                <div class="center-careers">
                                    <form class="careers-conts">
                                        <div class="name-birthday-conts">
                                            <div class="name-container">
                                                <div class="label-list">
                                                    <label for="name">Name</label>
                                                </div>
                                                <input class="input-list membership-input-list" type="text">
                                            </div>
                                            <div class="birthday-container">
                                                <div class="label-list">
                                                    <label for="birthday" class="membership-birthday-input-list">Birthday</label>
                                                </div>
                                                <input class="input-list membership-birthday-input-list" type="date">
                                            </div>
                                        </div>
                                        <div class="mail-anniversaries-conts">
                                            <div class="mail-container mail-container-careers">
                                                <div class="label-list">
                                                    <label for="mail">Mail</label>
                                                </div>
                                                <input class="input-list membership-email-input-list" type="email" placeholder="tramonto@gmail.com">
                                            </div>
                                            <div class="anniversaries-container anniversaries-container-left anniversaries-container-careers">
                                                <div  class="label-list">
                                                    <label for="">Day Time Phone</label>
                                                </div>
                                                <input class="input-list membership-input-list" type="tel">
                                            </div>
                                            <div class="anniversaries-container anniversaries-container-left anniversaries-container-careers">
                                                <div  class="label-list">
                                                    <label for="">Night Time Phone</label>
                                                </div>
                                                <input class="input-list membership-input-list" type="tel">
                                            </div>
                                        </div>
                                        <div class="comment-conts">
                                            <div class="comment-conatainer">
                                                <div class="label-list">
                                                    <label for="message">Comment</label>
                                                </div>
                                                <textarea></textarea>
                                            </div>
                                        </div>
                                        <!-- floatをクリアボスしている -->
                                        <div class="clear"></div>
                                        <div class="submit-button">
                                            <div class="submit-botton-conts">
                                                <input class="button10" type="submit" value="SUBMIT"></button>
                                            </div>
                                        </div>
                                    </form>
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
