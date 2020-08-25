<!DOCTYPE html>
<html lang="ja">
    <!--head.phpのモジュールを呼び出している-->
    <?php include("../menu-modules/head.php")?>

    <body>
    <div class="contents">
        <div class="background-photo">
            <div class="left-top-logo">
                <a href="../index.php">
                    <img alt="イタリア料理店内の背景画像" src="../img/site-logo.png">
                </a>
            </div>
            <div class="middle-conts">
                <!--left-conts.phpのモジュールを呼び出している-->
                <?php include ("../menu-modules/left-conts.php")?>

                <!-- aboutから変更したバージョンも作る ②MENU-->
                <div class="center-restaurant-conts">
                    <div>
                        <div class="center-menu-header">MENU</div>
                        <div class="center-menu-container">
                            <div class="center-restaurant-menu-sentence">
                                <div class="center-restaurant-menu-list">
                                    <ul>
                                        <li><a href="menu-appetizers.php">Appetizers</a></li>
                                        <li><a href="menu-soup-and-salad.php">Soup and Salad</a></li>
                                        <li><a href="menu-appetizer-pizzas.php">Appetizer Pizzas</a></li>
                                        <li><a href="menu-pasta.php">pasta</a></li>
                                        <li><a href="menu-pollo-vitello.php">Pollo & Vitello</a></li>
                                        <li><a href="menu-mare.php">Mare</a></li>
                                        <li><a href="menu-beverage.php" class="font-color-fix">beverage</a></li>
                                    </ul>
                                </div>
                                <div class="center-restaurant-menu-appetizers">
                                    <span>
                                        <p>Side Dishes</p>
                                    </span>
                                    <span>
                                        <p>Sautéed Spinach</p>
                                        <p>Steamed Vegetables</p>
                                        <p>Meatballs or Sausage</p>
                                        <p>Sautéed Broccoli Rabe</p>
                                    </span>
                                    <span>
                                        <p>Bambino</p>
                                    </span>
                                    <span>
                                        <p>Kid’s corner for ages 10 and under served with small drink Chicken Fingers with French fries</p>
                                        <p>Cheese Ravioli</p>
                                        <p>Meatballs or sausage</p>
                                    </span>
                                    <span>
                                        <p>Plain Pizza</p>
                                        <p>Penne or Spaghetti with tomato sauce or butter</p>
                                    </span>
                                    <span>
                                        <p>Bevandi</p>
                                    </span>
                                    <span>
                                        <p>Soft drink</p>
                                        <p>Coffee</p>
                                        <p>Espresso</p>
                                        <p>Cappuccino</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--right-conts.phpのモジュールを呼び出している-->
                <?php include ("../menu-modules/right-conts.php")?>
                <div class="clear"></div>
            </div>
            <!-- floatをクリアボスしている -->
            <div class="clear"></div>

            <!--gallery-conts.phpのモジュールを呼び出している-->
            <?php include ("../menu-modules/gallery-conts.php")?>

            <!-- floatをクリアボスしている -->
            <div class="clear"></div>

            <!--footer.phpのモジュールを呼び出している-->
            <?php include ("../menu-modules/footer.php")?>
            <!-- floatをクリアボスしている -->
            <div class="clear"></div>
        </div>
    </div>
    </body>
</html>




