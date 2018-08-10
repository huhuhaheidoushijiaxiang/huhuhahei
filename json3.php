<?php
/*$str='123/_456/789/_3';
echo $str.'<br/>';
echo str_replace("_".trim(strrchr($str, '_'),'_'),'_'.(string)((int)trim(strrchr($str, '_'),'_')+1),$str);
exit;*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="jquery.jsonview.css" />
<script src="jquery-1.9.1.min.js"></script> 
<script type="text/javascript" src="jquery.jsonview.js"></script>
</head>
<body>
<p>
	地址:<input id="dz" style="width:600px" value="http://www.yeqiao.com/App_S_Maintenance/gradingresults" /><button onclick="tijiao('get')">get</button><button onclick="tijiao('post')">post</button>
</p>
<p>
	参数:<p id="p" class="j">Key:<input  value="user_logicid" />&nbsp;&nbsp;&nbsp;value:<input style="width:700px;" value="159401132581505526425" /><button onclick="tianjia()">添加</button></p>
	<p class="j">Key:<input  value="number" />&nbsp;&nbsp;&nbsp;value:<input style="width:700px;" value="辽A57873" /></p>
	<p class="j">Key:<input  value="car_erpkey" />&nbsp;&nbsp;&nbsp;value:<input style="width:700px;" value="car_erpkey" /></p>
	<p class="j">Key:<input  value="health_id" />&nbsp;&nbsp;&nbsp;value:<input style="width:700px;" value="h2" /></p>
	<p class="j">Key:<input  value="brand_erpkey" />&nbsp;&nbsp;&nbsp;value:<input style="width:700px;" value="brand_erpkey2" /></p>
	<p class="j">Key:<input  value="series_erpkey" />&nbsp;&nbsp;&nbsp;value:<input style="width:700px;" value="series_erpkey2" /></p>
	<p class="j">Key:<input  value="model_erpkey" />&nbsp;&nbsp;&nbsp;value:<input style="width:700px;" value="model_erpkey2" /></p>
	<p class="j">Key:<input  value="brand" />&nbsp;&nbsp;&nbsp;value:<input style="width:700px;" value="brand" /></p>
	<p class="j">Key:<input  value="series" />&nbsp;&nbsp;&nbsp;value:<input style="width:700px;" value="series" /></p>
	<p class="j">Key:<input  value="carmodel" />&nbsp;&nbsp;&nbsp;value:<input style="width:700px;" value="carmodel" /></p>
	<p class="j">Key:<input  value="number_date" />&nbsp;&nbsp;&nbsp;value:<input style="width:700px;" value="2018-02-05" /></p>
	<p class="j">Key:<input  value="mileage" />&nbsp;&nbsp;&nbsp;value:<input style="width:700px;" value="8888" /></p>
	<p class="j">Key:<input  value="project_erpkeys" />&nbsp;&nbsp;&nbsp;value:<input style="width:700px;" value="project_erpkey2;project_erpkey3" /></p>

	
	
	
	

  <button id="collapse-btn">Collapse</button>
  <button id="expand-btn">Expand</button>
  <button id="toggle-btn">Toggle</button>
  <button id="toggle-level1-btn">Toggle level1</button>
  <button id="toggle-level2-btn">Toggle level2</button>
  <div id="json"></div>
</body>
<script>
	    function jsonbb(json) {
	      $("#json").JSONView(json);
	      $('#collapse-btn').on('click', function() {
	        $('#json').JSONView('collapse');
	      });
	      $('#expand-btn').on('click', function() {
	        $('#json').JSONView('expand');
	      });
	      $('#toggle-btn').on('click', function() {
	        $('#json').JSONView('toggle');
	      });

	      $('#toggle-level1-btn').on('click', function() {
	        $('#json').JSONView('toggle', 1);
	      });

	      $('#toggle-level2-btn').on('click', function() {
	        $('#json').JSONView('toggle', 2);
	      });
	    };
		function tijiao(lx){
			var dz = $("#dz").val();
			var j = $(".j");
			var dadd = {};
			j.each(function() {
			    var $this = $(this);
			    if($this.find("input")[0].value.length > 0){
			    	dadd[$this.find("input")[0].value] = $this.find("input")[1].value;
			    }
			});
			console.log(dadd);
			$.ajax({
				type:lx,
				url:dz,
				data:dadd,
				async:true,
				success:function(result){
					//$("#div1").val(JSON.stringify(result, null, 4));
					//$("#div1").JSONView(result);
					jsonbb(result);
					console.log(result);
				}
			});
		}
		var ii = 0;
		function tianjia(lx){
			var sp = '<p id="p" class="j">Key:<input value="" />&nbsp;&nbsp;&nbsp;value:<input value="" /></p>';
			$("#p").append(sp);
		}
</script>
</body>
</html>