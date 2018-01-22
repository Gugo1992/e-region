<?php
use Yii;
?>

<input type="hidden" value='<?= $result;?>' id="result" >
<script>
    var a=document.getElementById('result').value;
    var b=JSON.parse(a);
    //console.log(a);


    var table = document.createElement('table');

    var html = '<tbody><tr>';

    for (var i in b ) {

        html += '<td>' + b[i].category_name + '</td>';

    }

    table.innerHTML = html + '</tr></tbody>';
    document.write(1, table.outerHTML)
</script>