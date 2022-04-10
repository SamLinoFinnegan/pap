<html>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
    <div class="w3-container w3-display-container w3-padding-16">
        <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>

        <a href="index.php"><img src="imagens/logo1.png" weith="40" height="130" style="width:100%"></a>
    </div>
    <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">

        <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
            Secção de sapatos <i class="fa fa-caret-down"></i>
        </a>
        <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
            <a href="calcado.php" class="w3-bar-item w3-button w3-light-grey"><i
                    class="fa fa-caret-right w3-margin-right"></i>Calçados</a>



            <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align"
                id="myBtn">
                Secção de roupas <i class="fa fa-caret-down"></i>
            </a>
        </div>
        <a href="blusas.php" class="w3-bar-item w3-button">Blusas</a>
        <a href="Shorts.php" class="w3-bar-item w3-button">Shorts</a>
        <a href="Blazers.php" class="w3-bar-item w3-button">Blazers</a>
        <a href="Conjuntos.php" class="w3-bar-item w3-button">Conjuntos</a>
        <a href="Shirts.php" class="w3-bar-item w3-button">Shirts</a>
        <a href="vestido.php" class="w3-bar-item w3-button">Vestidos</a>
    </div>
    <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding"
        onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a>
    <a href="#footer" class="w3-bar-item w3-button w3-padding">Subscribe</a>
</nav>
<script>
    // Accordion 
    function myAccFunc() {
        var x = document.getElementById("demoAcc");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

    // Click on the "Jeans" link on page load to open the accordion for demo purposes
    document.getElementById("myBtn").click();


    // Open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }
</script>

</html>