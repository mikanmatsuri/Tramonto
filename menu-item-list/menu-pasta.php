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
                                            <li><a href="menu-appetizer-pizzas.php">Appetizer Pizzas</a></li>
                                            <li><a href="menu-pasta.php" class="font-color-fix">pasta</a></li>
                                            <li><a href="menu-pollo-vitello.php">Pollo & Vitello</a></li>
                                            <li><a href="menu-mare.php">Mare</a></li>
                                            <li><a href="menu-beverage.php">beverage</a></li>
                                        </ul>
                                    </div>
                                    <div class="center-restaurant-menu-appetizers">
                                        <span>
                                            <p>Capelli D’Angelo</p>
                                            <p>Our own sauce with lots of fresh basil over angel hair pasta.12 Add meat sauce. </p>
                                        </span>
                                        <span>
                                            <p>Lasagna Napoletana</p>
                                            <p>Homemade- ricotta, meat sauce, melted mozzarella. </p>
                                        </span>
                                        <span>
                                            <p>Gnocchi</p>
                                            <p>Italian potato dumplings, served with your choice of red, pink  or gorgonzola sauce</p>
                                        </span>
                                        <span>
                                            <p>Eggplant Parmigiana</p>
                                            <p>Layers of delicately breaded eggplant, mozzarella & ricotta cheese, tomato sauce. </p>
                                        </span>
                                        <span>
                                            <p>Tortelacci</p>
                                            <p>Jumbo tortellini with a blend of parmigiana and ricotta cheeses, Italian herbs, rose sauce 16.5</p>
                                        </span>
                                        <span>
                                            <p>Ravioli del Amore</p>
                                            <p>Three- cheese ravioli, sautéed spinach, tomato cream sauce, fontina cheese</p>
                                        </span>
                                        <span>
                                            <p>Stuffed Rigatoni</p>
                                            <p>Ricotta and Italian herb filled pasta tubes served in a sun-dried tomato and gorgonzola cheese sauce</p>
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




