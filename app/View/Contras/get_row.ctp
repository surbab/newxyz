<div class='row' style="background:#d7d7d7;" id="row-<?php echo time() ;?>"><select name="ledger[]">
  <option value =1>Legder 1</option>
  <option value= 2>Ledger 2</option>
  <option value=3>Ledger 3</option>
</select> 

 | <input name="amount[]" class="txtbox" onBlur="calculateSum();" onkeypress="return isNumberKey(event)">  
<a href="javascript:void(0)" onClick="delRow('row-<?php echo time() ;?>');"> Close </a>

</div>