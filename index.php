<?php
	require("./class/dbTalk.php");
	dbTalk::$fetchMode=0;
	$db=new dbTalk();
	$db->table="finance_event";

?>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf8">
	<link href="index.css" rel="stylesheet" type="text/css"/>
	<title>PersonalFinanceTracker</title>
	<script src="./js/calendar.js" type="text/javascript"></script>
	<link href="./css/index.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<h1>Personal Finance Tracker</h1>
		<ul class="account-menu-bd">
			<li class="account-m1">
				<h3><a href="">Dashboard</a></h3>
				<b><em></em><span></span></b>
			</li>
			<li class="account-m2">
  	 			<h3><a href="">Expense</a></h3>
				<b><em></em><span></span></b>
			</li>
            <li class="account-m3">
				<h3><a href="">Income</a></h3>
				<b><em></em><span></span></b>
			</li>
			<li class="account-m4">
				<h3><a href="">Debts</a></h3>
				<b><em></em><span></span></b>
			</li>
			<li class="account-m5">
				<h3><a href="">Calendar</a></h3>
				<b><em></em><span></span></b>
			</li>
		</ul>
	<div id="account-display">
		<div class="account-date-option">
		<select class="account-year">
			<option value="year">Year</option>
			<?php
			?>
		</select>
		<select class="account-month">
			<option value="month">Month</option>
			<?php
			?>
		</select>
		<select class="account-day">
			<option value="day">Day</option>
			<?php
			?>
		</select>
		<button class="account-date-confirm">Confirm</button>
	    </div>
		<div id="account-calendar">
			<span class="account-calendar-title">Date: </span>
			<input class="account-calendar" type="text" onfocus="HS_setDate(this)" />
			<button class="account-calendar-confirm">Confrim</button>
		</div>
		<?php
		$rv=$db->fields('date,expense,type')->find();
		$search="date";
		if( $search=="date" && $search="day" ){
		    echo '<table id="account-display-tb">
			<tr class="display-tb-title">
				<th class="dtt-date">Date</th>
				<th class="dtt-expense">expense</th>
				<th class="dtt-type">type</th>
				<th class="dtt-amount">amount</th>
				<th class="dtt-modify">modify</th>
			</tr>';
			foreach($rv as $row){
			  echo "<tr class='display-tb-u1'>
			          <td>".$row['date']."</td>
				  <td>".$row['expense']."</td>
				  <td>".$row['type']."</td>
				  <td>".$row['income']."</td>
			  	  <td class='dtt-edit'>
					<button>Edit</button>	
					<button>Delete</button>	
				  </td>
			</tr>";
			}
			echo '<tr class="display-tb-bottom"> 
				<td class="dtt-bottom" colspan="5">
					<button class="dtt-add">Add</button>|||&nbsp&nbsp&nbsp
					<a href="">Last page</a>&nbsp&nbsp/&nbsp&nbsp<a href="">Next page</a>
				</td>
			</tr>
		</table>';
		}
		?>
	</div>
</body>
</html>
