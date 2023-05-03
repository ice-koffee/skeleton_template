<?php
//connect to the user account class
include("../classes/Statistics_class.php");


/**
 * This folder just passes the data to the class(model) functions
 * */
//sanitize data



function cleanText($data) 
{
  $data = trim($data);
  
  return $data;
}



//--INSERT--//

//--INSERT--//





//--SELECT--//



function select_statistics_ctr(){


$stats = new  Statistics_class();


$userStats = $stats->select_statistics_class();


 return $userStats;

  }



  function select_plastic_count_ctr(){

    $stats = new  Statistics_class();

    $plasticStats = $stats->select_plastic_count_class();

    return $plasticStats;

  }



  function select_metal_count_ctr(){

    $stats = new  Statistics_class();

    $metalStats = $stats->select_metal_count_class();

    return $metalStats;

  }

  function select_paper_count_ctr(){

    $stats = new  Statistics_class();

    $paperStats = $stats->select_paper_count_class();

    return $paperStats;

  }


  function select_others_count_ctr(){

    $stats = new  Statistics_class();

    $othersStats = $stats->select_others_count_class();

    return $othersStats;

  }



//--UPDATE--//

//--DELETE--//

?>