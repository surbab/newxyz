
<?php $curTime =  time() ;?>
<div class='row' style="background:#d7d7d7;" id="row-<?php echo $curTime ;?>">
| <input name="itemname[]" class="txtbox" id="col1-<?php echo $curTime;?>" onkeypress="return isNumberKey(event)">

| <input name="qty[]" class="txtbox" onBlur="multiply(<?php echo $curTime ;?>);" id="col1-<?php echo $curTime;?>" onkeypress="return isNumberKey(event)">
| <select name="uom[]">
  <?php foreach($uom as $uom): ?> 
 <option value =<?php echo $uom['Uom']['id']; ?> ><?php echo $uom['Uom']['uom']; ?></option>
 <?php endforeach; ?>
</select>
| <input name="item_desc[]" class="txtbox"  id="col2-<?php echo $curTime;?>" onkeypress="return isNumberKey(event)"> 
| <input name="rfq_comments[]" class="txtbox" id="tot-<?php echo $curTime;?>" onBlur="multiply();" onkeypress="return isNumberKey(event)"> 
<a href="javascript:void(0)" onClick="delRow('row-<?php echo $curTime ;?>');"> Close </a>

</div>