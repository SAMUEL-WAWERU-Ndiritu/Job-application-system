function filter_data(){
        $('.filter_data').html('<div id="loading" style="" ></div>') ;
        var action= "fetch_data";
        var vacancy = get_filter('vacancy');
        var date_of_birth = get_filter('date_of_birth');
        var gender = get_filter('gender');
        $.ajax( 
            {
                url: "app/fetch_data.php",
                method:"POST",
                data:{action:action,vacancy:vacancy,date_of_birth:date_of_birth,gender:gender},
                 success:function(data){
                    $('.filter_data').html(data);
                }
            }
        ) 
     
    }


    
    if(isset($_POST["vacancy"])){
        $vacancy_filter = implode("','",$_POST["vacancy"]);
        $query .="
        AND vacancy IN('".$vacancy_filter."')
        ";
    }

    if(isset($_POST["date_of_birth"])){
        $date_of_birth_filter = implode("','",$_POST["date_of_birth"]);
        $query .="
        AND date_of_birth IN('".$date_of_birth_filter."')
        " ;
    }
    if(isset($_POST["gender"])){
        $gender_filter = implode("','",$_POST["gender"]);
        $query .="
        AND gender IN('".$gender_filter."')
        ";
    }