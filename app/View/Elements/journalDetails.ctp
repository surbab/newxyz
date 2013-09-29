<div class='row' style="background:#d7d7d7;" id="row-<?php echo $journals['JournalDets']['id'] ?>-<?php echo time() ;?>">
<select name="ledgerfrom[]">
<?php 
	for($i=1; $i < 4 ; $i++) {
		if($i == $journals['JournalDets']['account_by_id'])
			echo "<option value = $i selected>Legder $i</option>";
		else
			echo "<option value = $i>Legder $i</option>";
	}
?>
  

  </select> 
<select name="ledgerto[]">
<?php 
	for($i=1; $i < 4 ; $i++) {
		if($i == $journals['JournalDets']['account_to_id'])
			echo "<option value = $i selected>Legder $i</option>";
		else
			echo "<option value = $i>Legder $i</option>";
	}
?>
  

  </select> 

  | <input name="amount[]" value="<?php echo $journals['JournalDets']['amount'];?>" class="txtbox" onBlur="calculateSum();" onkeypress="return isNumberKey(event)">  
<a href="javascript:void(0)" onClick="delRow('row-<?php echo $journals['JournalDets']['id'] ?>-<?php echo time() ;?>');"> Close </a>
</div>