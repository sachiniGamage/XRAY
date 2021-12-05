<?php
  session_start();
  require '../../config/config.php';


  if (isset($_POST['submit'])){
    if(!empty($_POST['doc_fname']) && !empty($_POST['doc_lname']) && !empty($_POST['doc_post']) && !empty($_POST['doc_phone']) && !empty($_POST['doc_email'])){

        $doc_fname = $_POST['doc_fname'];
        $doc_lname = $_POST['doc_lname'];
        $doc_post = $_POST['doc_post'];
        $doc_phone = $_POST['doc_phone'];
        $doc_email = $_POST['doc_email'];

    $query= "insert into doctor (doc_fname,doc_lname,doc_post,doc_phone,doc_email) values('$doc_fname','$doc_lname','$doc_post','$doc_phone','$doc_email')";
    $run= mysqli_query($con,$query) or die(mysqli_error());
    if($run){

          if ($run) {
                header("Location:../../admin_regDoc.php?update=success");
            } else {
                header("Location:../../admin_regDoc.php?update=fail");
            }

    }
  }
}
?>