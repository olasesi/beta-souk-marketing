if (!isset($errors)){$errors = array();}
    if ($_SERVER['REQUEST_METHOD'] == 'POST' AND isset($_POST['upload'])){
       
        

        if (preg_match ('/^[a-zA-Z0-9]{3,255}$/i', trim($_POST['webname']))) {		
            $webname = mysqli_real_escape_string ($connect, trim($_POST['webname']));
        } else {
            $errors['webname'] = 'Please enter proposed website name.';
        } 
         
     
        if (preg_match ('/^(0)[0-9]{10}$/i', trim($_POST['phone1']))) {		
            $phone1 = mysqli_real_escape_string ($connect, trim($_POST['phone1']));
        } else {
            $errors['phone1'] = 'Please enter phone number 1.';
        } 
    
        if (preg_match ('/^(0)[0-9]{10}$/i', trim($_POST['phone2']) OR empty($_POST['phone2']))) {		
            $phone2 = mysqli_real_escape_string ($connect, trim($_POST['phone2']));
        } else {
            $errors['phone2'] = 'Please enter phone number 2.';
        } 


        if(filter_var($_POST['email1'],FILTER_VALIDATE_EMAIL)){
            $email1 = mysqli_real_escape_string($connect,$_POST['email1']);
        }else{
            $errors['email1'] = "Enter a valid email address";
        }
        

        if(filter_var($_POST['email2'],FILTER_VALIDATE_EMAIL) OR empty($_POST['email2'])){
            $email2 = mysqli_real_escape_string($connect,$_POST['email2']);
        }else{
            $errors['email2'] = "Enter a valid email address";
        }

        if(filter_var($_POST['url'],FILTER_VALIDATE_URL) OR empty($_POST['url'])){
            $url = mysqli_real_escape_string($connect, $_POST['url']);
        }else{
            $errors['url'] = "Enter a valid facebook link";
        }
      
        if(filter_var($_POST['url_twitter'],FILTER_VALIDATE_URL) OR empty($_POST['url_twitter'])){
            $url = mysqli_real_escape_string($connect, $_POST['url_twitter']);
        }else{
            $errors['url_twitter'] = "Enter a valid twitter link";
        }
      
        if(filter_var($_POST['url_instagram'],FILTER_VALIDATE_URL) OR empty($_POST['url_instagram'])){
            $url = mysqli_real_escape_string($connect, $_POST['url_instagram']);
        }else{
            $errors['url_instagram'] = "Enter a valid instagram link";
        }

        if(filter_var($_POST['url_whatsapp'],FILTER_VALIDATE_URL) OR empty($_POST['url_whatsapp'])){
            $url = mysqli_real_escape_string($connect, $_POST['url_whatsapp']);
        }else{
            $errors['url_whatsapp'] = "Enter a valid whatsapp link";
        }

     
        if (preg_match ('/^[a-zA-Z]{3,20}$/i', trim($_POST['color1'] OR empty($_POST['color1'])))) {		
            $color1 = mysqli_real_escape_string ($connect, trim($_POST['color1']));
        } else {
            $errors['color1'] = 'Please colors in your logo.';
        } 
         
     
        if (preg_match ('/^[a-zA-Z]{3,20}$/i', trim($_POST['color2']))) {		
            $color2 = mysqli_real_escape_string ($connect, trim($_POST['color2']));
        } else {
            $errors['color2'] = 'Please colors in your logo.';
        } 
         
     
        if (preg_match ('/^[a-zA-Z]{3,20}$/i', trim($_POST['color3']))) {		
            $color3 = mysqli_real_escape_string ($connect, trim($_POST['color3']));
        } else {
            $errors['color3'] = 'Please colors in your logo.';
        } 
         
        if (preg_match ('/^.{3,255}$/i', trim($_POST['address1']))) {		
            $address1 = mysqli_real_escape_string ($connect, trim($_POST['address1']));
        } else {
            $errors['address1'] = 'Please enter address of your business.';
        } 
         
        if (preg_match ('/^.{3,255}$/i', trim($_POST['address2']))) {		
            $address2 = mysqli_real_escape_string ($connect, trim($_POST['address2']));
        } else {
            $errors['address2'] = 'Please enter address of your business.';
        } 
     
      if (preg_match ('/^.{3,1000}+$/i', trim($_POST['about']) OR empty($_POST['about']))) {		
            $about = mysqli_real_escape_string ($connect, trim($_POST['about']));
            } else {
            $errors['about'] = 'Please enter a long information about your business';
            }
            
          
        
       
        if (is_uploaded_file($_FILES['img']['tmp_name']) AND $_FILES['img']['error'] == UPLOAD_ERR_OK){ 
            
                if($_FILES['img']['size'] > 2097152){ 		//conditions for the file size 2MB
                    $errors['editfile_size']="File size is too big. Max file size 2MB";
                }
            
                $editallowed_extensions = array('jpeg', '.png', '.jpg', '.JPG', 'JPEG', '.PNG');		
                $editallowed_mime = array('image/jpeg', 'image/png', 'image/pjpeg', 'image/JPG', 'image/X-PNG', 'image/PNG', 'image/x-png');
                $editimage_info = getimagesize($_FILES['img']['tmp_name']);
                $ext = substr($_FILES['img']['name'], -4);
                
                
                
                
                if (!in_array($_FILES['img']['type'], $editallowed_mime) || !in_array($editimage_info['mime'], $editallowed_mime) || !in_array($ext, $editallowed_extensions)){
                    $errors['wrong_upload'] = "Please choose correct file type. JPG or PNG";
                    
                }
                
            }else{
            $errors['upload_image'] = 'Please upload photo';	
            
            }
       
    
    
        //now to edit the product	
        if (empty($errors)){
    
          
            $new_name= (string) sha1($_FILES['img']['name'] . uniqid('',true));
                $new_name .= ((substr($ext, 0, 1) != '.') ? ".{$ext}" : $ext);
                $dest = "../storage/websites logos/".$new_name;
                
                if (move_uploaded_file($_FILES['img']['tmp_name'], $dest)) {
                
                $_SESSION['images']['new_name'] = $new_name;
                $_SESSION['images']['file_name'] = $_FILES['img']['name'];
                
    //       $query_term_session = mysqli_query($connect, "SELECT choose_term, school_session FROM term_start_end ORDER BY term_start_end_id DESC LIMIT 1") or die(db_conn_error);
    // while($loop_term_session=mysqli_fetch_array($query_term_session)){
    //   $current_term = $loop_term_session['choose_term'];
    //   $current_session_term = $loop_term_session['school_session'];
     
    // }
    
    // $query_term_start_end = mysqli_query($connect, "SELECT choose_term, school_session FROM term_start_end ORDER BY term_start_end_id DESC LIMIT 1") or die(db_conn_error);
      
        // while($whiling_term_start_end = mysqli_fetch_array($query_term_start_end)){
    
        //   $term = $whiling_term_start_end['choose_term'];
        //   $session = $whiling_term_start_end['school_session'];
        // }
    
    
    
    mysqli_query($connect, "UPDATE primary_school_students SET pri_active='1', pri_admit = '1', pri_school_term = '".$current_term."' , pri_year = '".$current_session_term."', pri_firstname = '".$firstname."', pri_surname = '".$surname."', pri_age = '".$age."', pri_sex = '".$gender."', pri_class_id = '".$pri_class."', pri_photo = '".$new_name."', pri_address= '".$address."' WHERE primary_id = '".mysqli_real_escape_string ($connect, $_GET['id'])."' AND pri_admit = '0' AND pri_active_email = '1' AND pri_paid = '1'") or die(db_conn_error);
                if (mysqli_affected_rows($connect) == 1) {
                
                $_POST = array();		
                $_FILES = array();
                    
                unset($_FILES['img'], $_SESSION['images']);
                header('Location:'.GEN_WEBSITE.'/admin/search-paid.php?confirm='.$firstname);
                exit();
               
                
      }
    
    } else {
                trigger_error('The file could not be moved.');
                $errors['not_moved'] = "The file could not be moved.";
                unlink ($_FILES['img']['tmp_name']);
                }	
    
    } 
    
    
     }
     
           
