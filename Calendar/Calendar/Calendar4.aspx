﻿<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Calendar4.aspx.cs" Inherits="Calendar_Calendar4" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Untitled Page</title>

    <script src="../JS/calendar4.js" type="text/javascript"></script>

</head>
<body>
    <form id="form1" runat="server">
        <div>
            <input type="text" name="time1" id="time1" onclick="MyCalendar.SetDate(this)" value="2006-8-1" />
            <input type="text" name="time2" id="time2" value="2006-8-1" /><input name="" type="button"
                onclick="MyCalendar.SetDate(this,document.getElementById('time2'))" value="选择" />
        </div>
    </form>
</body>
</html>
