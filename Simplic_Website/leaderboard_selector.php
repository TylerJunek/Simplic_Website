<?php
require("header.php"); ?>
<div class="even-spaced-container topic" style="width: 70%;">
    <div class="section dueltype">
        <a href="leaderboards.php?type=1v1">
        <img src="img/diamond_sword.png" class="selecting_sword_png">
        <div class="duelText" style="background-color: #800000; color: white;">
            One V One
        </div>
             </a>
    </div>
    <div class="section dueltype">
        <a href="leaderboards.php?type=2v2">
        <img src="img/iron_sword.png" class="selecting_sword_png">
        <div class="duelText" style="background-color: #999999; color: white;">
            Two V Two
        </div>
             </a>
    </div>
    <div class="section dueltype">
        <a href="leaderboards.php?type=4v4">
        <img src="img/gold_sword.png" class="selecting_sword_png">
        <div class="duelText" style="background-color: #fbd642; color: black;">
            Four V Four
        </div>
             </a>
    </div>
    <div class="section dueltype">
        <a href="leaderboards.php?type=FFA">
        <img src="img/wood_sword.png" class="selecting_sword_png">
        <div class="duelText" style="background-color: #c25f03; color: white;">
            Free For All
        </div>
            </a>
    </div>
    <span class="stretch"></span>
</div>
<?php
require("footer.php"); ?>