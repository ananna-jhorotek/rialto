 <script >
  var data = <?php echo json_encode($data) ?>;
  // console.log(data);
</script>

<!--- Disable function start--->
<script>
$(document).ready(function(){
	
	
	$(function() {

		 // $('#operator').on('change', function(){
			// var selected = $(this).find("option:selected").val();			
			// if(selected){
				
				
				// console.log(selected);
				
				// $( "#cellid" ).prop( "disabled", false );
				// $( "#thana" ).prop( "disabled", false );
				// $( "#latitude" ).prop( "disabled", false );
				// $( "#longitude" ).prop( "disabled", false);
				// $( "#area_range" ).prop( "disabled", false);
			// }
			// else{ 
				// console.log(selected);
				
				
				// $( "#cellid" ).attr( "disabled", true );
				// $( "#thana" ).attr( "disabled", true );
				// $( "#latitude" ).attr( "disabled", true );
				// $( "#longitude" ).attr( "disabled", true);
				// $( "#area_range" ).prop( "disabled", true);
			// }
			
		// });
		  
	});

	$("#thana").keyup(function(){				
				
		var length = $(this).val().length;
		if(length == 0){
			
			
			// console.log(length);
			
			$( "#thana" ).prop( "disabled", false );
			
			$( "#area_range" ).prop( "disabled", false );
			$( "#longitude" ).prop( "disabled", false);
			$( "#latitude" ).prop( "disabled", false);
			
		}
		else if(length = 1){					
			
			// console.log(length);
			
			$( "#area_range" ).prop( "disabled", true );
			$( "#longitude" ).prop( "disabled", true);
			$( "#latitude" ).prop( "disabled", true);
		}
		else
		{
			//......			
		}
				
				
	});	
	

	$("#latitude").keyup(function(){		
				
				
		var length = $(this).val().length;
		if(length == 0){
			
			
			console.log(length);
			
			
			$( "#area_range" ).prop( "disabled", false );
			$( "#latitude" ).prop( "disabled", false);
			$( "#longitude" ).prop( "disabled", false);
			$( "#thana" ).prop( "disabled", false );
			
		}
		else if(length = 1){					
			
			console.log(length);
			
			$( "#thana" ).prop( "disabled", true );
		}
		else
		{
			//......
		}			
			
	});	
	

	$("#longitude").keyup(function(){		
				
				
		var length = $(this).val().length;
		if(length == 0){
			
			
			console.log(length);
			
			
			$( "#latitude" ).prop( "disabled", false);
			$( "#longitude" ).prop( "disabled", false);
			$( "#area_range" ).prop( "disabled", false );
			$( "#thana" ).prop( "disabled", false );
			
		}
		else if(length = 1){					
			
			console.log(length);
			
			$( "#thana" ).prop( "disabled", true );
		}
		else
		{
			//......
		}			
			
	});	
	

	$("#area_range").change(function(){		
				
				
		var length = $(this).val().length;
		if(length == 0){
			
			
			console.log(length);
			
			
			$( "#latitude" ).prop( "disabled", false);
			$( "#longitude" ).prop( "disabled", false);
			$( "#area_range" ).prop( "disabled", false );
			$( "#thana" ).prop( "disabled", false );
			
		}
		else if(length = 1){					
			
			console.log(length);
			
			$( "#thana" ).prop( "disabled", true );
		}
		else
		{
			//......
		}			
			
	});	
	
});
</script>
<!--- Disable function End--->

<!--- AutoComplete cellid start--->
<script>
$(function() {
    function split( val ) {
        return val.split( /,\s*/ );
    }
    function extractLast( term ) {
        return split( term ).pop();
    }
    
    $( "#cellid" ).bind( "keydown", function( event ) {
		
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
            event.preventDefault();
        }
    })
    .autocomplete({
        minLength: 1,
        source: function( request, response ) {
            // delegate back to autocomplete, but extract the last term
            $.getJSON("cellidAjax.php", { term : extractLast( request.term )},response);
        },
        focus: function() {
            // prevent value inserted on focus
            return false;
        },
        select: function( event, ui ) {
            var terms = split( this.value );
            // remove the current input
            terms.pop();
            // add the selected item
            terms.push( ui.item.value );
            // add placeholder to get the comma-and-space at the end
            terms.push( "" );
            this.value = terms.join( "," );
            return false;
        }
    });
});
</script>
<!--- AutoComplete cellid End--->


<!--- Thana information for autocomplete -->
<script>
$(function() {
    function split( val ) {
        return val.split( /,\s*/ );
    }
    function extractLast( term ) {
        return split( term ).pop();
    }
    
    $( "#thana" ).bind( "keydown", function( event ) {
		
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
            event.preventDefault();
        }
    })
    .autocomplete({
        minLength: 1,
        source: function( request, response ) {
            // delegate back to autocomplete, but extract the last term
            $.getJSON("thanaAjax.php", { term : extractLast( request.term )},response);
        },
        focus: function() {
            // prevent value inserted on focus
            return false;
        },
        select: function( event, ui ) {
            var terms = split( this.value );
            // remove the current input
            terms.pop();
            // add the selected item
            terms.push( ui.item.value );
            // add placeholder to get the comma-and-space at the end
            terms.push( "" );
            this.value = terms.join( "," );
            return false;
        }
    });
});
</script>
<!--- Thana information for autocomplete -->



<!--- init for map -->
<script>
	var map;
	var show = L.marker();
	var myIcon = L.divIcon({className: 'my-div-icon',
						  html:'<img src="<? echo site_url('assets/images/bts.png');?>" style=" margin-top: -15px; margin-left: -25px; " class="icon-enviroment anticon location" type="enviroment">',
						 
						  iconSize: null});

	function init(){

		map = new L.Map('map');
		// create the tile layer with correct attribution

		// var osmUrl='http://54.202.51.247:80/hot/{z}/{x}/{y}.png';
		var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
		var osmAttrib='Nafis © <a href="http://dingi.org">Dingi Map</a> contributors';
		var osm = new L.TileLayer(osmUrl, {minZoom: 1, maxZoom: 20, attribution: osmAttrib});

		// start the map in South-East England
		map.setView(new L.LatLng(23.7526, 90.3792),14);
		map.addLayer(osm);
		

	}
</script>
<!--- init for map -->


<!--- Plotteding submitOperator BTS in map -->
<script>

    var json;
    var gp = ['#0063af','#1A73B7','#3382BF','#4C92C7','#66A1CF','#80B1D7'];
    var bl = ['#f27025', '#F37E3B', '#F58D51', '#F69B66', '#F7A97C', '#F8B892'];
    var robi = ['#fe0002', '#FE1A1B', '#FE3335', '#FE4C4E', '#FE6667', '#FE8080'];
    $(document).ready(function(){
		
		
	$('#addbutton').click(
		
		function(){
			var cellid = document.getElementById('cellid').value;
			var cellid = cellid.trim();
			$('#cellid').val("");		
			
			$('#InputsWrapper').show();
			// cellid = cellid.substring(1,cellid.lastIndexOf(","));
			$('#input').val($('#input').val()+cellid);
			
			document.getElementById('operator').value="";
		}
	);
	

    $('#submitOperator').on('click',function (){
        var operator = document.getElementById('operator').value;
        var cellid = document.getElementById('input').value;
		var cellid = cellid.trim();
		var array = cellid.split(',');
		
		// data = {'operator':operator,'cellid':array};
		// console.log(array);
		// console.log(data);
		// dataType: 'json',
		// alert('WAIT');
		
		
		//--------- Generating title for body ---------
		function removeEmpty(obj) {
		  Object.keys(obj).forEach(function(key) {
			(obj[key] && typeof obj[key] === 'object') && removeEmpty(obj[key]) ||
			(obj[key] === undefined || obj[key] === null || obj[key]=="") && delete obj[key]
		  });
		  return obj;
		};




		seacrhObj = [{'operator':operator,'cellid':cellid}];
		var seacrhdata = removeEmpty(seacrhObj);
	
		
		var rows = seacrhdata;
		var html = "";
		for( var j in rows[0]){
			
		}

		for( var i = 0; i < rows.length; i++) {
		console.log(rows);
			
			for( var j in rows[i] ) {
				html +=  j+" : "+ rows[i][j] + "; ";
			}
		}

		document.getElementById('mgs').innerHTML = "Result For : " + html;

		//--------- Generating title for body ---------
		
		
		//------------Adding logs to BD------------
		// var source_url = "123";
		$.ajax({
			type: "POST",  
			url: "<?php echo site_url('RequestLogs/storeLogs');?>",
			data: {'operator':operator,'cellid':cellid},
			dataType: 'json', 
			success: function(data){
			}     
		});	
		//------------Adding logs to BD------------
		
		
		$.ajax({
			type: "POST",  
			url: "<?php echo site_url('CellTriangulation/operator');?>",
			data: {'operator':operator,'cellid':cellid},
			dataType: 'json', 
			success: function(data){
				myData = JSON.stringify(data);
				json = JSON.parse(myData);
				//console.log(myData);
				var markerlist = new Array();
                for(var i=0;i<json.length;i++)
                {
                    console.log(json[i]);
                    //console.log(json[i].longitude);
					
					//$("#Modal").modal({show:false});
					var myIcon = L.divIcon({className: 'my-div-icon',
						  html:'<div  style="font-size: 5px;" align="center"><img width="35" height="35" src="<? echo site_url('assets/images/newbtsicon.png');?>" style=" margin-top: -15px; margin-left: -25px; " class="icon-enviroment anticon location" type="enviroment"><p>'+json[i].site_name+'</p></div>',
						 
						  iconSize: null});
                    marker = L.marker([json[i].latitude, json[i].longitude], {icon: myIcon}).addTo(map);

                    if(json[i].operator == 'bl')
                    {
                        //console.log('inside');
                        //console.log( parseInt(json[i].antenna_direction / 60));
                        color = bl[ parseInt(json[i].antenna_direction / 60)];
                    }
                    else if(json[i].operator == 'gp')
                    {
                        color = gp[ parseInt(json[i].antenna_direction / 60)];
                    }
                    else
                    {
                        color = robi[ parseInt(json[i].antenna_direction / 60) ];
                    }
                    console.log(color);
                    show = L.semiCircle([json[i].latitude, json[i].longitude], {
                        radius: json[i].cell_beamrange,
                        color: '',
                        fillColor: color,
						

						startAngle: parseFloat(json[i].antenna_direction),
						stopAngle: parseFloat(json[i].antenna_direction) + 50
                    }).addTo(map).on('click',mypopup).bindPopup("<div>BTS Name : " + json[i].site_name + "	<br/>Cell_name : " + json[i].cell_name + "	<br/>Cell ID : " + json[i].cell_id + "<br/>Longitude : " + json[i].longitude + "	<br/>Site Address : " + json[i].site_address + "	<br/>Operator : " + json[i].operator + "</div>",{maxWidth: "300"});
					
					
					//console.log('--------------------------------');
					//console.log(json[i].antenna_direction - 5);
					//console.log('----------------+++----------------');
					//console.log(json[i].antenna_direction + Number('5'));
					
					
					

					
					// show.popupView = JSON.stringify(json[i]);
					
				
                    // show = L.circle([json[i].latitude, json[i].longitude], {
                        // radius: 50000,
                        // color: color,
                        // fillColor: color,

                        // startAngle: json[i].antenna_direction -50,
                        // stopAngle: json[i].antenna_direction + 50
                    // }).addTo(map);
					
					
                    markerlist.push(show.getLatLng());

                    // console.log(show);
					

					
	
	
	
					var rows = json;

					$(document).ready(function () {
						var html = "<p>";
						for (var i = 0; i < rows.length; i++) {
							html+="id:" + rows[i].id + "<br/>";
							html+="Site Name:" + rows[i].site_name+ "<br/>"; 
							html+="lac_id:" + rows[i].lac_id + "<br/>";
							html+="cell_name:" + rows[i].cell_name+ "<br/>";
							html+="cell_id:" + rows[i].cell_id + "<br/>";
							html+="laccellid:" + rows[i].laccellid+ "<br/>"; 
							html+="antena direction:" + rows[i].antena_direction + "<br/>";
							html+="road:" + rows[i].road+ "<br/>";
							html+="union_ward:" + rows[i].union_ward + "<br/>";
							html+="District:" + rows[i].district+ "<br/>"; 
							html+="division:" + rows[i].division + "<br/>";
							html+="bts_type:" + rows[i].bts_type+ "<br/>";
							html+="<hr/>";
							
							
						  

							html+="</p>";

						}
						//html+="</table>";
					   $('#btsmgs').html(html);
					});





					}
					
					
					
					
					
					
					

					
		//$('#mgs').html('Seach for: ' +;
				//console.log(Object.keys(data[0]));
					//console.log(myData);
					
				  document.getElementById('cellid').value="";
				  document.getElementById('operator').value="";
				  document.getElementById('input').value="";
				
				
				
			
				},
			error: function(data){alert(data);}        
		});
		
	})

	function mypopup(e){
		// alert(e.target.popupView);
		  //$("#Modal").modal("show");			
	}



    });



</script>
<!--- Plotteding submitOperator BTS in map -->

<!--- Plotteding submitThana BTS in map -->
<script>

    var json;
    var gp = ['#0063af','#1A73B7','#3382BF','#4C92C7','#66A1CF','#80B1D7'];
    var bl = ['#f27025', '#F37E3B', '#F58D51', '#F69B66', '#F7A97C', '#F8B892'];
    var robi = ['#fe0002', '#FE1A1B', '#FE3335', '#FE4C4E', '#FE6667', '#FE8080'];
    $(document).ready(function(){
		
		$('#submitThana').on('click',function () {
			
			
			// console.log('search icon clicked');
			var operator = document.getElementById('operator').value;
			var longitude = document.getElementById('longitude').value;
			var latitude = document.getElementById('latitude').value;
			var area_range = document.getElementById('area_range').value;
			var thana = document.getElementById('thana').value;
			
			if(thana == '')
			{
				// console.log(thana);
				var url = "<?php echo site_url('CellTriangulation/crimescene');?>";
			}
			else
			{
				// console.log(thana);
				var url = "<?php echo site_url('CellTriangulation/searchThana');?>";
			}
			
			data = {'operator':operator,'area_range':area_range,'longitude':longitude,'latitude':latitude,'thana':thana};
			// console.log(data);
			// dataType: 'json',
			// alert('WAIT');
			
			
			
			//--------- Generating title for body ---------
			function removeEmpty(obj) {
			  Object.keys(obj).forEach(function(key) {
				(obj[key] && typeof obj[key] === 'object') && removeEmpty(obj[key]) ||
				(obj[key] === undefined || obj[key] === null || obj[key]=="") && delete obj[key]
			  });
			  return obj;
			};




			seacrhObj = [{'operator':operator,'area_range':area_range,'longitude':longitude,'latitude':latitude,'thana':thana}];
			var seacrhdata = removeEmpty(seacrhObj);
		
			
			var rows = seacrhdata;
			var html = "";
			for( var j in rows[0]){
				
			}

			for( var i = 0; i < rows.length; i++) {
			console.log(rows);
				
				for( var j in rows[i] ) {
					html +=  j+" : "+ rows[i][j] + "; ";
				}
			}

			document.getElementById('mgs').innerHTML = "Result For : " + html;

			//--------- Generating title for body ---------
			
				
			//------------Adding logs to BD------------
			// var source_url = "123";
			$.ajax({
				type: "POST",  
				url: "<?php echo site_url('RequestLogs/storeLogs');?>",
				data: data,
				dataType: 'json', 
				success: function(data){
				}     
			});	
			//------------Adding logs to BD------------
			
			$.ajax({
				type: "POST",  
				url: url,
				data: data,
				dataType: 'json', 
				success: function(data){
				myData = JSON.stringify(data);
				json = JSON.parse(myData);
				//console.log(myData);
				var markerlist = new Array();
				
					
					
                for(var i=0;i<json.length;i++)
                {
                    console.log(json[i]);
                    //console.log(json[i].longitude);
					
					//$("#Modal").modal({show:false});
					var myIcon = L.divIcon({className: 'my-div-icon',
						  html:'<div  style="font-size: 5px;" align="center"><img width="35" height="35" src="<? echo site_url('assets/images/newbtsicon.png');?>" style=" margin-top: -15px; margin-left: -25px; " class="icon-enviroment anticon location" type="enviroment"><p>'+json[i].site_name+'</p></div>',
						 
						  iconSize: null});
                    marker = L.marker([json[i].latitude, json[i].longitude], {icon: myIcon}).addTo(map);

                    if(json[i].operator == 'bl')
                    {
                        //console.log('inside');
                        //console.log( parseInt(json[i].antenna_direction / 60));
                        color = bl[ parseInt(json[i].antenna_direction / 60)];
                    }
                    else if(json[i].operator == 'gp')
                    {
                        color = gp[ parseInt(json[i].antenna_direction / 60)];
                    }
                    else
                    {
                        color = robi[ parseInt(json[i].antenna_direction / 60) ];
                    }
                    console.log(color);
					
					var circle = L.circle([latitude, longitude], {
							color: '',
							fillColor: '#20841D',
							fillOpacity: 0.3,
							radius: area_range
							}).addTo(map);
							map.fitBounds([[latitude,longitude]],{maxZoom : 16});
					
                    show = L.semiCircle([json[i].latitude, json[i].longitude], {
                        radius: json[i].cell_beamrange,
                        color: '',
                        fillColor: color,
						

						startAngle: parseFloat(json[i].antenna_direction),
						stopAngle: parseFloat(json[i].antenna_direction) + 50
                    }).addTo(map).on('click',mypopup).bindPopup("<div>BTS Name : " + json[i].site_name + "	<br/>Cell_name : " + json[i].cell_name + "	<br/>Cell ID : " + json[i].cell_id + "<br/>Longitude : " + json[i].longitude + "	<br/>Site Address : " + json[i].site_address + "	<br/>Operator : " + json[i].operator + "</div>",{maxWidth: "300"});
					
					
					
					
                    markerlist.push(show.getLatLng());

                    // console.log(show);
					

					if(thana != '')
					{
						map.fitBounds(L.latLngBounds(markerlist),{maxZoom : 15});
					}
					
					
	
	
	
					var rows = json;

					$(document).ready(function () {
						var html = "<p>";
						for (var i = 0; i < rows.length; i++) {
							html+="id:" + rows[i].id + "<br/>";
							html+="Site Name:" + rows[i].site_name+ "<br/>"; 
							html+="lac_id:" + rows[i].lac_id + "<br/>";
							html+="cell_name:" + rows[i].cell_name+ "<br/>";
							html+="cell_id:" + rows[i].cell_id + "<br/>";
							html+="laccellid:" + rows[i].laccellid+ "<br/>"; 
							html+="antena direction:" + rows[i].antena_direction + "<br/>";
							html+="road:" + rows[i].road+ "<br/>";
							html+="union_ward:" + rows[i].union_ward + "<br/>";
							html+="District:" + rows[i].district+ "<br/>"; 
							html+="division:" + rows[i].division + "<br/>";
							html+="bts_type:" + rows[i].bts_type+ "<br/>";
							html+="<hr/>";
							
							
						  

							html+="</p>";

						}
						//html+="</table>";
					   $('#btsmgs').html(html);
					});





					}
					
					
					
					document.getElementById('operator').value="";
					document.getElementById('thana').value="";
					document.getElementById('latitude').value="";
					document.getElementById('longitude').value="";
					document.getElementById('area_range').value="";
					
				
			
				},
				error: function(data){
					
					document.getElementById('operator').value="";
					document.getElementById('thana').value="";
					document.getElementById('latitude').value="";
					document.getElementById('longitude').value="";
					document.getElementById('area_range').value="";
					alert('No information found in the MAP');
				}        
			});
				
		})



	function mypopup(e){
		// alert(e.target.popupView);
		  //$("#Modal").modal("show");			
	}

    });



</script>
<!--- Plotteding submitThana BTS in map -->
 <!-- Content Wrapper. Contains page content -->
  <div>

    <!-- Main content -->
    <section class="">
     <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-3 connectedSortable">

          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title"><?php echo $this->session->userdata('user_id');?></h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
			  
                <button type="button" class="btn btn-info btn-sm pull-right" data-widget="collapse"
                        data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
			<div class="form-group">
					<select id="reqtype" name="operator" class="form-control" required="required">
						<option value="na" selected="">Choose One:</option>
						<option value="operatorArea">OPERATOR/CELLID</option>
						<option value="crimescene">CRIME SCENE/CELLID</option>
					</select>
				</div>
				
				<div class="form-group">
					<span for="subject">
						Operator</span>
					<select id="operator" name="operator" class="form-control" required="required">
						<option value="" selected="">All Operator:</option>
						<option value="BANGLALINK">BANGLALINK</option>
						<option value="ROBI">ROBI</option>
						<option value="GRAMEENPHONE">GRAMEENPHONE</option>
						<option value="AIRTEL">AIRTEL</option>
						<option value="TELETALK">TELETALK</option>
					</select>
				</div>
				
				

				<div class="hidediv" id="operatorArea" style="display:none">
					
					<div class="form-group">
						<div id="">
							<div><input class="form-control" type="text" name="cellid" id="cellid" placeholder="Enter CELLID"></div>
						</div>								
					</div>							
					
						
					<div class="form-group text-center">
						<input type="button" id="addbutton" class="btn btn-info" value="Add"/>
					</div>							
					
					<div class="form-group">
						<div id="InputsWrapper" style="display:none">
							<div><input class="form-control" type="text" name="cellid" id="input" placeholder="Selected CELLID"></div>
						</div>								
					</div>
					
					
					<span id="submitOperator" class="btn btn-primary">Submit</span>
				</div>
				
				<div class="hidediv" id="crimescene" style="display:none">
				
					
					
					<div id="InputsWrapper">
						<input class="form-control" type="text" name="latitude" id="latitude" value="" placeholder="Enter Latitude" >
					</div>
					<br/>
					<div id="InputsWrapper">
						<input class="form-control" type="text" name="longitude" id="longitude" value="" placeholder="Enter Longitude" >
					</div>
					<br/>
					<div id="InputsWrapper">								
						<select id="area_range" name="area_range" class="form-control" required="required" disabled>
							<option value="" selected="">Choose One:</option>
							<option value="3000">3KM</option>
							<option value="5000">5KM</option>
						</select>
					</div>
					<br/>
					
					
					
					<div class="form-group">
						<div>OR</div>							
					</div>
					
					
					
					<div class="form-group">
						<div id="InputsWrapperThana">
							<div><input class="form-control" type="text" name="thana" id="thana" placeholder="Select Thana" disabled></div>
						</div>
						<br/>
						<div id="lineBreak"></div>								
					</div>
					
					
					<div class="box-footer clearfix">
					  <button type="button" class="pull-right btn btn-default" id="submitThana">Submit
						<i class="fa fa-arrow-circle-right"></i></button>
					</div>		
				</div>
			
            </div>
            
          </div>
		  
          <!-- quick BTS INFORMATION widget -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">BTS INFORMATION</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
			  
                <button type="button" class="btn btn-info btn-sm pull-right" data-widget="collapse"
                        data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
				<div class="panel-body" id='btsmgs' style="font-size: 12px; max-height:200px; overflow-y: scroll;"></div>
            </div>
          </div>

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-9 connectedSortable">

          <!-- Map box -->
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-right box-tools"></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                        data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->

              <i class="fa fa-map-marker"></i>

              <h3 class="box-title" id="mgs" style="text-transform:uppercase;">
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              </h3>
            </div>
            <div class="box-body">
					<div id="map" class="panel-body" style="max-height: 470px;"></div>

					<style>
						#map {
							width: 100%;
							height: 100%;
							cursor: auto;
						}
				</style>
            </div>
          </div>
          <!-- /.box -->

         
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  


<script>
 $(function() {
        $('#reqtype').change(function(){
            $('.hidediv').hide();
            $('#' + $(this).val()).show();
        });
    });
</script>