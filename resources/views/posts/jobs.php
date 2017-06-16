<header class="cognitive-image">
    <div class="container">
        <article class="home-featured">
            <h1>Funded Internship Programs</h1>
            <p>We provide a wide variety of tools and services to enable every student, employer and educator to better understand and optimize internship opportunities, enabling businesses to identify the best job candidates and for students to develop the real-world skills they will need upon graduation.</p>
        </article>
    </div>  
</header>

<section class="home-blocks">
    <div class="container ">
        <div class="item-wrapper">
            <div class="row search-wrap">
                <div class="col-md-3">
                    <div class="search-sidebar">
                        <h3>Refine Search</h3>
                        <div class="search-form">
                            <form action="/search/posts" method="get">
                                <div class="row-fluid">
                                    <div class="control-group">
                                        <label class="control-label" for="Keywords">Keyword/Major</label>
                                        <div class="controls">
                                            <input class="form-control" id="Keywords" name="Keywords" placeholder="Marketing, Design, Information Technology, ..." type="text" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="control-group">
                                        <label class="control-label">Location</label>
                                        <div class="controls">
                                            <input class="form-control" id="Location" name="Location" placeholder="City, Town, County" type="text" value="" autocomplete="off" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="control-group">
                                        <label class="control-label" for="Company">Company</label>
                                        <div class="controls">
                                            <input class="form-control" id="Company" name="Company" placeholder="Safaricom, KCB" type="text" value="">
                                        </div>
                                    </div>
                                </div>
                                
                                <input type="hidden" name="Page" id="Page" value="1">
                                <div class="search-button-wrap">
                                    <button type="submit" class="btn btn-primary pull-right" onclick="event.preventDefault();SearchManenos();">Search</button>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 search-results-sec">
                    <div id="search-res">
                        <div class="res-toolbar">
                            <div class="results-display">Search Results - Add a query to search for more</div>
                        </div>
                        <div id="mchipuko"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
function SearchManenos(){
    var link = 'http://filter.worthafrica.org/site/jobdata/';
    var Keywords = document.getElementById('Keywords').value;
    var Location = document.getElementById('Location').value;
    var Company = document.getElementById('Company').value;
    var itemsdiv = $('#mchipuko'); 
    itemsdiv.html("Loading Data ... ");
    jQuery.ajax({
        url:link,
        type:'POST',
        data:{
            'getsearchjobs':true,'Keywords':Keywords ,
            'Location':Location ,'Company':Company 
        },
        cache:false,
        success:function(data){
            $('#mchipuko').html(data);
        },
        error:function(){
            $('#mchipuko').html('No Data Right Now, Please check later');
        }
    });
}

function GetList(){
    var link = 'http://filter.worthafrica.org/site/jobdata/';
    var itemsdiv = $('#mchipuko'); 
    itemsdiv.html("Loading Data ... ");
    jQuery.ajax({
        url:link,
        type:'POST',
        data:{'getsearchjobs':true},
        cache:false,
        success:function(data){
            $('#mchipuko').html(data);
        },
        error:function(){
            $('#mchipuko').html('No Data Right Now, Please check later');
        }
    });
}
GetList();

function OpenInternship(jobid){
    var link = 'http://filter.worthafrica.org/site/jobdata/';
    var projectdiv = $('#internship-'+jobid); 
    projectdiv.html("Loading Data ... ");
    projectdiv.addClass('internship-result-open').removeClass('internship-result-item');
    jQuery.ajax({
        url:link,
        type:'POST',
        data:{'getjobdetails':true,'jobid':jobid},
        cache:false,
        success:function(data){
            $('#internship-'+jobid).html(data);
            // $('#internship-'+jobid).attr("onclick","CloseInternship("+jobid+");");
            $('#internship-'+jobid).attr("onclick","");
        },
        error:function(){
            alert('error');
        }
    });
}

function CloseInternship(jobid){
    var link = 'http://filter.worthafrica.org/site/jobdata/';
    var projectdiv = $('#internship-'+jobid); 
    projectdiv.html("Loading Data ... ");
    projectdiv.addClass('internship-result-item').removeClass('internship-result-open');
    jQuery.ajax({
        url:link,
        type:'POST',
        data:{'getjobsummary':true,'jobid':jobid},
        cache:false,
        success:function(data){
            $('#internship-'+jobid).html(data);
            $('#internship-'+jobid).attr("onclick","OpenInternship("+jobid+");");
        },
        error:function(){
            alert('error');
        }
    });
}
</script>
<style type="text/css">
.radio-list{
    padding: 0px 20px;
}
.search-sidebar h3 {
    line-height: 1.1em;
    border-bottom: solid 5px #ffbe02;
    font-size: 18px;
    margin-top: 15px;
}
.job-type {
    display: inline-block;
    /*margin: 6px 15px 3px 0;*/
    /*font-family: "Aspira";*/
    font-size: 12px;
    line-height: 20px;
    font-weight: 400;
    text-transform: uppercase;
}
.internship-result-item .internship-dates {
    /*display: none;*/
    font-size: 12.025px;
    line-height: 12.025px;
    margin: 0 0 4px;
    color: #3fa448;
}
.internship-result-item h3 {
    font-size: 16.25px;
    line-height: 16.25px;
    margin: 0 0 4px;
    padding: 0;
}
.internship-result-item .company-info {
    font-size: 12.025px;
    line-height: 12.025px;
    margin: 0 0 4px;
    color: #3fa448;
}
.internship-result-item .days-ago {
    font-style: italic;
    color: #888;
}
.internship-result-item .description {
    font-size: 11.7px;
    line-height: 14.3px;
    font-weight: normal!important;
    color: #333;
}
.search-results-sec{
    background: #fff;
    -moz-box-shadow: 0 0 3px rgba(0,0,0,.3);
    -webkit-box-shadow: 0 0 3px rgba(0,0,0,.3);
    box-shadow: 0 0 3px rgba(0,0,0,.3);
    padding: 0px;
}
.res-toolbar {
    background: #ffbe02;
    color: #fff;
    height: 36px;
    line-height: 36px;
}
.res-toolbar .results-display {
    float: left;
    padding: 0 10px;
}
.res-toolbar .results-sort {
    float: right;
    width: 250px;
}
#search-res{
    min-height: 500px;
}
.internship-result-item {
    border-bottom: solid 1px #ccc;
    position: relative;
}
.internship-result-item .internship-result-link-item {
    cursor: pointer;
    padding: 20px;
}
.search-sidebar .control-group{
    margin-bottom: 15px;
}
.internship-result-open .internship-dates {
    /*display: none;*/
    font-size: 12.025px;
    line-height: 12.025px;
    margin: 0 0 4px;
    color: #3fa448;
}
.internship-result-open h3 {
    font-size: 16.25px;
    line-height: 16.25px;
    margin: 0 0 4px;
    padding: 0;
}
.internship-result-open .company-info {
    font-size: 12.025px;
    line-height: 12.025px;
    margin: 0 0 4px;
    color: #3fa448;
}
.internship-result-open .days-ago {
    font-style: italic;
    color: #888;
}
.internship-result-open .description {
    font-size: 12.7px;
    line-height: 14.3px;
    font-weight: normal!important;
    color: #333;
}
.internship-result-open {
    border-bottom: solid 1px #ccc;
    position: relative;
}
.internship-result-open .internship-result-link-item {
    cursor: pointer;
    padding: 20px;
}

</style>