<?php
$majors = file_get_contents('http://filter.worthafrica.org/site/publicdata?getmajors=true'); 
$industries = file_get_contents('http://filter.worthafrica.org/site/publicdata?getindustries=true');
$countries = file_get_contents('http://filter.worthafrica.org/site/publicdata?getcountries=true');
?>
<select class="" name="industry_id" id="industry_id">
	<?php echo $majors; ?>
</select>
<select class="" name="major_id" id="major_id">
	<?php echo $industries; ?>
</select>
<select class="" name="countryid" id="countryid" onchange="GetLocations();">
	<?php echo $countries; ?>
</select>
<select class="" name="locationid" id="locationid">
	<?php //echo $industries; ?>
</select>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script type="text/javascript">
function GetLocations(){
    var link = 'http://filter.worthafrica.org/site/publicdata';
    var countryid = document.getElementById('countryid').value;
    jQuery.ajax({
        url:link,
        type:'POST',
        data:{
            'getlocations':countryid 
        },
        cache:false,
        success:function(data){
            $('#locationid').html(data);
        },
        error:function(){
        }
    });
}
</script>