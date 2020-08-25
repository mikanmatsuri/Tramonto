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
                                            <li><a href="menu-soup-and-salad.php" class="font-color-fix">Soup and Salad</a></li>
                                            <li><a href="menu-appetizer-pizzas.php">Appetizer Pizzas</a></li>
                                            <li><a href="menu-pasta.php">pasta</a></li>
                                            <li><a href="menu-pollo-vitello.php">Pollo & Vitello</a></li>
                                            <li><a href="menu-mare.php">Mare</a></li>
                                            <li><a href="menu-beverage.php">beverage</a></li>
                                        </ul>
                                    </div>
                                    <div class="center-restaurant-menu-appetizers">
                                        <span>
                                            <p>Zuppa del Giorno  Soup of the day</p>
                                        </span>
                                        <span>
                                            <p>Zuppa di casa  Pasta fagioli- pasta and beans</p>
                                        </span>
                                        <span>
                                            <p>Add chicken 4. Shrimp or scallops 6. Crab meat</p>
                                        </span>
                                        <span>
                                            <p>Insalata Caesar</p>
                                            <p>Crisp romaine leaves, fresh croutons, shredded Parmigiana cheese, our own Caesar dressing. 8</p>
                                        </span>
                                        <span>
                                            <p>Salmone di Caesar</p>
                                            <p>Crisp romaine leaves, fresh croutons, shredded Parmigiana cheese,
                                                our own Caesar dressing topped with filet of wild Salmon.
                                            </p>
                                        </span>
                                        <span>
                                            <p>Insalata Caprese</p>
                                            <p>Fresh mozzarella cheese, tomatoes, fresh basil, garlic and oil. </p>
                                        </span>
                                        <span>
                                            <p>Insalata  Mista</p>
                                            <p>Spring mix, tomatoes, balsamic vinaigrette. </p>
                                        </span>
                                        <span>
                                            <p>Insalata di spinachi</p>
                                            <p>Fresh baby spinach with toasted pine nuts, topped with goat cheese in our balsamic </p>
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




