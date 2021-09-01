<html><head>
    <style>
    .diff td{
      vertical-align : top;
      white-space    : pre;
      white-space    : pre-wrap;
      font-family    : monospace;
    }
    .diffUnmodified { background-color: #BAF4FA; }
    .diffDeleted { background-color: #EEB4B4; }
    .diffInserted { background-color: #A9F2A4; }
    </style>
</head>
<body>
    // output the result of comparing two files as a table
    <?php 
    require_once './class.Diff.php';
    echo Diff::toTable( Diff::compareFiles('1.json', '2.json') ); 
    ?>
</body></html>