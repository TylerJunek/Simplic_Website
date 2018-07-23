<?php
require_once("database/dbh.php");
if (isset($_GET['type'])){
    $type = $_GET['type'];
    $result = $conn->query("SELECT * FROM stats".$type);
    if ($result->num_rows == 0){
        header('Location: register.php?redirected=true');
        die();
    } else {
        require("header.php");
        if ($type == "FFA"){
            ?>
<div class="even-spaced-container topic">
    <div class="section dueltype">
        <img src="img/diamond_sword.png" class="stats_sword_png">
        <div class="duelText" style="background-color: #800000; color: white;">
            Kills
        </div>
        <?php 
            $kills = $conn->query("SELECT * FROM stats".$type." ORDER BY Kills DESC");
            $rank = 1;
            while($row = mysqli_fetch_array($kills)) {
                if (isset($_SESSION['UUID'])&& strcmp($_SESSION['UUID'],$row['UUID']) === 0){
                    echo "<div class='rankings'><img src='https://crafatar.com/avatars/".$row['UUID']."' class='leaderboard-heads'><div style='display: inline-block; margin-left: 5px;'><div style='width: 150px; display: inline-block; color: blue;'>#".$rank++." ".$row['Player']."</div> <div style='margin-left: 25px; display: inline-block;'><p style='display: inline-block;padding: 0px;'>".$row['Kills']."</p></div></div></div>";
                } else {
                    echo "<div class='rankings'><img src='https://crafatar.com/avatars/".$row['UUID']."' class='leaderboard-heads'><div style='display: inline-block; margin-left: 5px;'><div style='width: 150px; display: inline-block;'>#".$rank++." ".$row['Player']."</div> <div style='margin-left: 25px; display: inline-block;'><p style='display: inline-block;padding: 0px;'>".$row['Kills']."</p></div></div></div>";
                }
                if ($rank > 10){
                    unset($rank);
                    break;
                }
            } ?>
    </div>
    <div class="section dueltype">
        <img src="img/iron_sword.png" class="stats_sword_png">
        <div class="duelText" style="background-color: #999999; color: white;">
            Deaths
        </div>
        <?php 
            $deaths = $conn->query("SELECT * FROM stats".$type." ORDER BY Deaths DESC");
            $rank = 1;
            while($row = mysqli_fetch_array($deaths)) {
                if (isset($_SESSION['UUID'])&& strcmp($_SESSION['UUID'],$row['UUID']) === 0){
                    echo "<div class='rankings'><img src='https://crafatar.com/avatars/".$row['UUID']."' class='leaderboard-heads'><div style='display: inline-block; margin-left: 5px;'><div style='width: 150px; display: inline-block; color: blue;'>#".$rank++." ".$row['Player']."</div> <div style='margin-left: 25px; display: inline-block;'><p style='display: inline-block;padding: 0px;'>".$row['Deaths']."</p></div></div></div>";
                } else {
                    echo "<div class='rankings'><img src='https://crafatar.com/avatars/".$row['UUID']."' class='leaderboard-heads'><div style='display: inline-block; margin-left: 5px;'><div style='width: 150px; display: inline-block;'>#".$rank++." ".$row['Player']."</div> <div style='margin-left: 25px; display: inline-block;'><p style='display: inline-block;padding: 0px;'>".$row['Deaths']."</p></div></div></div>";
                }
                if ($rank > 10){
                    unset($rank);
                    break;
                }
            } ?>
    </div>
<?php
        } else {  ?>
<div class="even-spaced-container topic">
    <div class="section dueltype">
        <img src="img/diamond_sword.png" class="stats_sword_png">
        <div class="duelText" style="background-color: #800000; color: white;">
            Wins
        </div>
        <?php 
            $wins = $conn->query("SELECT * FROM stats".$type." ORDER BY Wins DESC");
            $rank = 1;
            while($row = mysqli_fetch_array($wins)) {
                if (isset($_SESSION['UUID'])&& strcmp($_SESSION['UUID'],$row['UUID']) === 0){
                    echo "<div class='rankings'><img src='https://crafatar.com/avatars/".$row['UUID']."' class='leaderboard-heads'><div style='display: inline-block; margin-left: 5px;'><div style='width: 150px; display: inline-block; color: blue;'>#".$rank++." ".$row['Player']."</div> <div style='margin-left: 25px; display: inline-block;'><p style='display: inline-block;padding: 0px;'>".$row['Wins']."</p></div></div></div>";
                } else {
                    echo "<div class='rankings'><img src='https://crafatar.com/avatars/".$row['UUID']."' class='leaderboard-heads'><div style='display: inline-block; margin-left: 5px;'><div style='width: 150px; display: inline-block;'>#".$rank++." ".$row['Player']."</div> <div style='margin-left: 25px; display: inline-block;'><p style='display: inline-block;padding: 0px;'>".$row['Wins']."</p></div></div></div>";
                }
                if ($rank > 10){
                    unset($rank);
                    break;
                }
            } ?>
    </div>
    <div class="section dueltype">
        <img src="img/iron_sword.png" class="stats_sword_png">
        <div class="duelText" style="background-color: #999999; color: white;">
            Loses
        </div>
        <?php 
            $loses = $conn->query("SELECT * FROM stats".$type." ORDER BY Loses DESC");
            $rank = 1;
            while($row = mysqli_fetch_array($loses)) {
                if (isset($_SESSION['UUID'])&& strcmp($_SESSION['UUID'],$row['UUID']) === 0){
                    echo "<div class='rankings'><img src='https://crafatar.com/avatars/".$row['UUID']."' class='leaderboard-heads'><div style='display: inline-block; margin-left: 5px;'><div style='width: 150px; display: inline-block; color: blue;'>#".$rank++." ".$row['Player']."</div> <div style='margin-left: 25px; display: inline-block;'><p style='display: inline-block;padding: 0px;'>".$row['Loses']."</p></div></div></div>";
                } else {
                    echo "<div class='rankings'><img src='https://crafatar.com/avatars/".$row['UUID']."' class='leaderboard-heads'><div style='display: inline-block; margin-left: 5px;'><div style='width: 150px; display: inline-block;'>#".$rank++." ".$row['Player']."</div> <div style='margin-left: 25px; display: inline-block;'><p style='display: inline-block;padding: 0px;'>".$row['Loses']."</p></div></div></div>";
                }
                if ($rank > 10){
                    unset($rank);
                    break;
                }
            } ?>
    </div>
<?php
        } ?>
    <div class="section dueltype">
        <img src="img/gold_sword.png" class="stats_sword_png">
        <div class="duelText" style="background-color: #fbd642; color: black;">
            Elo
        </div>
        <?php 
            $elo = $conn->query("SELECT * FROM stats".$type." ORDER BY Elo DESC");
            $rank = 1;
            while($row = mysqli_fetch_array($elo)) {
                if (isset($_SESSION['UUID'])&& strcmp($_SESSION['UUID'],$row['UUID']) === 0){
                    echo "<div class='rankings'><img src='https://crafatar.com/avatars/".$row['UUID']."' class='leaderboard-heads'><div style='display: inline-block; margin-left: 5px;'><div style='width: 150px; display: inline-block; color: blue;'>#".$rank++." ".$row['Player']."</div> <div style='margin-left: 25px; display: inline-block;'><p style='display: inline-block;padding: 0px;'>".$row['Elo']."</p></div></div></div>";
                } else {
                    echo "<div class='rankings'><img src='https://crafatar.com/avatars/".$row['UUID']."' class='leaderboard-heads'><div style='display: inline-block; margin-left: 5px;'><div style='width: 150px; display: inline-block;'>#".$rank++." ".$row['Player']."</div> <div style='margin-left: 25px; display: inline-block;'><p style='display: inline-block;padding: 0px;'>".$row['Elo']."</p></div></div></div>";
                }
                if ($rank > 10){
                    unset($rank);
                    break;
                }
            } ?>
    </div>
    <div class="section dueltype">
        <img src="img/wood_sword.png" class="stats_sword_png">
        <div class="duelText" style="background-color: #c25f03; color: white;">
            Ratio
        </div>
        <?php 
            $ratio = $conn->query("SELECT * FROM stats".$type." ORDER BY Ratio DESC");
            $rank = 1;
            while($row = mysqli_fetch_array($ratio)) {
                if (isset($_SESSION['UUID'])&& strcmp($_SESSION['UUID'],$row['UUID']) === 0){
                    echo "<div class='rankings'><img src='https://crafatar.com/avatars/".$row['UUID']."' class='leaderboard-heads'><div style='display: inline-block; margin-left: 5px;'><div style='width: 150px; display: inline-block; color: blue;'>#".$rank++." ".$row['Player']."</div> <div style='margin-left: 25px; display: inline-block;'><p style='display: inline-block;padding: 0px;'>".$row['Ratio']."</p></div></div></div>";
                } else {
                    echo "<div class='rankings'><img src='https://crafatar.com/avatars/".$row['UUID']."' class='leaderboard-heads'><div style='display: inline-block; margin-left: 5px;'><div style='width: 150px; display: inline-block;'>#".$rank++." ".$row['Player']."</div> <div style='margin-left: 25px; display: inline-block;'><p style='display: inline-block;padding: 0px;'>".round($row['Ratio'], 2, PHP_ROUND_HALF_UP)."</p></div></div></div>";
                }
                if ($rank > 10){
                    unset($rank);
                    break;
                }
            } ?>
    </div>
    <span class="stretch"></span>
</div>
<?php
        require("footer.php");
    }
}
 ?>