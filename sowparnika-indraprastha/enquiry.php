<?php
    https://ssl-ccp.godaddy.com/cert/details/gjxkldndw4fhscexmmhhgglknjk4rdyj
   $rand=substr(rand(),0,4);    
   $visit = $name = $email = $number = $comments = "";
   $success = '';

   if ($_SERVER["REQUEST_METHOD"] == "POST"){
     
        $message_body= '';
        $msg='';
        $from='_mainaccount@bangaloreproject.com';
        unset($_POST['submit']);
        

        $to = 'spazemark@gmail.com';
        $subject = 'SOWPARNIKA INDRAPRASTHA ~ Enquiry Form Submit';
        $project = 'SOWPARNIKA INDRAPRASTHA';
        $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";
        $headers = "From: $from\r\n" . "MIME-Version: 1.0\r\n" . "Content-Type: multipart/mixed;\r\n" . " boundary=\"{$mime_boundary}\"";

      
        $message_body.= "Name             :".stripslashes($_POST['name'])."\n\n";
        $message_body.="Enquired Project  :".stripslashes($project)."\n";       
        
        $message_body.=  "Purpose         :".stripslashes($_POST['visit'])."\n";
        $message_body.=  "Name             :".stripslashes($_POST['name'])."\n";
              
        $message_body.=  "Phone            :".stripslashes($_POST['number'])."\n";        
        $message_body.= "Email             :".stripslashes($_POST['email'])."\n";      
        $message_body.= "Comments     :".stripslashes($_POST['comments'])."\n";
      
    
          
      
      "Content-Transfer-Encoding: 7bit\n\n" . $message_body . "\n\n";
             $message_body.="--{$mime_boundary}--\n";
          $send = @mail($to, $subject, $message_body, $headers);
        if($send){
            $msg = '<script type="text/javascript">alert("Your message sent successfully!")</script>';
            $visit = $name = $email = $number = $comments = '';
            header("location:index.php?success=yes");
            }else{
            $msg = '<script type="text/javascript">alert("Sorry, there are server problem!")</script>';
        }
        $error = '';
    
    }


?>