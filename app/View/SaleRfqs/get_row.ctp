<?php $curTime =  time() ;?>
<div class='row' style="background:#d7d7d7;" id="row-<?php echo $curTime ;?>"><select name="itemCode[]">
  <option value =1>Item 1</option>
  <option value= 2>Item 2</option>
  <option value=3>Item 3</option>
</select>
| <input name="qty[]" class="txtbox" onBlur="multiply(<?php echo $curTime ;?>);" id="col1-<?php echo $curTime;?>" onkeypress="return isNumberKey(event)">
| <select name="uom[]">
  <option value =1>UOM 1</option>
  <option value= 2>UOM 2</option>
  <option value=3>UOM 3</option>
</select>
| <input name="price[]" class="txtbox" onBlur="multiply(<?php echo $curTime ;?>);" id="col2-<?php echo $curTime;?>" onkeypress="return isNumberKey(event)"> 
| <input name="tot_price[]" class="txtbox" readonly = "readonly" id="tot-<?php echo $curTime;?>" onBlur="multiply();" onkeypress="return isNumberKey(event)"> 
|<select name="taxcomb[]">
  <option value =1>Tax Combination 1</option>
  <option value= 2>Tax Combination 2</option>
  <option value=3>Tax Combination 3</option>
</select>
| <input name="tax[]" class="txtbox" onBlur="multiply();" id="tax-<?php echo $curTime;?>" onkeypress="return isNumberKey(event)">
| <input name="totpricetax[]" class="txtbox" readonly="readonly" id="gtot-<?php echo $curTime;?>" onBlur="calculateSum();" onkeypress="return isNumberKey(event)">
<a href="javascript:void(0)" onClick="delRow('row-<?php echo $curTime ;?>');"> Close </a>

</div>