
</div>
</div>
</div>
        </section><!-- /.content-wrapper -->
        <footer class="main-footer text-center">
            <div class="pull-right hidden-xs">
               
            </div>
            <strong>Copyright &copy; 2018 <a href="#">RAB</a>.</strong> All rights reserved. <br/>
			<p style="font-size:8px;">
				Powered by Rialto
			</p>
        </footer>
    </div><!-- ./wrapper -->
    
    
    
    
    <script>
  $('#laccellid').on('click',function () {
		var laccellid = document.getElementById('laccellid').value;
		console.log(laccellid);
        $('#laccellid').typeahead({
			minLength: 1,
            source: function (query, result) {
				
				//console.log(query);
                $.ajax({
                    url: "laccellidajax.php",
					data: 'query=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
						result($.map(data, function (item) {
							return item;
                        }));
                    }
                });
            }
        });
    });
	
	
	
	 $('#bts').on('click',function () {
        $('#bts').typeahead({
			minLength: 1,
            source: function (query, result) {
				
				//console.log(query);
                $.ajax({
                    url: "btsajax.php",
					data: 'query=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
						result($.map(data, function (item) {
							return item;
                        }));
                    }
                });
            }
        });
    });
	
	
	 $('#lac_id').on('click',function () {
        $('#lac_id').typeahead({
			minLength: 1,
            source: function (query, result) {
				
				//console.log(query);
                $.ajax({
                    url: "lacajax.php",
					data: 'query=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
						result($.map(data, function (item) {
							return item;
                        }));
                    }
                });
            }
        });
    });
	
	
	 $('#thana').on('click',function () {
        $('#thana').typeahead({
			minLength: 1,
            source: function (query, result) {
				
				//console.log(query);
                $.ajax({
                    url: "thanaajax.php",
					data: 'query=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
						result($.map(data, function (item) {
							return item;
                        }));
                    }
                });
            }
        });
    });
</script>
    
    
    <!-- jQuery 2.1.4 -->

  
    
    
    
    
    
    
		<script src="<?= base_url('assets/js/app.min.js');?>"></script>
		<script src="<?= base_url('assets/js/demo.js');?>"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

		<script src="<?php echo base_url('assets/js/typeahead.js')?>"></script>
		
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
	</body>
</html>
                        
                        
                        
                        
                        