<?php

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/w2ui-1.2.min.css" />
    <script src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/w2ui-1.2.min.js"></script>
</head>
<body>
<div id="layout" style="width: 95%; height: 400px;"></div>
<script>
 function load()
 {
 alert('hi');
        type=$(this).attr("id");
		url="test.ctp";
        $("[id]").removeClass("selected");
        $("#"+type).addClass("selected");
		content=$("#"+tab1).load("test.ctp");
		alert('lksjdf'+content);
		$("#"+tab1).load("test.ctp");
		//alert("kafslkjadslkjads");
		return false;
 
 }
 
  </script>



<script>
// first define a layout
var pstyle = 'border: 1px solid #dfdfdf; padding: 5px;';
$('#layout').w2layout({
    name: 'layout',
    panels: [
		{ type: 'top', size: 50, resizable: true, style: pstyle, content: 'top' },
        { type: 'left', size: 200, resizable: true, style: 'background-color: #F5F6F7;', content: 'left' },
        { type: 'main', style: pstyle + 'border-top: 0px;', content: 'tab1',  
			tabs: {
				active: 'tab5',
				tabs: [
					{ id: 'tab1', caption: 'Dash Board'},
					{ id: 'tab2', caption: 'Dard', closable:true }
				],
				onClick: function (target, data) {
					this.owner.content('main', target);
				}
				
			}
		}
    ]
});

// then define the sidebar
w2ui['layout'].content('left', $().w2sidebar({
	name: 'sidebar',
	img: null,
	nodes: [ 
		{ id: 'level-1', text: 'Company master', img: 'icon-folder', expanded: false, group: true,
		  nodes: [ { id: 'test', text: 'Level 1.1', img: 'icon-add' },
				   { id: 'level-1-2', text: 'Level 1.2', img: 'icon-save' },
				   { id: 'level-1-3', text: 'Level 1.3', img: 'icon-delete' }
				 ]
		},
		{ id: 'level-2', text: 'Purchase', img: 'icon-folder', expanded: false, group: true,
		  nodes: [ { id: 'level-2-1', text: 'Level 2.1', img: 'icon-folder', 
					 nodes: [
					   { id: 'level-2-1-1', text: 'Level 2.1.1', img: 'icon-page' },
					   { id: 'level-2-1-2', text: 'Level 2.1.2', img: 'icon-page' },
					   { id: 'level-2-1-3', text: 'Level 2.1.3', img: 'icon-page' }
				 ]},
				   { id: 'level-2-2', text: 'Level 2.2', img: 'icon-page' },
				   { id: 'level-2-3', text: 'Level 2.3', img: 'icon-page' }
				 ]
		},
		{ id: 'level-3', text: 'Sales & Marketing', img: 'icon-folder', expanded: false, group: true,
		  nodes: [ { id: 'level-3-1', text: 'Level 3.1', img: 'icon-page' },
				   { id: 'level-3-2', text: 'Level 3.2', img: 'icon-page' },
				   { id: 'level-3-3', text: 'Level 3.3', img: 'icon-page' }
				 ]
		}
	],
	onClick: function (cmd) {
		
		addTab();

	}
}));

var ind = 3;
var url='';
function addTab() {
	if (ind > 12) return;
	w2ui['layout'].get('main').tabs.add({id:'tab'+ind, caption:'Tab'+ind, closable : true, text:'tab'+ind});
	w2ui['layout'].get('main').tabs.append( "<div id='" + tab + "'><p>" + tabContentHtml + "</p></div>" );
	ind++;
}


</script>

<div id="tab1">

     </div>

<div id="tab2">

	</div>

</body>

</html>