﻿<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Calendar3.aspx.cs" Inherits="Calendar_Calendar3" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Colendar</title>
    <script src="../JS/calendar3.js" type="text/javascript"></script>
</head>
<body>
    <!--一定要放在body里面-->
    <form id="form1" runat="server">
        <div>
                <span>交易查询：</span> <span>从
                    <input name="control_date" type="text" id="control_date" size="10"
                        maxlength="10" onclick="new Calendar().show(this);" readonly="readonly" />
                    <input type="button" name="button" id="button" value="button" onclick="new Calendar().show(this.form.control_date);" /></span>
                <span>至
                    <input name="control_date2" type="text" id="control_date2" size="10"
                        maxlength="10" onclick="new Calendar().show(this);" readonly="readonly" />
                    <input type="button" name="button" id="button1" value="button" onclick="new Calendar().show(this.form.control_date2);" /></span>

        </div>
    </form>
</body>
</html>
