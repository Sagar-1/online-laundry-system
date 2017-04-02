<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
</head>

<body>

<div class="container">
<style type="text/css">
body {
height:100%;width:100%;
background-image:url(df.jpeg);
background-repeat:no-repeat; 
   background-size:cover;
background-color: rgba(0,0,0.5)
margin:0 auto;
margin-top:30px;
 }
p{margin-left:50px;margin-right:50px;margin-top:100px;font-size:40pt;}
</style>

    <form action="feature.html" method="post" class="form-horizontal">


        
<fieldset>
           <label img src="k.png"> <legend>LaundryBubbles</legend></label>
            <div class="control-group">
                <label class="control-label">PICKUP_DATE_AND_TIME</label>
                <div class="controls input-append date form_datetime"  data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                    <input type="text" name="PICKUP_DATE_AND_TIME" size="16" type="text" value="" readonly>
                    <span class="add-on"><i class="icon-remove"></i></span>
					<span class="add-on"><i class="icon-th"></i></span>
                </div>
				<input type="hidden" id="dtp_input1" value="" /><br/>
            </div>
			<div class="control-group">
                <label class="control-label">PICKUP_DATE</label>
                <div class="controls input-append date form_date"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input type="text" name="PICKUP_DATE" size="16" type="text" value="" readonly>
                    <span class="add-on"><i class="icon-remove"></i></span>
					<span class="add-on"><i class="icon-th"></i></span>
                </div>
				<input type="hidden" id="dtp_input2" value="" /><br/>
            </div>
            
			<div class="control-group">
                <label class="control-label">PICKUP_TIME</label>
                <div class="controls input-append date form_time"  data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                    <input type="text" name="PICKUP_TIME" size="16" type="text" value="" readonly>
                    <span class="add-on"><i class="icon-remove"></i></span>
					<span class="add-on"><i class="icon-th"></i></span>
                
              </div>
	       <div class="control-group">
                <label class="control-label">DELIVERY_DATE</label>
                <div class="controls input-append date form_date"  data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input type="text" name="DELIVERY_DATE"   size="16" value="" readonly>
                    <span class="add-on"><i class="icon-remove"></i></span>
					<span class="add-on"><i class="icon-th"></i></span>
                </div>

                 <div class="control-group">
                <label class="control-label">DELIVERY_TIME</label>
                <div class="controls input-append date form_time"  data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                    <input name="DELIVERY_TIME" size="16" type="text" value="" readonly>
                    <span class="add-on"><i class="icon-remove"></i></span>
					<span class="add-on"><i class="icon-th"></i></span>
                </div>
				<input type="hidden" id="dtp_input2" value="" /><br/>
            </div>
			
				<input type="hidden" id="dtp_input3" value="" /><br/>
            </div>
        </fieldset>
<input type="submit" name="submit" value="SUBMIT">
    </form>
</div>
<script type="text/javascript" src="./jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="../js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>
</body>
</html>
<?php
mysql_connect("localhost","root","");
mysql_select_db("cartracking");
if(isset($_POST['submit']))
{
echo "hello";
$pickupdatetime=$_POST['PICKUP_DATE_AND_TIME'];
$pickupdate=$_POST['PICKUP_DATE'];
$pickuptime=$_POST['PICKUP_TIME'];
$deliverydate=$_POST['DELIVERY_DATE'];
$deliverytime=$_POST['DELIVERY_TIME'];
$insert="insert into date(PICKUP_DATE_AND_TIME,PICKUP_DATE,PICKUP_TIME,DELIVERY_DATE,DELIVERY_TIME)values('$pickupdatetime','$pickupdate','$pickuptime','$deliverydate','$deliverytime')";

$run=mysql_query($insert);

if($run){

    echo("<br>Input data is succeed");

} else{

    echo("<br>Input data is fail");

}
}
?>

