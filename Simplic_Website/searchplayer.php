<?php
require_once("database/dbh.php");
if (isset($_GET['pSearch'])){
    if (isset($_GET['name'])){
        $name = $conn->escape_string($_GET['name']);
        $result = $conn->query("SELECT * FROM login WHERE Player = '$name'");
        if ($result->num_rows == 0){
        require("header.php");    ?>
<div class="custom-container topic">
    <div class="section searched-player_section">
        <div class="searched-player_header">
            Unknown Player 
        </div>
        <div class="searched-player_div_image">
            <img src="https://crafatar.com/renders/body/8667ba71b85a4004af54457a9734eed7?overlay=true" class="searched-player_image">
        </div>
    </div>
    <div class="section searched-player_contents">
        <div class="header searched-player_error-message">
            Uh-Oh, the player you typed in isn't registered on to the server!
        </div>
    </div>
</div>
<?php   } else {
            require("header.php");
            $user = $result->fetch_assoc(); ?>
<div class="custom-container topic">
<div class="section searched-player_section">
    <div class="searched-player_header">
       <?php echo $user['Player']; ?>'s Profile 
    </div>
    
    <div class="searched-player_image-container">
        <img src="&#10;https://crafatar.com/renders/body/<?php echo $user['UUID']; ?>" class="searched-player_image">
    </div>
</div>
<div class="section searched-player_contents">
    <div class="header searched-player_contents_header">
       Information
    </div>
    <div class="searched-player_contents_contents">
        <div class="sub-contents">
            <div class="content-splitter">
                <div class="title">Online</div>
            </div>
            <div class="content-splitter">
                <?php 
            if ($user['Online'] == 1) { ?>
                <div class="boolean-content true-bool">True</div>
                <?php   
            } else { ?>
                <div class="boolean-content false-bool">False</div>
            <?php    
            } 
                ?>
            </div>
        </div>
        <hr class="divider" />
        <div class="sub-contents">
            <div class="content-splitter">
                <div class="title">Banned</div>
            </div>
            <div class="content-splitter">
            <?php
            $banned = $conn->query("SELECT * FROM banned WHERE UUID = ".$user['UUID']);
            if ($banned->num_rows > 0){
                ?>
                <div class="boolean-content true-bool">True</div>
                <?php         
            } else {
                ?>
                <div class="boolean-content false-bool">False</div>
                <?php
            }
                ?>
            </div>
        </div>
    </div>
</div>
    <div class="section searched-player_section">
        <div class="header searched-player_contents_header">
        1v1 Stats
    </div>
    <div class="searched-player_contents_contents">
        <div class="sub-contents">
            <div class="content-splitter">
                <div class="title">Win Rank</div>
            </div>
            <div class="content-splitter">
                <?php 
            $wins = $conn->query("SELECT * FROM stats1v1");
            $rank = 1;
            while ($row = mysqli_fetch_array($wins)){
                if (strcmp($row['UUID'], $user['UUID']) == 0){
                    break;
                }
                $rank++;
            } ?>
                <div class=""><?php echo $rank; ?></div>
            </div>
        </div>
    </div>
    </div>

<?php
        }
    } else {
        header('Location: index.php');
        die();
    }
} else {
    header('Location: index.php');
    die();
}  
require("footer.php");
?>
