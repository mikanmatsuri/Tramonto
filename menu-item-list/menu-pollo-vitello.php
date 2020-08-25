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
                                            <li><a href="menu-pasta.php">pasta</a></li>
                                            <li><a href="menu-pollo-vitello.php" class="font-color-fix">Pollo & Vitello</a></li>
                                            <li><a href="menu-mare.php">Mare</a></li>
                                            <li><a href="menu-beverage.php">beverage</a></li>
                                        </ul>
                                    </div>
                                    <div class="center-restaurant-menu-appetizers">
                                        <span>
                                            <p>Pollo Marsala</p>
                                            <p>Sautéed chicken breast, mushrooms and sun-dried tomatoes, flamed Marsala wine sauce.</p>
                                        </span>
                                        <span>
                                            <p>Petto di pollo alla Griglia</p>
                                            <p>Grilled marinated chicken breast, roasted new potatoes, grilled polenta, sautéed spinach with fontina cheese.</p>
                                        </span>
                                        <span>
                                            <p>Pollo con Carciofi</p>
                                            <p>Grilled chicken breast, crisp bacon, capers, artichokes, sun-dried tomatoes, lemon and white wine butter sauce served with steamed vegetables.</p>
                                        </span>
                                        <span>
                                            <p>Pollo con Funghi</p>
                                            <p>Sautéed chicken medallions, mushrooms and sun-dried tomatoes, marinara cream sauce, homemade three-cheese ravioli. </p>
                                        </span>
                                        <span>
                                            <p>Pollo e Bello</p>
                                            <p>Sauteed chicken, portabello mushrooms and roasted red peppers, flamed with vodka in a blush cream sauce.</p>
                                        </span>
                                        <span>
                                            <p>Pollo Milanese</p>
                                            <p>Lightly breaded chicken breast sautéed and topped with fresh chopped tomatoes over spring mix or baby greens finished with shaved parmagiano reggiano.</p>
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




