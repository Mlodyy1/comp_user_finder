<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comp user finder</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
        <input type="text" name="steam_id" id="" required placeholder='steamID64 here'>
        <input type="submit" value="Search" name="search">
        <?php
        if (isset($_POST['search'])){
            $steam_id = htmlspecialchars($_POST['steam_id']);
            echo "<a href='http://logs.tf/profile/$steam_id'><p>Logs.tf</p></a>";
            echo "<a href='https://ozfortress.com/users/steam_id/$steam_id'><p>OZF</p></a>";
            echo "<a href='http://etf2l.org/search/$steam_id'><p>ETF2L</p></a>";
            echo "<a href='https://rgl.gg/public/PlayerProfile.aspx?p=$steam_id'><p>RGL</p></a>";
            echo "<a href='https://cltf2.com/users/steam_id/$steam_id'><p>CLTF2</p></a>";
            echo "<a href='http://www.ugcleague.com/players_page.cfm?player_id=$steam_id'><p>UGC</p></a>";
        }
        ?>
    </form>
</body>
</html>
