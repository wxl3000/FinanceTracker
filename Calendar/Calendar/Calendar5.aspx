﻿<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Calendar5.aspx.cs" Inherits="Calendar_Calendar5" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Untitled Page</title>

    <script src="../JS/calendar5.js" type="text/javascript"></script>

    <script type="text/javascript">
        var c = new Calendar("c");
        document.write(c);
    </script>

</head>
<body>
    <form id="form1" runat="server">
        <div>
            普通调用:<input type="text" name="txt2" onfocus="c.showMoreDay = false;c.show(this);" /><br />
            <div style="height: 262px">
            </div>
            按钮调用:<input type="text" name="btntxt" id="btntxt" /><input name="button" value="*"
                id="button" type="button" onclick="c.showMoreDay = true;c.show(getObjById('btntxt'),'1982-1-1',this)" />
            <br />
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
            <input type="text" name="btntxt3" id="btntxt3" /><input name="button3" value="*"
                id="button3" type="button" onclick="c.showMoreDay = true;c.show(this,getObjById('btntxt3'))" />
        </div>
    </form>
</body>
</html>
