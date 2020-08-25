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

                    <!--中央は可変する-->
                    <div class="center-restaurant-conts">
                        <div>
                            <div class="center-menu-header">MENU</div>
                            <div class="center-menu-container">
                                <div class="center-restaurant-menu-sentence">
                                    <div class="center-restaurant-menu-list">
                                        <ul>
                                            <li><a href="menu-appetizers.php">Appetizers</a></li>
                                            <li><a href="menu-soup-and-salad.php">Soup and Salad</a></li>
                                            <li><a href="menu-appetizer-pizzas.php" class="font-color-fix">Appetizer Pizzas</a></li>
                                            <li><a href="menu-pasta.php">pasta</a></li>
                                            <li><a href="menu-pollo-vitello.php">Pollo & Vitello</a></li>
                                            <li><a href="menu-mare.php">Mare</a></li>
                                            <li><a href="menu-beverage.php">beverage</a></li>
                                        </ul>
                                    </div>
                                    <div class="center-restaurant-menu-appetizers">
                                        <span>
                                            <p>Plain Pizzza</p>
                                            <p>Mozzarella, basil, tomato sauce. </p>
                                        </span>
                                        <span>
                                            <p>Margherita</p>
                                            <p>Fresh mozzarella, basil, tomato sauce.</p>
                                        </span>
                                        <span>
                                            <p>Pollo alla Grilia</p>
                                            <p>Grilled marinated chicken breast, mushrooms,</p>
                                            <p>sun-dried tomatoes, mozzarella cheese 	</p>
                                        </span>
                                        <span>
                                            <p>Clams  Casino</p>
                                            <p>White pizza, clams, crisp bacon, mozzarella cheese </p>
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




