
<?php $curTime =  time() ;?>
<div class='row' style="background:#d7d7d7;" id="row-<?php echo $curTime ;?>">
<select name="itemCode[]">
<?php 
	for($i=1; $i < 4 ; $i++) {
		if($i == $purchaseOrders['PoDet']['item_code_id'])
			echo "<option value = $i selected>Item $i</option>";
		else
			echo "<option value = $i>Item $i</option>";
	}
?>
  

  </select> 
| <input name="qty[]" value="<?php echo $purchaseOrders['PoDet']['qty'];?>"  class="txtbox" onBlur="multiply(<?php echo $curTime ;?>);" id="col1-<?php echo $curTime;?>" onkeypress="return isNumberKey(event)">
<select name="uom[]">
<?php 
	for($i=1; $i < 4 ; $i++) {
		if($i == $purchaseOrders['PoDet']['uom_id'])
			echo "<option value = $i selected>UOM $i</option>";
		else
			echo "<option value = $i>UOM $i</option>";
	}
?>
  

  </select> 
| <input name="price[]" value="<?php echo $purchaseOrders['PoDet']['price'];?>"  class="txtbox" onBlur="multiply(<?php echo $curTime ;?>);" id="col1-<?php echo $curTime;?>" onkeypress="return isNumberKey(event)">
| <input name="tot_price[]" value="<?php echo $purchaseOrders['PoDet']['tot_price'];?>"  class="txtbox" onBlur="multiply(<?php echo $curTime ;?>);" id="col1-<?php echo $curTime;?>" onkeypress="return isNumberKey(event)">
<select name="taxcomb[]">
<?php 
	for($i=1; $i < 4 ; $i++) {
		if($i == $purchaseOrders['PoDet']['tax_comb_id'])
			echo "<option value = $i selected>taxcomb $i</option>";
		else
			echo "<option value = $i>taxcomb $i</option>";
	}
?>
| <input name="tax[]" value="<?php echo $purchaseOrders['PoDet']['tax'];?>"  class="txtbox" onBlur="multiply(<?php echo $curTime ;?>);" id="col1-<?php echo $curTime;?>" onkeypress="return isNumberKey(event)">
| <input name="totpricetax[]" value="<?php echo $purchaseOrders['PoDet']['gtotprice'];?>"  class="txtbox" onBlur="multiply(<?php echo $curTime ;?>);" id="col1-<?php echo $curTime;?>" onkeypress="return isNumberKey(event)">
<a href="javascript:void(0)" onClick="delRow('row-<?php echo $curTime ;?>');"> Close </a></div>