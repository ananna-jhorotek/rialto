<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add User Information
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= site_url('dashboards/dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content"> 
        <!-- Small boxes (Stat box) -->
        <div class="row">

            <!--####################################       start main content     ##########################################-->


            <div class="col-md-12">    
                <div class="box box-info">
                    <div class="box-header">
                        <!--        <h3 class="box-title">Floor Entry Form</h3>-->
                        <div align="right" style="margin-top:">
                            <a class="btn btn-primary btn-xs" title="" data-toggle="tooltip" href="" data-original-title="Back">
                                <i class="fa fa-reply"></i>
                            </a> 
                        </div>
                    </div>      
                    <div id="tabs-1">
                        <form action="form.php" target="submitFrame" style="border: none;">
                            <dl>
                                <dt>Multiselect with local content :</dt>
                                <dd>
                                    <select id="countries" class="multiselect" multiple="multiple" name="countries[]">
                                        <option value="AFG">Afghanistan</option>
                                        <option value="ALB">Albania</option>
                                        <option value="DZA">Algeria</option>

                                        <option value="AND">Andorra</option>
                                        <option value="ARG">Argentina</option>
                                        <option value="ARM">Armenia</option>
                                        <option value="ABW">Aruba</option>
                                        <option value="AUS">Australia</option>
                                        <option value="AUT" selected="selected">Austria</option>

                                        <option value="AZE">Azerbaijan</option>
                                        <option value="BGD">Bangladesh</option>
                                        <option value="BLR">Belarus</option>
                                        <option value="BEL">Belgium</option>
                                        <option value="BIH">Bosnia and Herzegovina</option>
                                        <option value="BRA">Brazil</option>
                                        <option value="BRN">Brunei</option>
                                        <option value="BGR">Bulgaria</option>
                                        <option value="CAN">Canada</option>

                                        <option value="CHN">China</option>
                                        <option value="COL">Colombia</option>
                                        <option value="HRV">Croatia</option>
                                        <option value="CYP">Cyprus</option>
                                        <option value="CZE">Czech Republic</option>
                                        <option value="DNK">Denmark</option>
                                        <option value="EGY">Egypt</option>
                                        <option value="EST">Estonia</option>
                                        <option value="FIN">Finland</option>

                                        <option value="FRA">France</option>
                                        <option value="GEO">Georgia</option>
                                        <option value="DEU" selected="selected">Germany</option>
                                        <option value="GRC">Greece</option>
                                        <option value="HKG">Hong Kong</option>
                                        <option value="HUN">Hungary</option>
                                        <option value="ISL">Iceland</option>
                                        <option value="IND">India</option>
                                        <option value="IDN">Indonesia</option>

                                        <option value="IRN">Iran</option>
                                        <option value="IRL">Ireland</option>
                                        <option value="ISR">Israel</option>
                                        <option value="ITA">Italy</option>
                                        <option value="JPN">Japan</option>
                                        <option value="JOR">Jordan</option>
                                        <option value="KAZ">Kazakhstan</option>
                                        <option value="KWT">Kuwait</option>
                                        <option value="KGZ">Kyrgyzstan</option>

                                        <option value="LVA">Latvia</option>
                                        <option value="LBN">Lebanon</option>
                                        <option value="LIE">Liechtenstein</option>
                                        <option value="LTU">Lithuania</option>
                                        <option value="LUX">Luxembourg</option>
                                        <option value="MAC">Macau</option>
                                        <option value="MKD">Macedonia</option>
                                        <option value="MYS">Malaysia</option>
                                        <option value="MLT">Malta</option>

                                        <option value="MEX">Mexico</option>
                                        <option value="MDA">Moldova</option>
                                        <option value="MNG">Mongolia</option>
                                        <option value="NLD" selected="selected">Netherlands</option>
                                        <option value="NZL">New Zealand</option>
                                        <option value="NGA">Nigeria</option>
                                        <option value="NOR">Norway</option>
                                        <option value="PER">Peru</option>
                                        <option value="PHL">Philippines</option>

                                        <option value="POL">Poland</option>
                                        <option value="PRT">Portugal</option>
                                        <option value="QAT">Qatar</option>
                                        <option value="ROU">Romania</option>
                                        <option value="RUS">Russia</option>
                                        <option value="SMR">San Marino</option>
                                        <option value="SAU">Saudi Arabia</option>
                                        <option value="CSG">Serbia and Montenegro</option>
                                        <option value="SGP">Singapore</option>

                                        <option value="SVK">Slovakia</option>
                                        <option value="SVN">Slovenia</option>
                                        <option value="ZAF">South Africa</option>
                                        <option value="KOR">South Korea</option>
                                        <option value="ESP">Spain</option>
                                        <option value="LKA">Sri Lanka</option>
                                        <option value="SWE">Sweden</option>
                                        <option value="CHE">Switzerland</option>
                                        <option value="SYR">Syria</option>

                                        <option value="TWN">Taiwan</option>
                                        <option value="TJK">Tajikistan</option>
                                        <option value="THA">Thailand</option>
                                        <option value="TUR">Turkey</option>
                                        <option value="TKM">Turkmenistan</option>
                                        <option value="UKR">Ukraine</option>
                                        <option value="ARE">United Arab Emirates</option>
                                        <option value="GBR">United Kingdom</option>
                                        <option value="USA" selected="selected">United States</option>

                                        <option value="UZB">Uzbekistan</option>
                                        <option value="VAT">Vatican City</option>
                                        <option value="VNM">Vietnam</option>
                                    </select>
                                </dd>
                                <dt>
                                    Test submit <span style="font-size: smaller; font-style: italic; color: #777;">(will not reload the page)</span>
                                </dt>
                                <dd>
                                    <input type="submit" id="localSubmit" name="localSubmit" value="Send selection" />
                                </dd>
                            </dl>
                        </form>

                    </div>

                </div>
            </div>
        </div>
</div>




<!--<script type="text/javascript" src="<?= base_url('assets/multiselect/jquery-1.4.2.min.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/multiselect/jquery-ui-1.8.custom.min.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/multiselect/plugins/localisation/jquery.localisation-min.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/multiselect/plugins/tmpl/jquery.tmpl.1.1.1.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/multiselect/plugins/blockUI/jquery.blockUI.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/multiselect/ui.multiselect.js'); ?>"></script>
<script type="text/javascript">
    $(function () {
        $.localise('ui.multiselect', {/*language: 'es',/* */ path: '<?= base_url('assets/multiselect/locale/ui.multiselect-en.js'); ?>'});

        // local
        $("#countries").multiselect();
        // remote
        $("#languages").multiselect({
            remoteUrl: "ajax.php"
        });
    });
</script>
<script type="text/javascript" src="<?= base_url('assets/multiselect/page.js');?>"></script>
  <script src="<?= base_url('assets/js/jquery.multi_select.js'); ?>"></script>
  <script type="text/javascript">
  $('#pre-selected-options').multiSelect();
  </script>
   <script type="text/javascript">
  $('#selected-options').multiSelect();
  </script>-->
