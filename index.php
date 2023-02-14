<!DOCTYPE html>
<html lang="en">
<?php 
include "shared/head.php";
?>

<body>
    <?php 
    include "shared/header.php";
    ?>
    
    <div id="first-section">
        <div class="col-sm-6 col-xs-12 maintitle">
            <p id="maintitle">ASUS Zenbook 17 Fold OLED</p>
            <p id="subtitle">Unfold the incredible</p>
        </div>
        <div class="col-sm-6 col-xs-12">
            <img class="product-picture" src="https://dlcdnwebimgs.asus.com/gain/70516022-fe29-42e9-9497-ba4353fc1631/w800">
        </div>  
    </div>
    
    <div id="second-section">
        <div id="details">Zenbook 17 Fold OLED leads the world with its amazing 17.3” Foldable OLED (FOLED) touchscreen1 that folds down instantly to a compact 12.5” size, making it smaller than a sheet of photocopier paper for easy carrying. The color-accurate 2.5K slim-bezel NanoEdge Dolby Vision screen is also PANTONE® Validated with TÜV Rheinland-certified low blue-light levels. Its ingenious multiple user modes are limited only by your imagination, and the detachable ASUS ErgoSense Bluetooth® keyboard and touchpad turns it into a powerful fully-featured laptop with a 12th Gen Intel® Core™ processor and a stunning Harman Kardon-certified quad-speaker Dolby Atmos® audio system. The innovative camera system includes a 5 MP AI webcam, a HD IR camera for fast face login, and a color sensor for automatic brightness and color temperature control.</div>
    </div>
    
    <div id="third-section">
        <div class="section-title">A NEW HYBRID OF LAPTOP AND TABLET</div>
        <div class="line-separator"></div>
        <?php
            $query = "SELECT * FROM Asus_Fold";
            $result = executeQuery($query);

            while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="container">
            <div class="col-sm-6 col-xs-12" id="laptop-mode-vk">
                <p class="mode"><?php echo $row["mode"]."<br>"?></p>
                <p class="dimension"><?php echo $row["dimension"] ?></p>
                <p class="description"><?php echo $row["description"] ?></p>
            </div>
            <div class="col-sm-6 col-xs-12">
                <img class="product-picture" src="<?php echo $row["image"] ?>">
            </div>
        </div>
        <?php
            }
        ?>
    </div>

    <div id="fourth-section">
        <div class="section-title" style="color: #000000;">Power the incredible</div>
        <div class="line-separator"></div>
        <div id="section-details">Zenbook 17 Fold OLED uses the latest high-performance components to give you effortless performance for any task, whether for work or play. Co-engineered with Intel, the Zenbook 17 Fold OLED design meets the requirements of an Intel Evo laptop through Intel’s hardware specifications and key experience targets for responsiveness, instant wake, battery life, fast charge and intelligent collaboration.</div>
    </div>
    <div id="fifth-section">
        <div class="col-sm-6 col-xs-12" id="product-name">
            <div id="logo-container">
                <img id="logo" src="https://pic.onlinewebfonts.com/svg/img_432794.png">
            </div>
            <div id="title-container">
                <p id="product-model">Zenbook 17 Fold OLED (UX9702)</p>
            </div>
            <div class="button-container">
                <button id="button" onclick=document.location="https://www.asus.com/laptops/for-home/zenbook/zenbook-17-fold-oled-ux9702/">Learn More</button>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12">
            <img class="product-picture" src="https://dlcdnwebimgs.asus.com/gain/59e47fc2-ef03-42db-b421-06c9a406399e/w800">
        </div>
    </div>
    <?php 
        include "shared/footer.php";
    ?>
</body>
</html>