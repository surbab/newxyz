<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
<div class="purchaseOrders form">
<?php echo $this->Form->create('PurchaseOrder'); ?>
	<fieldset>
		<legend><?php echo __('Edit PurchaseOrder'); ?></legend>
	<?php
		echo $this->Form->hidden('location_id', array('default'=> 1));
		echo $this->Form->input('qtn_ref',array('label' =>'Quotation Reference No'));
		echo $this->Form->input('quote_no',array('label' =>'Quotation No'));
		echo $this->Form->input('qtn_date',array('label' =>'Quotation Date'));
		echo $this->Form->input('partner_id',array('label' =>'Partner Name', 'options' => $partner));
		echo $this->Form->input('sale_rfq_id',array('label' =>'Sale RFQ No', 'options' => $salerfq));
		echo $this->Form->input('sale_eng_id',array('label' =>'Sales Engineer Name', 'options' => $saleEng));
		echo $this->Form->input('term_id',array('label' =>'Terms & Conditions', 'options' => $term));
		echo $this->Form->input('estimation_id',array('label' =>'Estimation ID', 'options' => $estimation));
		echo $this->Form->input('pay_term_id',array('label' =>'Payment Terms', 'options' => $payterm));
		echo $this->Form->hidden('id');

	?>
	<div id="qt_details">
		PurchaseOrder Details
		<div class='wrapper'>
			<?php
				if($poDets) {
					foreach($poDets as $purchaseOrders) {
						echo $this->element('poDetails', array('purchaseOrders' => $purchaseOrders));
					}
				} else {
				
				}
			?>
		</div>
		<div class='add_new_status' style="display:none;">Adding new row. Please wait...</div>
		<div class='add_new'><a href="javascript:void(0)" onClick="addNewRow(this)">Add New Row</a> </div>
	</div>
	<?php	

		echo $this->Form->input('po_desc',array('label' =>'Quotation Description'));
		echo $this->Form->input('approval',array('label' =>'Approval Required?' ));
		echo $this->Form->hidden ('fin_year_id',array('label' =>'Financial Period'));
		echo $this->Form->hidden('creat_on',array('default'=> date('Y-m-d H:i:s')));
		echo $this->Form->hidden('creat_by',array('default'=> 1));
		echo $this->Form->hidden('mod_on');
		echo $this->Form->hidden('mod_by');


	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PurchaseOrder.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PurchaseOrder.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List PurchaseOrders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fin Years'), array('controller' => 'fin_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fin Year'), array('controller' => 'fin_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List PurchaseOrder Dets'), array('controller' => 'purchaseOrder_dets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New PurchaseOrder Det'), array('controller' => 'purchaseOrder_dets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<script>

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
		
		url: "/PurchaseOrders/getRow",

		beforeSend: function(){
			
		},

	success: function(data) {
			$('div.add_new_status').hide();
			if(rowCount == 0)
				$('div.wrapper').html(data);
			else
				$(data).appendTo("#qt_details .wrapper")
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
        $("#PurchaseOrderTotValue").val(sum.toFixed(2));
}
function multiply(Obj) {
 //
        var multi = 0;
		var tax=0;
		col1 = $('#col1-'+Obj).val();
		
		col2 = $('#col2-'+Obj).val();
		if(col1 == 'undefined') col1 = 0;
		if(col2 == 'undefined') col2 = 0;
		multi=col1*col2;
		$('#tot-'+Obj).val(multi.toFixed(2));
		tax=5.5/100 * multi;
		$('#tax-'+Obj).val(tax.toFixed(2));
		$('#gtot-'+Obj).val(tax.toFixed(2)+multi);
		
        //iterate through each textboxes and add the values
        //multi=0;
 
       
        //.toFixed() method will roundoff the final sum to 2 decimal places
        //$("#PurchaseOrderTotValue").val(sum.toFixed(2));
}
function addNewRow(Obj) {

	$('div.add_new_status').attr('style', 'color:green').show();
	rowCount = $('#qt_details .wrapper').find('div.row').length ;
	getRow(rowCount);
	
	//$('#qt_details .wrapper div.row').first().clone().appendTo("#qt_details .wrapper");
}

function delRow(Obj) {
	rowCount = $('#qt_details .wrapper').find('div.row').length ;
	
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