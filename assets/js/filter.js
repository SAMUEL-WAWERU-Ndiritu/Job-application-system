
var jq = $.noConflict();
jq(document).ready(function(){
    filter_data();
function filter_data(){
    jq('.filter_data').html('div id="loading" style=""></div>');
    var action= 'fetch_data';
    var gender= get_filter('gender');
    var date_of_birth= get_filter('date_of_birth');
    var physical_imparement= get_filter('physical_imparement');
    var vacancy = get_filter('vacancy');
    var PHD_qualification = get_filter('PHD_qualification');
    var Masters_qualification  = get_filter('Masters_qualification');
    var Degree_1_qualification= get_filter('Degree_1_qualification');
    var Diploma_1_qualification = get_filter('Diploma_1_qualification');
    var Diploma_2_qualification = get_filter('Diploma_2_qualification');
    var Diploma_3_qualification = get_filter('Diploma_3_qualification');
    var Diploma_4_qualification = get_filter('Diploma_4_qualification');
    var certificate_1_qualification= get_filter('certificate_1_qualification');
    var certificate_2_qualification= get_filter('certificate_2_qualification');
    var certificate_3_qualification= get_filter('certificate_3_qualification');
    var certificate_4_qualification= get_filter('certificate_4_qualification');
    var secondary_qualification = get_filter('secondary_qualification');
    jq.ajax({
        url: "fetch_data.php",
        method:"POST",
        data:{
            action:action,gender:gender,date_of_birth:date_of_birth,physical_imparement:physical_imparement,vacancy:vacancy,PHD_qualification:PHD_qualification,Masters_qualification:Masters_qualification,Degree_1_qualification:Degree_1_qualification,Diploma_1_qualification:Diploma_1_qualification,Diploma_2_qualification:Diploma_2_qualification,Diploma_3_qualification:Diploma_3_qualification,Diploma_4_qualification:Diploma_4_qualification,certificate_1_qualification:certificate_1_qualification,certificate_2_qualification:certificate_2_qualification,certificate_3_qualification:certificate_3_qualification,certificate_4_qualification:certificate_4_qualification,secondary_qualification:secondary_qualification
        }, 
        success:function(data){
            jq('.filter_data').html(data);
        }
    });
    
}
function get_filter(class_name){
    var filter = [];
    jq('.' +class_name+':checked').each(function(){
        filter.push($(this).val());
    });
    return filter;
}
jq('.common_selector').click(function()
{
    filter_data();
})
});
