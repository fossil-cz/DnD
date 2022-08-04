<?php

$roll = shell_exec("python3 random-d6.py");

?>
<body>
    <table>
        <tr>
            <td>
<button onClick="window.location.reload()">Roll</button>
            </td>
        </tr>
        <tr>
            <td>
<img src="src/d20.png" width="400px" height="400px"><p>
<font color="white" size="40" style="position:absolute; top:200px; left:190px;"><p>

<?php echo "$roll";
?>
</td></tr>
</table>