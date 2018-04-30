<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">    
                <div class="box box-info">
                    <div class="box-header">        
                    </div>  
					
                    <form action="<?php echo site_url('RequestProvider/updateReq') ?>" id="fileform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        <div class="box-body">                        					
                            <div class="row">
                                <div class="col-lg-6 col-xs-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Information:</h3>
                                        </div>
                                        <div class="panel-body">                   
                                            <div class="row">
                                                <div class="col-lg-12 col-xs-12">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h3 class="panel-title">Number Information:</h3>
                                                        </div>
                                                        <div class="panel-body">                   
                                                            <div class="form-group">
                                                                <div class="col-sm-4 col-md-4 col-lg-4">  
                                                                    <label>Target Number : </label>
                                                                    <input type="text" name=" name"  required="" value="<?= $search_datas['msisdn']; ?>" class="form-control" disabled>
                                                                </div>
                                                                <div class="col-sm-4 col-md-4 col-lg-4">     
                                                                    <label>Start Date :</label>
                                                                    <input type="text" name=" name"  required="" value="<?= $search_datas['date_start']; ?>" class="form-control" disabled>
                                                                </div>
                                                                <div class="col-sm-4 col-md-4 col-lg-4">     
                                                                    <label>End Date :</label>
                                                                    <input type="text" name=" name"  required="" value="<?= $search_datas['date_end']; ?>" class="form-control" disabled>
                                                                </div> 
                                                            </div>                               
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-xs-12">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h3 class="panel-title">Requested For:</h3>
                                                        </div>
                                                        <div class="panel-body">                   
                                                            <div class="form-group">

                                                                <div class="col-sm-3 col-md-3 col-lg-3">      
                                                                    <label>Name : </label>
                                                                    <input type="text" name=" name"  required="" value="<?= $search_datas['name']; ?>" class="form-control" disabled>
                                                                </div>
                                                                <div class="col-sm-3 col-md-3 col-lg-3">      
                                                                    <label>Rank :</label>
                                                                    <input type="text" name=" name"  required="" value="<?= $search_datas['designation']; ?>" class="form-control" disabled>
                                                                </div>
                                                                <div class="col-sm-3 col-md-3 col-lg-3">      
                                                                    <label>Unit :</label>
                                                                    <input type="text" name=" name"  required="" value="<?= $search_datas['appointment']; ?>" class="form-control" disabled>
                                                                </div> 
                                                                <div class="col-sm-3 col-md-3 col-lg-3">      
                                                                    <label>Battalion :</label>
                                                                    <input type="text" name=" name"  required="" value="<?= $search_datas['battalion']; ?>" class="form-control" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-xs-12">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h3 class="panel-title">Required Information:</h3>
                                                        </div>
                                                        <div class="panel-body">                   
                                                            <div class="form-group">
                                                                <?php
                                                               
                                                                foreach ($search_datas['requiredInfo'] as $key => $value) {
                                                                    if ($value == 'Y') {
                                                                        $printValue = str_replace(' ', '_', $key);
                                                                        echo '<div class="col-sm-4 col-md-4 col-lg-4"><input name="provided[' . $key . ']" type="checkbox" value="Yes"><input type="text" name=" name"  required="" value="' . strtoupper(str_replace('_', ' ', $key)) . '" class="form-control" disabled style="margin-bottom:5px;"></div>';
                                                                    }
                                                                }
                                                                unset($search_datas['requiredInfo']);
                                                                unset($search_datas['user_image']);
                                                                foreach ($search_datas as $key => $value) {
                                                                    echo '<input type="hidden" name="' . $key . '" value="' . $value . '">';
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>											
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xs-6 pull-right">

                                    <div class="panel panel-default">
                                        <input type="hidden" name="request_id" value="<?= $search_datas['request_id']; ?>" class="form-control">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Provide Information:</h3>
                                        </div>
                                        <div class="panel-body">
                                           
                                            <div class="form-group">  
                                                <div class="col-sm-2 col-md-2 col-lg-2"></div>
                                                    <div class="col-sm-6 col-md-6 col-lg-6">                    
                                                        <div class="form-group"> 
                                                            <label for="txtFloor"><span class="errorStar"></span> Document :</label>
                                                        </div>
                                                        <div class="form-group"> 
                                                            <input id="file-1" name="document" type="file"  multiple=true>
                                                        </div>
                                                    </div>                                                
                                            </div>
                                            <div class="form-group">  
                                                <div class="col-sm-2 col-md-2 col-lg-2"></div>
                                                    <div class="col-sm-6 col-md-6 col-lg-6">                    
                                                        <div class="form-group"> 
                                                            <label for="txtFloor"><span class="errorStar"></span> Image File :</label>
                                                        </div>
                                                        <div class="form-group"> 
                                                            <input id="file-2" name="imageFile" type="file"  multiple=true>
                                                        </div>
                                                    </div>                                                
                                            </div>
                                            <div class="form-group">  
                                                <div class="col-sm-2 col-md-2 col-lg-2"></div>
                                                    <div class="col-sm-6 col-md-6 col-lg-6">                    
                                                        <div class="form-group"> 
                                                            <label for="txtFloor"><span class="errorStar"></span> PDF :</label>
                                                        </div>
                                                        <div class="form-group"> 
                                                            <input id="file-3" name="pdfFile" type="file"  multiple=true>
                                                        </div>
                                                    </div>                                                
                                            </div>
                                            <div class="form-group">  
                                                <div class="col-sm-2 col-md-2 col-lg-2"></div>
                                                    <div class="col-sm-6 col-md-6 col-lg-6">                    
                                                        <div class="form-group"> 
                                                            <label for="txtFloor"><span class="errorStar"></span> Audio Clip :</label>
                                                        </div>
                                                        <div class="form-group"> 
                                                            <input id="file-4" name="audioFile" type="file"  multiple=true>
                                                        </div>
                                                    </div>                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-11">
                                                <input type="submit" value="Submit" name="submit" id="sub" class="btn btn-primary add-btn pull-right">
                                            </div>
                                            <div class="col-sm-1"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </form>
                </div>  
            </div>
		</div>
	</section>
</div>

 


<!--<script src="<?= base_url('assets/js/jQuery-2.1.4.min.js'); ?>"></script>    
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>-->

<script src="<?= base_url('assets/js/fileinput.js'); ?>" type="text/javascript"></script>

<script>
    $(document).ready(function () {     
//file upload start
 $("#file-1").fileinput({
		showUpload: false,
		showCaption: false,
		browseClass: "btn btn-primary btn-xs",
		fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
	});
    });
//file upload end
</script>

<script>
    $(document).ready(function () {     
//file upload start
 $("#file-2").fileinput({
		showUpload: false,
		showCaption: false,
		browseClass: "btn btn-primary btn-xs",
		fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
	});
    });
//file upload end
</script>

<script>
    $(document).ready(function () {     
//file upload start
 $("#file-3").fileinput({
		showUpload: false,
		showCaption: false,
		browseClass: "btn btn-primary btn-xs",
		fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
	});
    });
//file upload end
</script>

<script>
    $(document).ready(function () {     
//file upload start
 $("#file-4").fileinput({
		showUpload: false,
		showCaption: false,
		browseClass: "btn btn-primary btn-xs",
		fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
	});
    });
//file upload end
</script>

