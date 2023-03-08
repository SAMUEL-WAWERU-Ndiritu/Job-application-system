if(isset($_POST['gender'])){
        $gender_filter = implode("','",$_POST['gender']);
        $query .="
        AND gender IN('".$gender_filter."')
        ";
    }
    if(isset($_POST['date_of_birth'])){
        $date_of_birth_filter = implode("','",$_POST['date_of_birth']);
        $query .="
        AND date_of_birth IN('".$date_of_birth_filter."')
        ";
    }
    if(isset($_POST['physical_imparement'])){
        $physical_imparement_filter = implode("','",$_POST['physical_imparement']);
        $query .="
        AND physical_imparement IN('".$physical_imparement_filter."')
        ";
    }
    if(isset($_POST['vacancy'])){
        $vacancy_filter = implode("','",$_POST['vacancy']);
        $query .="
        AND vacancy IN('".$vacancy_filter."')
        ";
    }

    if(isset($_POST['PHD_qualification'])){
        $PHD_qualification_filter = implode("','",$_POST['PHD_qualification']);
        $query .="
        AND PHD_qualification  IN('".$PHD_qualification_filter."')
        ";
    }

    if(isset($_POST['Masters_qualification'])){
        $Masters_qualification_filter = implode("','",$_POST['Masters_qualification']);
        $query .="
        AND Masters_qualification  IN('".$Masters_qualification_filter."')
        ";
    }

    if(isset($_POST['Degree_1_qualification'])){
        $Degree_1_qualification_filter = implode("','",$_POST['Degree_1_qualification']);
        $query .="
        AND Degree_1_qualification  IN('".$Degree_1_qualification_filter."')
        ";
    }
    if(isset($_POST['Diploma_1_qualification'])){
        $Diploma_1_qualification_filter = implode("','",$_POST['Diploma_1_qualification']);
        $query .="
        AND Diploma_1_qualification  IN('".$Diploma_1_qualification_filter."')
        ";
    }

    if(isset($_POST['Diploma_2_qualification'])){
        $Diploma_2_qualification_filter = implode("','",$_POST['Diploma_2_qualification']);
        $query .="
        AND Diploma_2_qualification  IN('".$Diploma_2_qualification_filter."')
        ";
    }

    if(isset($_POST['Diploma_3_qualification'])){
        $Diploma_3_qualification_filter = implode("','",$_POST['Diploma_3_qualification']);
        $query .="
        AND Diploma_3_qualification  IN('".$Diploma_3_qualification_filter."')
        ";
    }
    if(isset($_POST['Diploma_4_qualification'])){
        $Diploma_4_qualification_filter = implode("','",$_POST['Diploma_4_qualification']);
        $query .="
        AND Diploma_4_qualification  IN('".$Diploma_4_qualification_filter."')
        ";
    }

    if(isset($_POST['certificate_1_qualification'])){
        $certificate_1_qualification_filter = implode("','",$_POST['certificate_1_qualification']);
        $query .="
        AND certificate_1_qualification  IN('".$certificate_1_qualification."')
        ";
    }

    if(isset($_POST['certificate_2_qualification'])){
        $certificate_2_qualification_filter = implode("','",$_POST['certificate_2_qualification']);
        $query .="
        AND certificate_2_qualification  IN('".$certificate_2_qualification."')
        ";
    }

    if(isset($_POST['certificate_3_qualification'])){
        $certificate_3_qualification_filter = implode("','",$_POST['certificate_3_qualification']);
        $query .="
        AND certificate_3_qualification  IN('".$certificate_3_qualification."')
        ";
    }

    if(isset($_POST['certificate_4_qualification'])){
        $certificate_4_qualification_filter = implode("','",$_POST['certificate_4_qualification']);
        $query .="
        AND certificate_4_qualification  IN('".$certificate_4_qualification."')
        ";
    }

    if(isset($_POST['secondary_qualification'])){
        $secondary_qualification_filter = implode("','",$_POST['secondary_qualification']);
        $query .="
        AND secondary_qualification  IN('".$secondary_qualification ."')
        ";
    }