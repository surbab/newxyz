<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
<div class="contras form">
<?php echo $this->Form->create('Contra'); ?>
	<fieldset>
		<legend><?php echo __('Edit Contra'); ?></legend>
	<?php
		echo $this->Form->hidden('location_id');
		echo $this->Form->hidden('id');
		echo $this->Form->input('contra_no',array('label' =>'Contra Transaction No'));
		echo $this->Form->input('contra_date',array('label' =>'Contra Date'));
      //  echo $this->Form->input('account_id',array('label' =>'Contra from'));
		echo $this->Form->input('account_id',array('label' =>'Contra from', 'options' => $contra_from));
	?>
	
		
		
	<div id="contra_details">
		Contra Details
		<div class='wrapper'>
			<?php
				if($contraDets) {
					foreach($contraDets as $contras) {
						echo $this->element('contraDetails', array('contras' => $contras));
					}
				} else {
				
				}
			?>
		</div>
		<div class='add_new_status' style="display:none;">Adding new row. Please wait...</div>
		<div class='add_new'><a href="javascript:void(0)" onClick="addNewRow(this)">Add New Row</a> </div>
	</div>
	<?php	
		echo $this->Form->input('tot_value', array('label' =>'Total Contra', 'readonly'=>"readonly"));	
		echo $this->Form->input('desc',array('label' =>'Transaction Description'));
		//echo $this->Form->input('tot_value', array('label' =>'Total Contra'));
		
		echo $this->Form->input('fin_year_id',array('label' =>'Financial Period', 'options' => $finYears));
		echo $this->Form->hidden('creat_on',array('label' =>'Created on'));
		echo $this->Form->hidden('creat_by',array('label' =>'Created by'));
		echo $this->Form->hidden('mod_on');
		echo $this->Form->hidden('mod_by');
	
/*
		echo $this->Form->input('id');
		echo $this->Form->input('location_id');
		echo $this->Form->input('contra_no');
		echo $this->Form->input('contra_date');
		echo $this->Form->input('account_id');
		echo $this->Form->input('desc');
		echo $this->Form->input('tot_value');
		echo $this->Form->input('fin_year_id');
		echo $this->Form->input('creat_on');
		echo $this->Form->input('creat_by');
		echo $this->Form->input('mod_on');
		echo $this->Form->input('mod_by');
*/

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Contra.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Contra.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contras'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contra Dets'), array('controller' => 'contra_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contra Det'), array('controller' => 'contra_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<script>
$(document).ready(function() {
	//getRow(0);
	
	
});

function isNumberKey(evt)  {

          var charCode = (evt.which) ? evt.which : event.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
      

}

function getRow(rowCount) {
	$.ajax({
		type: "POST",  
		url: "/contras/getRow",
		beforeSend: function(){
			
		},
		success: function(data) {
			$('div.add_new_status').hide();
			if(rowCount == 0)
				$('div.wrapper').html(data);
			else
				$(data).appendTo("#contra_details .wrapper")
		}		    
	}); 	
	//onlyNumers();
}
function calculateSum() {
 
        var sum = 0;
        //iterate through each textboxes and add the values
        $(".wrapper div.row input").each(function() {
 
            //add only if the value is number
            if(!isNaN(this.value) && this.value.length!=0) {
                sum += parseFloat(this.value);
            }
 
        });
        //.toFixed() method will roundoff the final sum to 2 decimal places
        $("#ContraTotValue").val(sum.toFixed(2));
}

function addNewRow(Obj) {
	$('div.add_new_status').attr('style', 'color:green').show();
	rowCount = $('#contra_details .wrapper').find('div.row').length ;
	getRow(rowCount);
	//$('#contra_details .wrapper div.row').first().clone().appendTo("#contra_details .wrapper");
}

function delRow(Obj) {
	rowCount = $('#contra_details .wrapper').find('div.row').length ;
	
	if(1 >= rowCount )
		getRow(0);
	else
		$('div#'+ Obj).remove();
		
	calculateSum();	
}


</script>
<style>

input.txtbox {
    background: white;
    border: 1px solid #ffa853;
    //border-radius: 5px;
	height: 20px;
    //box-shadow: 0 0 2px 2px #ffa853;
    color: #666;
    padding: 5px 5px;
    width: 100px;
    outline: none;
}
</style>