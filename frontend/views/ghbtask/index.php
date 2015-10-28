<?php
/* @var $this yii\web\View */
?>
<h1>ghbtask/index</h1>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
    <button onclick="test()">sss</button>

<div class="jsonTable"></div>
</p>

<button onclick="doSearch()">Search</button>

<div id="searchList" align="center">
    <table border="1">
        <thead>
            <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
            </tr>
        </thead>

        <tbody>
        </tbody>
    </table>
</div>

<script language="JavaScript">

    function doSearch()
    {
        //----------clear tbody------------//
        document.getElementById("searchList").getElementsByTagName("tbody")[0].innerHTML = "";

        //----------call ajax for check have data------------//
        url = getContext()+"/ghbtask/test";
        initRequest(url);
        req.onreadystatechange = callBackDoSearch;
        req.send(null);
        //---------------------------------------------------//
    }

    function callBackDoSearch(){

        if (req.readyState == 4) {
            var res = eval('(' + req.responseText + ')');
            for ( var i = 0; i < res.length; i++)
            {
                addDoSearch(res,i);
            }
        }
    }

    function addDoSearch(res,i){
        tbl = document.getElementById("searchList").getElementsByTagName("tbody")[0];
        var rowIndex = tbl.rows.length;
        var tr = tbl.insertRow(tbl.rows.length);
        tr.id = 'tr_' + i;
        tr.insertCell(0);
        tr.insertCell(1);
        tr.insertCell(2);
        doSearchCreate(tr, rowIndex, res);
        i++;
    }

    function doSearchCreate(tr, rowIndex, res){
        var td1 = tr.cells[0];
        var td2 = tr.cells[1];
        var td3 = tr.cells[2];
        td1.innerHTML = res[rowIndex].ctr_id;
        td2.innerHTML = res[rowIndex].ctr_priority;
        td3.innerHTML = res[rowIndex].ctr_criterial;
    }


</script>