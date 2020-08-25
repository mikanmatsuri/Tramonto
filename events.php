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
                            <div class="center-menu-header">EVENTS</div>
                            <div class="center-menu-container">
                                <div class="center-news-sentence">
                                    <span>
                                        The Tramonto Grille is right in my immediate neighborhood,
                                        Maple Glen in Upper Dublin Twp., eastern Montgomery County.
                                        Since owner/chef Joseph Scarpa opened this inviting Italian restaurant four years ago,
                                        I have visited and dined there many times, not just because it is so close by,
                                        but because my wife and I like the food and ambiance very much.
                                    </span>
                                    <span>
                                        Scarpa, who also owns Tramonto Pizza in the University City area, and Ecco Qui on the Drexel U.
                                        campus, gutted and completely renovated the depressing deli which the space had been.
                                        He designed a lovely Old World Italian-style dining room,
                                        with soothing stucco walls and warm lighting, a high arched ceiling, travertine tile flooring, and decorative Italianate columns.
                                        It has a giant, spotlessly clean tropical fish tank, a small bar with counter seating, and a partially open kitchen.
                                        It took him quite a while to complete this makeover, but the results were worth waiting for.
                                    </span>
                                    <span>
                                        We both especially like one of his truly inspired appetizers, the Zupetta (“little soup”), so much so that we keep coming back for it.
                                        It is a savory seafood combination of shrimp and scallops, and mussels & clams still in their shells.
                                        The dish’s piece d’resistance is the “soup,” i.e. the delicious, tomato-based sauce, chock full of chopped clams and garlic.
                                        It comes with toasted slices of Italian bread for dipping into this marvelously tasty sauce.
                                        I also like to spoon it up using a mussel shell.
                                        Large enough as an appetizer for two, we order two Zupettas as our entrées (at only $12, an inexpensive main course),
                                        with an additional side dish of salad or sautéed spinach, a glass of wine, perhaps a cappuccino, and calling it dinner.
                                    </span>
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