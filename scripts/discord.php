<?php
if(file_get_contents('C:/xampp/htdocs/newsurg/data/misc/surge.active')=='0'){
    //http_response_code\(500\);
    echo "Surge is not available!";
    die();
}
?><html>
<body>
    <?php
    if(isset($_GET['theme'])){
        if($_GET['theme']=='light') {
echo '<iframe src="https://ptb.discord.com/widget?id=1077005220724363327&theme=light" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>';
        } else {
            echo '<iframe src="https://ptb.discord.com/widget?id=1077005220724363327&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>';
        }
    } else {
        echo '<iframe src="https://ptb.discord.com/widget?id=1077005220724363327&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>';
    }


    ?>
</body>
</html>