
<html>
<head>
    <script type="text/javascript">
	function updatesumtloee(){
document.form.sumtloee.value=(document.form.sumcle.value-0)+(document.form.sumltle.value-0)+(document.form.sumoee.value-0);
}
	function updatesumoee(){
document.form.sumoee.value=(document.form.sumoee1.value-0)+(document.form.sumoee2.value-0)+(document.form.sumoee3.value-0);
}
	function updatesumltle(){
document.form.sumltle.value=(document.form.sumltle1.value-0)+(document.form.sumltle2.value-0)+(document.form.sumltle3.value-0);
}
	function updatesumcle(){
document.form.sumcle.value=(document.form.sumcle1.value-0)+(document.form.sumcle2.value-0)+(document.form.sumcle3.value-0)+(document.form.sumcle4.value-0)+(document.form.sumcle5.value-0)+(document.form.sumcle6.value-0);
}
	
	function updatesumcae() {
document.form.sumcae.value = (document.form.sumcae1.value -0) + (document.form.sumcae2.value -0)+(document.form.sumcae3.value -0)+(document.form.sumcae4.value -0);
}
function updatesumtfae(){
document.form.sumtfae.value=(document.form.sumtfae1.value -0)+(document.form.sumtfae2.value -0)-(document.form.sumtfae3.value -0)+(document.form.sumtfae4.value -0);
}

function updatesumoae(){
document.form.sumoae.value=(document.form.sumoae1.value-0)+(document.form.sumoae2.value-0);
}
function updatesumtoae(){
document.form.sumtoae.value= (document.form.sumcae.value -0) + (document.form.sumtfae.value -0)+(document.form.sumoae.value-0);
}
function updatesumca() {
document.form.sumca.value = (document.form.sumca1.value -0) + (document.form.sumca2.value -0)+(document.form.sumca3.value -0)+(document.form.sumca4.value -0);
}
function updatesumtfa(){
document.form.sumtfa.value=(document.form.sumtfa1.value -0)+(document.form.sumtfa2.value -0)-(document.form.sumtfa3.value -0)+(document.form.sumtfa4.value -0);
}
function updatesumoa(){
document.form.sumoa.value=(document.form.sumoa1.value-0)+(document.form.sumoa2.value-0);

}
function updatesumtoa(){
document.form.sumtoa.value= (document.form.sumca.value -0) + (document.form.sumtfa.value -0)+(document.form.sumoa.value-0);
}
function updatesumcl(){
document.form.sumcl.value=(document.form.sumcl1.value-0)+(document.form.sumcl2.value-0)+(document.form.sumcl3.value-0)+(document.form.sumcl4.value-0)+(document.form.sumcl5.value-0)+(document.form.sumcl6.value-0);
}
function updatesumltl(){
document.form.sumltl.value=(document.form.sumltl1.value-0)+(document.form.sumltl2.value-0)+(document.form.sumltl3.value-0);
}
function updatesumoe(){
document.form.sumoe.value=(document.form.sumoe1.value-0)+(document.form.sumoe2.value-0)+(document.form.sumoe3.value-0);
}
function updatesumtloe(){
document.form.sumtloe.value=(document.form.sumcl.value-0)+(document.form.sumltl.value-0)+(document.form.sumoe.value-0)+(document.form.sumoe.value-0);
}
//--></script>
    <title>KilimoBora Balance Sheet</title>
</head>

<body>
<form name="form" action="bpdf.php" method="POST" ><a href="bpdf.php"> </a>
<table width="55%" height="328" border="0">
    <tr>
      <th width="43%" height="27" scope="row"><a href="index.php">Return to Main</a> </th>
      <td width="27%"> <strong>Starting Year </strong></td>
      <td width="30%"><strong>Ending Year </strong></td>
    </tr>
    <tr>
      <th scope="row"><input name="company" type="text" id="company" value="Company name Goes Here" size="30"></th>
      <td><input name="date" type="date" id="date" required></td>
      <td><input name="edate" type="date" id="edate" required></td>
    </tr>
    <tr>
      <th scope="row">ASSETS</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">CURRENT ASSETS </th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row"><input name="cash" type="text" id="cash" value="Cash"></th>
      <td><input name="sumca1" type="text" id="sumca1" onChange="updatesumca()" required></td>
      <td><input name="sumcae1" type="text" id="sumcae1" onChange="updatesumcae()"></td>
    </tr>
    <tr>
      <th scope="row"><input name="accounts" type="text" id="accounts" value="Accounts Recievable"></th>
      <td><input name="sumca2" type="text" id="sumca2" onChange="updatesumca()" required></td>
      <td><input name="sumcae2" type="text" id="sumcae2" onChange="updatesumcae()"></td>
    </tr>
    <tr>
      <th scope="row"><input name="pexpense" type="text" id="pexpense" value="Prepaid Expenses"></th>
      <td><input name="sumca3" type="text" id="sumca3" onChange="updatesumca()" required></td>
      <td><input name="sumcae3" type="text" id="sumcae3" onChange="updatesumcae()"></td>
    </tr>
    <tr>
      <th scope="row"><input name="sexpense" type="text" id="sexpense" value="Short Term Expenses"></th>
      <td><input name="sumca4" type="text" id="sumca4" onChange="updatesumca()"></td>
      <td><input name="sumcae4" type="text" id="sumcae4"onChange="updatesumcae()"></td>
    </tr>
    <tr>
      <th scope="row">Total Current Assets </th>
      <td><input name="sumca" type="text" id="sumca" readonly="border:0px" onChange="updatesumca()"></td>
      <td><input name="sumcae" type="text" id="sumcae" onChange="updatesumcae()" readonly></td>
    </tr>
    <tr>
      <th scope="row"><input name="ltinvest" type="text" id="ltinvest" value="Long Term Investments"></th>
      <td><input name="sumtfa1" type="text" id="sumtfa1" onChange="updatesumtfa()" required></td>
      <td><input name="sumtfae1" type="text" id="sumtfae1" onChange="updatesumtfae()"></td>
    </tr>
    <tr>
      <th scope="row"><input name="property" type="text" id="property" value="Property,Equipment"></th>
      <td><input name="sumtfa2" type="text" id="sumtfa2" onChange="updatesumtfa()" ></td>
      <td><input name="sumtfae2" type="text" id="sumtfae2" onChange="updatesumtfae()"></td>
    </tr>
    <tr>
      <th scope="row"><input name="less" type="text" id="less" value="Less Accumulated Depreciation"></th>
      <td><input name="sumtfa3" type="text" id="sumtfa3"onChange="updatesumtfa()"  ></td>
      <td><input name="sumtfae3" type="text" id="sumtfae3" onChange="updatesumfae()"></td>
    </tr>
    <tr>
      <th scope="row"><input name="intasset" type="text" id="intasset" value="Intangible Assets"></th>
      <td><input name="sumtfa4" type="text" id="sumtfa4"onChange="updatesumtfa()"  ></td>
      <td><input name="sumtfae4" type="number" id="sumtfae4" onChange="updatesumtfae()"></td>
    </tr>
    <tr>
      <th scope="row">Total Fixed Assets </th>
      <td><input name="sumtfa" type="text" id="sumtfa"onChange="updatesumtfa()" readonly></td>
      <td><input name="sumtfae" type="text" id="sumtfae" onChange="updatesumtfae()"></td>
    </tr>
    <tr>
      <th scope="row">OTHER ASSETS </th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row"><input name="definctax" type="text" id="definctax" value="Deffered Income Tax"></th>
      <td><input name="sumoa1" type="text" id="sumoa1" onChange="updatesumoa()" required></td>
      <td><input name="sumoae1" type="text" id="sumoae1" onChange="updatesumoae()"></td>
    </tr>
    <tr>
      <th scope="row"><input name="other" type="text" id="other" value="Other"></th>
      <td><input name="sumoa2" type="text" id="sumoa2" onChange="updatesumoa()" required></td>
      <td><input name="sumoae2" type="text" id="sumoae2" onChange="updatesumoae()"></td>
    </tr>
    <tr>
      <th scope="row">Total Other Assets </th>
      <td><input type="text" name="sumoa" onChange="updatesumoa()" readonly></td>
      <td><input name="sumoae" type="text" id="sumoae" onChange="updatesumoae()"></td>
    </tr>
    <tr>
      <th scope="row">TOTAL ASSETS </th>
      <td><input name="sumtoa" type="text" id="sumtoa" onClick="updatesumtoa()" readonly></td>
      <td><input name="sumtoae" type="text" id="sumtoae" onClick="updatesumtoae()" readonly></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">LIABILITIES AND OWNERS EQUITY </th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">Current Liabilities </th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row"><input name="accpayable" type="text" id="accpayable" value="Accounts Payable"></th>
      <td><input name="sumcl1" type="text" id="sumcl1" onChange="updatesumcl()"></td>
      <td><input name="sumcle1" type="text" id="sumcle1" onChange="updatesumcle()"></td>
    </tr>
    <tr>
      <th scope="row"><input name="stloans" type="text" id="stloans" value="Short Term Loans"></th>
      <td><input name="sumcl2" type="text" id="sumcl2" onChange="updatesumcl()"></td>
      <td><input name="sumcle2" type="text" id="sumcle2" onChange="updatesumcle()"></td>
    </tr>
    <tr>
      <th scope="row"><input name="inctax" type="text" id="inctax" value="Income Tax Payable"></th>
      <td><input name="sumcl3" type="text" id="sumcl3" onChange="updatesumcl()"></td>
      <td><input name="sumcle3" type="text" id="sumcle3" onChange="updatesumcle()"></td>
    </tr>
    <tr>
      <th scope="row"><input name="acsal" type="text" id="acsal" value="Accrued Salaries "></th>
      <td><input name="sumcl4" type="text" id="sumcl4" onChange="updatesumcl()"></td>
      <td><input name="sumcle4" type="text" id="sumcle4" onChange="updatesumcle()"></td>
    </tr>
    <tr>
      <th scope="row"><input name="uearned" type="text" id="uearned" value="Unearned Revenue"></th>
      <td><input name="sumcl5" type="text" id="sumcl5" onChange="updatesumcl()"></td>
      <td><input name="sumcle5" type="text" id="sumcle5" onChange="updatesumcle()"></td>
    </tr>
    <tr>
      <th scope="row"><input name="ltdebt" type="text" id="ltdebt" value="Current Long Term Debt"></th>
      <td><input name="sumcl6" type="text" id="sumcl6" onChange="updatesumcl()"></td>
      <td><input name="sumcle6" type="text" id="sumcle6" onChange="updatesumcle()"></td>
    </tr>
    <tr>
      <th scope="row">Total Current Liabilities </th>
      <td><input name="sumcl" type="text" id="sumcl" onChange="updatesumcl()" readonly></td>
      <td><input name="sumcle" type="text" id="sumcle" readonly onChange="updatesumcle()"></td>
    </tr>
    <tr>
      <th scope="row">Long Term Liabilities </th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row"><input name="ltd" type="text" id="ltd" value="Long Term Debt"></th>
      <td><input name="sumltl1" type="text" id="sumltl1" onChange="updatesumltl()"></td>
      <td><input name="sumltle1" type="text" id="sumltle1" onChange="updatesumltle()"></td>
    </tr>
    <tr>
      <th scope="row"><input name="dinctax" type="text" id="dinctax" value="Deffered Income Tax"></th>
      <td><input name="sumltl2" type="text" id="sumltl2" onChange="updatesumltl()"></td>
      <td><input name="sumltle2" type="text" id="sumltle2" onChange="updatesumltle()"></td>
    </tr>
    <tr>
      <th scope="row"><input name="ltother" type="text" id="ltother" value="Other"></th>
      <td><input name="sumltl3" type="text" id="sumltl3" onChange="updatesumltl()"></td>
      <td><input name="sumltle3" type="text" id="sumltle3" onChange="updatesumltle()"></td>
    </tr>
    <tr>
      <th scope="row">Total Long Term Liabilities </th>
      <td><input name="sumltl" type="text" id="sumltl" onChange="updatesumltl()" readonly></td>
      <td><input name="sumltle" type="text" id="sumltle" onChange="updatesumltle()" readonly></td>
    </tr>
    <tr>
      <th scope="row">Owners Equity</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row"><input name="oinvestment" type="text" id="oinvestment" value="Owners Investment"></th>
      <td><input name="sumoe1" type="text" id="sumoe1" onChange="updatesumoe()"></td>
      <td><input name="sumoee1" type="text" id="sumoee1" onChange="updatesumoee()"></td>
    </tr>
    <tr>
      <th scope="row"><input name="rearn" type="text" id="rearn" value="Retained Earnings"></th>
      <td><input name="sumoe2" type="text" id="sumoe2" onChange="updatesumoe()"></td>
      <td><input name="sumoee2" type="text" id="sumoee2" onChange="updatesumoee()"></td>
    </tr>
    <tr>
      <th scope="row"><input name="oequity" type="text" id="oequity" value="Other"></th>
      <td><input name="sumoe3" type="text" id="sumoe3" onChange="updatesumoe()"></td>
      <td><input name="sumoeee3" type="text" id="sumoee3" onChange="updatesumoee()"></td>
    </tr>
    <tr>
      <th scope="row">Total Owners Equity </th>
      <td><input name="sumoe" type="text" id="sumoe" onChange="updatesumoe()"></td>
      <td><input name="sumoee" type="text" id="sumoeee" onChange="updatesumoee()"></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">TOTAL LIABILITIES AND OWNER'S EQUITY </th>
      <td><input name="sumtloe" type="text" id="sumtloe" onClick="updatesumtloe()" readonly></td>
      <td><input name="sumtloee" type="text" id="sumtloee" onClick="updatesumtloee()" ></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td><input type="submit" name="pdf" value="view pdf"></td>
    </tr>
  </table>
</form>
</pre>
</body>



</html>
