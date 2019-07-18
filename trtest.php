 /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

           }

           $connect->query("UPDATE `cmpatientsnewregistration`SET `VISITS` = (`VISITS`+1)  WHERE NTIHCNO ='".$fnam."'");

      if($seff=='YES'){
           $sql = "INSERT INTO hcg (NTIHCNO, DATECREATED, VISTBY, HCGSTATUS, HCGRESULTS, HCGPOSITIVE, CLIENTNAME, AGE, SEX, SCHOOLING, EMPLOYMENT, SERVICE_EPISODE)
                                          VALUES ('$fnam', NOW(), 
                                 '$urgtyn', 
                                 '$hs', 
                                 '$hr', 
                                 '$hp',  
                                 '$name',
                                 '$age',
                                 '$sex',
                                 '$sch',
                                 '$es',
                                 '$s_episode')";
           $connect->query($sql);
         }

         header('location:treatmentroom.php');
          // header("location: treatmentroom.php");


    }
    else {
      echo "something went wrong : ".$connect->error;
    }
}




         //insert data into the referral table
		 if($reft=='TURN ON'){
           $sql = "INSERT INTO referral (NTIHCNO, DATECREATED, VISTBY, REFTUNER, MEDICALREFERRAL, SERVICEREFERREDFOR, CLIENTNAME, AGE, SEX, SCHOOLING, MARITAL, EMPLOYMENT, SERVICE_EPISODE)
                                          VALUES ('$fnam', NOW(), 
                                 '$urgtyn', 
                                 '$reft', 
                                 '$medr', 
                                 '$svcr',  
                                 '$name',
                                 '$age',
                                 '$sex',
                                 '$sch',
								 '$ms',
                                 '$es',
                                 '$s_episode')";
           $connect->query($sql);
         } 
		  