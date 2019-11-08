<!DOCTYPE html>
<html>
<head>
    <title>GameShop</title>
</head>
<body>
    <header><center>GAMESHOP</center></header>
    <ul class="navigation">
        <li><a href="home.php">HOME</a></li>
        <li><a href="ps4.php">PS4</a></li>
        <li><a href="psvita.php">PS VITA</a></li>
        <li><a href="3ds.php">3DS</a></li>
        <li><a href="switch.php">Switch</a></li>
        <li><a href="xbox.php">Xbox</a></li>
        <li><a href="pc.php">PC</a></li>
        <!--mestinya ganti antara acc, login, signup, kalo acc ada drop down-->
    </ul>
    <ul class "icons">
        <li><a href="cart.php"><img src="cart.png" title="CART" alt="cart"></a></li>
        <li><a href="account.php"><img src="account.png" title="ACCOUNT" alt="account"></a></li>
    </ul>
    <div class="search">
        <fieldset>
            <input type="text" name="search" placeholder="Search an item..."/>
            <input type="button" onClick="searchItem()" value=<img src="search.png">>
        </fieldset>
    </div>

    <div class="homeItems">
        
    </div>
</body>
</html>