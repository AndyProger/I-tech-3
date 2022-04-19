<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- 1 select -->

    <form method="GET">
        <select name="selectedproc" id="form1">
            <?php
            require_once('connecting.php');
            $dbh = connect();
            
            $querySelect = 'SELECT p.name FROM processor p';
                    
            foreach($dbh->query($querySelect) as $item)
                echo "<option value='$item[0]'>" . $item[0] . '</option>';
            ?>
        </select>
        <input type="button" value="Submit" onclick="get('form1', 'selectedproc' ,'select-1.php', UpdateSelect1);">
    </form>

    <br><br>

    <!-- 2 select -->

    <form method="GET">
        <select name="selectedsoft" id="form2">
            <?php
            require_once('connecting.php');
            $dbh = connect();
            
            $querySelect = 'SELECT s.name FROM software s';
                    
            foreach($dbh->query($querySelect) as $item)
                echo "<option value='$item[0]'>" . $item[0] . '</option>';
            ?>
        </select>
        <input type="button" value="Submit" onclick="get('form2', 'selectedsoft' ,'select-2.php', UpdateSelect2);" >
    </form>

    <br><br>

    <!-- 3 select -->

    <form method="GET">
        <input name="expiredGuaranteeBtn" type="button" value="Get a list of computers with expired guarantee"
        onclick="get(null, null, 'select-3.php', UpdateSelect3);"/>
    </form>

    <br><br><div id="result">Result:<br><br></div>

    <script src="script.js"></script>
</body>
</html>