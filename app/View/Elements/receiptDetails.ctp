<div class='row' style="background:#d7d7d7;" id="row-<?php echo $receipts['ReceiptDets']['id'] ?>-<?php echo time() ;?>">
<select name="ledger[]">
<?php 
	for($i=1; $i < 4 ; $i++) {
		if($i == $journals['ReceiptDets']['account_from'])
			echo "<option value = $i selected>Legder $i</option>";
		else
			echo "<option value = $i>Legder $i</option>";
	}
?>
  

  </select>  | <input name="amount[]" value="<?php echo $receipts['ReceiptDets']['amount'];?>" class="txtbox" onBlur="calculateSum();" onkeypress="return isNumberKey(event)">  
<a href="javascript:void(0)" onClick="delRow('row-<?php echo $receipts['ReceiptDets']['id'] ?>-<?php echo time() ;?>');"> Close </a>
</div>