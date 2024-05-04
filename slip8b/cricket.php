<html>
    <head>
        <script langauage="javascript" src="cricket.js"></script>
    </head>
    <body>
        <form name="frm" id="frm">
            <h1>Select Palyer Name and Display Details</h1>
            Player Name:
            <select name="t1" id="t1">
                <?php
                   $xml=simplexml_load_file("cricket.xml");
                   if(!$xml)
                      die("file not found...");
                    foreach($xml->palyer_info as $a)
                    {
                        echo"<option value='$a->name'>$a->name</option>";
                    }
                ?>
            </select>
            <br>
            <input type="button" value="Fire" onclick="disp()"><br>
            <div id='txt' name='txt'>

            </div>
        </form>
    </body>
</html>