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
                    <div class="center-restaurant-conts">
                        <div>
                            <div class="center-menu-header">MENU</div>
                            <div class="center-menu-container">
                                <div class="center-restaurant-menu-sentence">
                                    <div class="center-restaurant-menu-list">
                                        <ul>
                                            <li><a href="menu-item-list/menu-appetizers.php" class="font-color-fix">Appetizers</a></li>
                                            <li><a href="menu-item-list/menu-soup-and-salad.php">Soup and Salad</a></li>
                                            <li><a href="menu-item-list/menu-appetizer-pizzas.php">Appetizer Pizzas</a></li>
                                            <li><a href="menu-item-list/menu-pasta.php">pasta</a></li>
                                            <li><a href="menu-item-list/menu-pollo-vitello.php">Pollo & Vitello</a></li>
                                            <li><a href="menu-item-list/menu-mare.php">Mare</a></li>
                                            <li><a href="menu-item-list/menu-beverage.php">beverage</a></li>
                                        </ul>
                                    </div>
                                    <div class="center-restaurant-menu-appetizers">
                                        <span>
                                            <p>Bruschetta</p>
                                            <p>Tomato salad, extra virgin olive oil, red onion, on slices of toasted homemade bread.</p>
                                            <p>add shrimp.</p>
                                        </span>
                                        <span>
                                            <p>Mozzarella di Fritti</p>
                                            <p>Our homemade version, delicately coated and deep-fried, served w/ marinara sauce.</p>
                                        </span>
                                        <span>
                                            <p>Polenta con Funghi</p>
                                            <p>Polenta, sautéed white mushrooms, and tomato sauce</p>
                                        </span>
                                        <span>
                                            <p>Asparagi</p>
                                            <p>Fresh asparagus and goat cheese wrapped in prosciutto and oven baked,</p>
                                            <p>melted mozzarella cheese, marinated tomatoes.</p>
                                        </span>
                                        <span>
                                            <p>Impatate di cozze o vongole</p>
                                            <p>Steamed mussels or clams, sautéed garlic, olive oil and Italian herbs, white wine sauce.</p>
                                        </span>
                                        <span>
                                            <p>Portabello alla Griglia</p>
                                            <p>Grilled Portabello mushroom, sautéed spinach and lump crabmeat,</p>
                                            <p>marinated tomatoes, in a scampi sauce.</p>
                                        </span>
                                        <span>
                                            <p>Fritto di Calamari</p>
                                            <p>Delicately coated fried squid rings, marinara sauce.</p>
                                        </span>
                                        <span>
                                            <p>Giardino</p>
                                            <p>A medley of grilled vegetables, olives, prosciutto, imported cheese, herbs and virgin
                                            olive oil.</p>
                                        </span>
                                        <span>
                                            <p>Carpaccio di Manzo</p>
                                            <p>Thinly sliced raw filet mignon, shaved pecorino Romano, capers, olive oil and lemon.</p>
                                        </span>
                                        <span>
                                            <p>Casino di vongole</p>
                                            <p>Clams stuffed with medley of vegetables baked in oven and topped with bacon.</p>
                                        </span>
                                        <span>
                                            <p>Zupetta</p>
                                            <p>Our most famous dish steamed shrimp, mussels, scallops and clams in a garlic, olive oil,
                                            white wine and tomato broth.</p>
                                        </span>
                                        <span>
                                            <p>La Parmigiana</p>
                                            <p>Layer of eggplant, sliced Roma tomatoes, fresh Mozzarella baked in the oven,</p>
                                            <p>topped with Marinara sauce.</p>
                                        </span>
                                        <span>
                                            <p>* * *</p>
                                            <p>Asparagi, Portabell0 alla Griglia and Zupetta not available for Happy Hour</p>
                                        </span>
                                    </div>
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
        <!--①floatのレフトさん使う　②widthの％を指定する ※2020　デスクトップ　サイズを調べる-->
    </body>
</html>
<!--ブラウザのサイズを弄った時、スクロールバーを作る-->
<!--1度目のクリアボスした後、画像をいれるときフロートレフトさんを使う。divの中にimgを描く。-->



