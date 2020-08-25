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
                                            <li><a href="menu-pollo-vitello.php">Pollo & Vitello</a></li>
                                            <li><a href="menu-mare.php" class="font-color-fix">Mare</a></li>
                                            <li><a href="menu-beverage.php">beverage</a></li>
                                        </ul>
                                    </div>
                                    <div class="center-restaurant-menu-appetizers">
                                        <span>
                                            <p>Cozze o Vongole</p>
                                            <p>Steamed mussels or clams sautéed with garlic and oil, Italian herbs, tossed over linguini, red or white.</p>
                                        </span>
                                        <span>
                                            <p>Shrimp  Puttanesca</p>
                                            <p>Sautéed shrimp in a spicy tomato sauce with garlic, capers and roasted Calamata olives, tossed over linguini.</p>
                                        </span>
                                        <span>
                                            <p>Pescatore</p>
                                            <p>Ocean shrimp, scallops and clams, sautéed with Italian herbs, tossed over linguine, red or white.</p>
                                        </span>
                                        <span>
                                            <p>Gamberi e calamari</p>
                                            <p>Sautéed shrimp, mussels and squid, tossed over angel hair pasta, red or white sauce. 23.5</p>
                                        </span>
                                        <span>
                                            <p>Risotto al Granchio e Gamberi</p>
                                            <p>Arborio rice with a medley of sautéed shrimp, scallops and lump crabmeat, tomatoes, dry white wine, garlic and oil.</p>
                                        </span>
                                        <span>
                                            <p>Capesante</p>
                                            <p>Grilled scallops topped with smoked paprika, finished in citrus beurre blanc sauce</p>
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




