﻿<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Calendar2.aspx.cs" Inherits="Calendar_Calendar2" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Calendar Second</title>
     <script src="../JS/calendar2.js" type="text/javascript"></script>
</head>
<body>
    <form id="form1" runat="server">
    <div>
    时间：<input onfocus="setday(this)">
    
    </div>
       时间：<asp:TextBox ID="TextBox1" onfocus="setday(this)" runat="server"></asp:TextBox>
    </form>
</body>
</html>
