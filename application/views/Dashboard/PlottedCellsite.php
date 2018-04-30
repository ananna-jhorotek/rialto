
<script >
  var data = <?php echo json_encode($data) ?>;
  // console.log(data);
</script>

<script>
	var map;
	var show = L.marker();
	

	function init(){

		map = new L.Map('map');
		// create the tile layer with correct attribution

		var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
		/*  var osmUrl='http://54.202.51.247:80/hot/{z}/{x}/{y}.png';*/
		var osmAttrib='Nafis © <a href="http://dingi.org">Dingi Map</a> contributors';
		var osm = new L.TileLayer(osmUrl, {minZoom: 1, maxZoom: 20, attribution: osmAttrib});

		// start the map in South-East England
		map.setView(new L.LatLng(23.7526, 90.3792),14);
		map.addLayer(osm);
		

	}
</script>


<script>

    var json;
    var gp = ['#0063af','#9999ff','#8080ff','#4d4dff','#1a1aff','#0000e6'];
    var bl = ['#f27025', '#F37E3B', '#F58D51', '#F69B66', '#F7A97C', '#F8B892'];
    var robi = ['#fe0002', '#FE1A1B', '#FE3335', '#FE4C4E', '#FE6667', '#FE8080'];
    $(document).ready(function(){
		
		$(function() {

		  $('#operator').on('change', function(){
			var selected = $(this).find("option:selected").val();
			
			if(selected){
				
				
				console.log(selected);
				
				$( "#laccellid" ).prop( "disabled", false );
				$( "#thana" ).prop( "disabled", false );
				$( "#bts" ).prop( "disabled", false );
				$( "#lac_id" ).prop( "disabled", false);
				$( "#mySubmit" ).prop( "disabled", false);
			}
			else{ 
				console.log(selected);
				
				
				$( "#laccellid" ).attr( "disabled", true );
				$( "#thana" ).attr( "disabled", true );
				$( "#bts" ).attr( "disabled", true );
				$( "#lac_id" ).attr( "disabled", true);
				$( "#mySubmit" ).prop( "disabled", true);
			}
			
		  });
		  
		});
		
		
		
		$("#laccellid").keyup(function(){
			
			var length = $(this).val().length;
			if(length != 0){
				
				
				//console.log(length);
				
				$( "#thana" ).prop( "disabled", true );
				$( "#bts" ).prop( "disabled", true );
				$( "#lac_id" ).prop( "disabled", true);
			}else if(length = 1){ 
				
				
				console.log(length);
				
				$( "#thana" ).prop( "disabled", false );
				$( "#bts" ).prop( "disabled", false );
				$( "#lac_id" ).prop( "disabled", false);
			}
			
				
		});
	
	
	
		$("#bts").keyup(function(){
			
				var length = $(this).val().length;
				if(length != 0){
					
					
					//console.log(length);
					
					$( "#thana" ).prop( "disabled", true );
					$( "#laccellid" ).prop( "disabled", true );
					$( "#lac_id" ).prop( "disabled", true);
				}else if(length = 1){ 
					
					
					console.log(length);
					
					$( "#thana" ).prop( "disabled", false );
					$( "#laccellid" ).prop( "disabled", false );
					$( "#lac_id" ).prop( "disabled", false);
				}
				
				
		});	
		
		
		
		$("#thana").keyup(function(){		
				
				
				var length = $(this).val().length;
				if(length != 0){
					
					
					//console.log(length);
					
					$( "#bts" ).prop( "disabled", true );
					$( "#laccellid" ).prop( "disabled", true );
					$( "#lac_id" ).prop( "disabled", true);
				}else if(length = 1){ 
					
					
					console.log(length);
					
					$( "#bts" ).prop( "disabled", false );
					$( "#laccellid" ).prop( "disabled", false );
					$( "#lac_id" ).prop( "disabled", false);
				}
				
				
		});	
		
		
		
		$("#lac_id").keyup(function(){		
				
				
				var length = $(this).val().length;
				if(length != 0){
					
					
					//console.log(length);
					
					$( "#bts" ).prop( "disabled", true );
					$( "#laccellid" ).prop( "disabled", true );
					$( "#thana" ).prop( "disabled", true);
				}else if(length = 1){ 
					
					
					console.log(length);
					
					$( "#bts" ).prop( "disabled", false );
					$( "#laccellid" ).prop( "disabled", false );
					$( "#thana" ).prop( "disabled", false);
				}
				
				
		});
			

	
	
	


    $('#mySubmit').on('click',function(){		
		
        //console.log('search icon clicked');
        var thana = document.getElementById('thana').value;
        var lac = document.getElementById('lac_id').value;
        var operator = document.getElementById('operator').value;
        var laccellid = document.getElementById('laccellid').value;
        var bts = document.getElementById('bts').value;
		
		
		var popup = L.popup();


		
		//--------- Generating title for body ---------
		function removeEmpty(obj) {
		  Object.keys(obj).forEach(function(key) {
			(obj[key] && typeof obj[key] === 'object') && removeEmpty(obj[key]) ||
			(obj[key] === undefined || obj[key] === null || obj[key]=="") && delete obj[key]
		  });
		  return obj;
		};




		seacrhObj = [{"bts":bts,"thana":thana,"lac":lac,"operator":operator,"laccellid":laccellid}];
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


 
		// console.log(data);
			
		//------------Adding logs to BD------------
		// var source_url = "123";
		$.ajax({
			type: "POST",  
			url: "<?php echo site_url('RequestLogs/storeLogs');?>",
			data: {"bts":bts,"thana":thana,"lac":lac,"operator":operator,"laccellid":laccellid},
			dataType: 'json', 
			success: function(data){
			}     
		});	
		//------------Adding logs to BD------------
		

		// $('#mgs').html(JSON.stringify(html1));
		$.ajax({
			type: "POST",  
			url: "<?php echo site_url('PlottedCellsite/plotCellsite');?>",
			data: {"bts":bts,"thana":thana,"lac":lac,"operator":operator,"laccellid":laccellid},
			dataType: 'json', 
			success: function(data){
				myData = JSON.stringify(data);
				json = JSON.parse(myData);
				//console.log(myData);
				var markerlist = new Array();
                for(var i=0;i<json.length;i++)
                {
                    // console.log(json[i]);
                    //console.log(json[i].longitude);
					
					//$("#Modal").modal({show:false});
					var myIcon = L.divIcon({className: 'my-div-icon',
						  html:'<div  style="font-size: 5px;" align="center"><img width="35" height="35" src="<? echo site_url('assets/images/newbtsicon.png');?>" style=" margin-top: -15px; margin-left: -25px; " class="icon-enviroment anticon location" type="enviroment"><p>'+json[i].site_name+'</p></div>',iconSize: null});
						  
                    marker = L.marker([json[i].latitude, json[i].longitude], {icon: myIcon}).addTo(map);

                    if(json[i].operator == 'bl')
                    {
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
					
                    // console.log(color);
                    show = L.semiCircle([json[i].latitude, json[i].longitude], {
                        radius: json[i].cell_beamrange,
                        color: '',
                        fillColor: color,
						

						startAngle: parseFloat(json[i].antenna_direction),
						stopAngle: parseFloat(json[i].antenna_direction) + 50
                    }).addTo(map).on('click',mypopup).bindPopup("<div>BTS Name : " + json[i].site_name + "	<br/>Cell_name : " + json[i].cell_name + "	<br/>Cell ID : " + json[i].cell_id + "<br/>Longitude : " + json[i].longitude + "<br/>antenna_direction : " + json[i].antenna_direction + "	<br/></div>",{maxWidth: "300"});
					
					
					//console.log('--------------------------------');
					//console.log(json[i].antenna_direction - 5);
					//console.log('----------------+++----------------');
					//console.log(json[i].antenna_direction + Number('5'));
					
										
                    markerlist.push(show.getLatLng());

                    // console.log(show);
					

				}
					map.fitBounds(L.latLngBounds(markerlist),{maxZoom : 15});
					
					document.getElementById('thana').value="";
					document.getElementById('lac_id').value="";
					document.getElementById('operator').value="";
					document.getElementById('laccellid').value="";
					document.getElementById('bts').value="";			
					
			
				},
				error: function(data){
				   alert('Invalid input!');
				}
			});
			
			
			

			
		})



	function mypopup(e){
		// document.getElementById('thana').value;
		// console.log(json);
		
		var rows = json;

		$(document).ready(function(){
			var html = "<p>";
			for (var i = 0; i < rows.length; i++) {
				
				html+="id:" + rows[i].id + "<br/>";
				html+="Site Name:" + rows[i].site_name+ "<br/>"; 
				html+="lac_id:" + rows[i].lac_id + "<br/>";
				html+="cell_name:" + rows[i].cell_name+ "<br/>";
				html+="cell_id:" + rows[i].cell_id + "<br/>";
				html+="laccellid:" + rows[i].laccellid+ "<br/>"; 
				html+="antenna direction:" + rows[i].antenna_direction + "<br/>";
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
		// console.log(html);
		});
		
		// alert(e.target.popupView);
		  //$("#Modal").modal("show");			
	}

});
	
	


</script>

<!----- Storing logs data---->
<script>
</script>
<!----- Storing logs data---->

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

              <h3 class="box-title">SEARCH HERE</h3>
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
					<span for="subject">
						</span>
					<select id="operator" name="operator" class="form-control">
						<option value="" selected="">Please select operator:</option>
						<option value="BANGLALINK">BANGLALINK</option>
						<option value="ROBI">ROBI</option>
						<option value="GRAMEENPHONE">GRAMEENPHONE</option>
						<option value="AIRTEL">AIRTEL</option>
						<option value="TELETALK">TELETALK</option>
					</select>
				</div>
				<div class="form-group">
					<input type="text" name="laccellid" id="laccellid" class="form-control" placeholder="Please enter laccellid" disabled>
				</div>	
				<div class="form-group">
					<input type="text" id="bts" name="bts" class="form-control" placeholder="Please enter bts" disabled>
				</div>
				<div class="form-group">
					<input type="text" name="lac" id="lac_id" class="form-control" placeholder="Please enter lac id" disabled>
				</div>
				
				<div class="form-group">
					<input type="tel" name="thana" id="thana" class="form-control" placeholder="Please enter thana" disabled>
				</div>
				
            </div>
            <div class="box-footer clearfix">
				<button type="button" class="pull-right btn btn-default" id="mySubmit">
					Search<i class="fa fa-arrow-circle-right"></i>
				</button>
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
  

