﻿<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Calendar6.aspx.cs" Inherits="JS_Calendar6" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Untitled Page</title>

    <script src="../JS/calendar6.js" type="text/javascript"></script>

</head>
<body>
    <form id="form1" runat="server">
        <div>
            <input type="text" name="txtdate1" /><a href="javascript:show_calendar('form1.txtdate1');"
                onmouseover="window.status='Date Picker';return true;" onmouseout="window.status='';return true;"><img
                    alt="日期" src="images/calendar.gif" style="border-top-style: none; border-right-style: none;
                    border-left-style: none; border-bottom-style: none" /></a>
        </div>
    </form>
</body>
</html>
