<div id="jobdetails"></div>
<script type="text/javascript">
function PostApplication(){
    var link = 'http://filter.worthafrica.org/site/companydata';
    var company_name = document.getElementById('company_name').value;
    var wajobid = document.getElementById('wajobid').value;
    var email_address = document.getElementById('email_address').value;
    var contact_person = document.getElementById('contact_person').value;
    var telephone = document.getElementById('telephone').value;
    var job_title = document.getElementById('job_title').value;
    var industry_id = document.getElementById('industry_id').value;
    var location_id = document.getElementById('location_id').value;
    var description = document.getElementById('description').value;
    var responsibilities = document.getElementById('responsibilities').value;
    var requirements = document.getElementById('requirements').value;
    var internship_type = document.getElementById('internship_type').value;
    var country_id = document.getElementById('country_id').value;
    var deadline = document.getElementById('deadline').value;
    var department_id = document.getElementById('department_id').value;
    var major_id = document.getElementById('major_id').value;
    jQuery.ajax({
        url:link,
        type:'POST',
        data:{
            'wajobsdata':true,
            'wajobid':wajobid, 
            'company_name':company_name, 
            'email_address':email_address,
            'contact_person':contact_person,
            'telephone':telephone,
            'job_title':job_title,
            'industry_id':industry_id,
            'location_id':location_id,
            'description':description,
            'responsibilities':responsibilities,
            'requirements':requirements,
            'internship_type':internship_type,
            'country_id':country_id,
            'deadline':deadline,
            'department_id':department_id,
            'major_id':major_id
        },
        cache:false,
        success:function(data){
            $('#jobdetails').html('Added successfully, please check your email address for details.');
        },
        error:function(){
        }
    });
}
</script>