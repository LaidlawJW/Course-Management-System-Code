


<?php
session_start();
require_once("../includes/databaseCalls.php");
$dbCalls = new DatabaseCalls;
$assign = $dbCalls->getAllUsers();
?>
 
 
<html>
 
<head>
    <link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" rel="stylesheet" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.6.0/underscore.js"></script>
    <script src="../JS/main.js"></script>
    <script src="https://kit.fontawesome.com/787fe15a79.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/Main.css">
</head>
 
<body>
    <?php include_once('navigation.php'); ?>
 
 
    <div class="container">
 
        <button id="export-btn" class="btn btn-primary">Search</button>
        <button id="export-btn" class="btn btn-primary">Export Data CSV</button>
 
        <div class="adminheader">
            CMS User table
        </div>
 
        <div id="table" class="table-editable">
            <span class="table-add glyphicon glyphicon-plus"></span>
            <table class="table">
                <tr>
                    <th>UserName</th>
                    <th>ID</th>
                    <th>Degree</th>
                    <th>email</th>
                    <th>Role</th>
 
                </tr>
 
                <?php
                foreach($assign as $ass) {
                ?>
                <tr>
                <td contenteditable="true"><?php echo $ass['username'];?></td>
                <td contenteditable="true"><?php echo $ass['UserID'];?></td>
                <td contenteditable="true"><?php echo $ass['major'];?></td>
                <td contenteditable="true"><?php echo $ass['email'];?></td>
                <td contenteditable="true"><?php echo $ass['type'];?></td>
                <td>
                    <span class="table-remove glyphicon glyphicon-remove"></span>
                </td>
                </tr>
                <?php
                }
                ?>
                <tr>
                    <td contenteditable="true">Joey</td>
                    <td contenteditable="true">Newman</td>
                    <td contenteditable="true">92938123</td>
                    <td contenteditable="true">CS</td>
                    <td contenteditable="true">STUDENT</td>
                    <td>
                        <span class="table-remove glyphicon glyphicon-remove"></span>
                    </td>
 
                </tr>
                <!-- This is our clonable table line -->
                <tr class="hide">
                    <td contenteditable="true">FName</td>
                    <td contenteditable="true">LName</td>
                    <td contenteditable="true">#id</td>
                    <td contenteditable="true">degree</td>
                    <td contenteditable="true">Role</td>
                    <td>
                        <span class="table-remove glyphicon glyphicon-remove"></span>
                    </td>
 
                </tr>
            </table>
        </div>
    </div>
</body>
 
</html>
 
<script>
    var $TABLE = $('#table');
    var $BTN = $('#export-btn');
    var $EXPORT = $('#export');
 
    $('.table-add').click(function() {
        var $clone = $TABLE.find('tr.hide').clone(true).removeClass('hide table-line');
        $TABLE.find('table').append($clone);
    });
 
    $('.table-remove').click(function() {
        $(this).parents('tr').detach();
    });
 
    $('.table-up').click(function() {
        var $row = $(this).parents('tr');
        if ($row.index() === 1) return; // Don't go above the header
        $row.prev().before($row.get(0));
    });
 
    $('.table-down').click(function() {
        var $row = $(this).parents('tr');
        $row.next().after($row.get(0));
    });
 
    // A few jQuery helpers for exporting only
    jQuery.fn.pop = [].pop;
    jQuery.fn.shift = [].shift;
 
    $BTN.click(function() {
        var $rows = $TABLE.find('tr:not(:hidden)');
        var headers = [];
        var data = [];
 
        // Get the headers (add special header logic here)
        $($rows.shift()).find('th:not(:empty)').each(function() {
            headers.push($(this).text().toLowerCase());
        });
 
        // Turn all existing rows into a loopable array
        $rows.each(function() {
            var $td = $(this).find('td');
            var h = {};
 
            // Use the headers from earlier to name our hash keys
            headers.forEach(function(header, i) {
                h[header] = $td.eq(i).text();
            });
 
            data.push(h);
        });
 
        // Output the result
        $EXPORT.text(JSON.stringify(data));
    });
 
</script>
 
<style>
 
    .adminheader{
        display: flex;
        font-size: 24px;
        color: black;
        justify-content: center ;
        align-items: center;
        height: bottom;
        padding: 1em;
        border-bottom: deepskyblue solid 1px;
 
    }
 
 
    body {
        --header-height: 50px;
        margin: var(--header-height) 0 0 0;
        font-family: 'Muli', sans-serif;
        display: flex;
        min-height: 100vh;
        flex-direction: row;
        margin: 0;
        justify-content: center;
        text-decoration: none;
        text-decoration-color: #7289da;
        background-color: #313233;
    }
 
    .table-editable {
        position: relative;
        color: black;
    }
 
    .table th{
        color: black;
    }
 
    .table-editable .glyphicon {
        font-size: 20px;
    }
 
    .table-remove {
        color: #700;
        cursor: pointer;
    }
 
    .table-remove:hover {
        color: #f00;
    }
 
    .table-up,
    .table-down {
        color: rgb(132, 132, 206);
        cursor: pointer;
    }
 
    .table-up,
    .table-down :hover {
        color: #7289da;
    }
 
    .container {
        background-color: #a5a5a5;
        color: black;
    }
 
    .table-add {
        color: #070;
        cursor: pointer;
        position: absolute;
        top: 8px;
        right: 0;
    }
 
    .table-add:hover {
        color: #0b0;
    }
 
    .btn {
        background-color: #7289da;
    }
 
</style>
 










