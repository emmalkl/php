<?php
  if(isset($_POST['sub'])){
    $sfile=$_FILES['sfile'];
    


    //一个文件
    $arr=explode('.',$sfile['name']);
     $index=count($arr)-1;
     $hou=$arr[$index];

     $newarr=array('txt','exe','pdf');
     for($i=0;$i<count($newarr);$i++){
        if($newarr[$i]==$hou){
            $flag=false;
        }
     }
     if($flag==flase){
        echo "<script>alert('后缀名非法')</script>"; 
     }else{
     $name=time();
     $dest='./uploads/'.$name.'.'.$hou;
    //  echo $dest;
     $a=move_uploaded_file($sfile['tmp_name'],$dest);
     if($a){
         echo "<script>alert('success')</script>";
     }else{
        echo "<script>alert('unsuccess')</script>";
     }
    }
     
    //  echo $hou;

     
     
     
     /*echo"<pre>";
     var_dump($sfile);
     echo"</pre>";*/

     
//一个文件方法结束


  } 

  //$_POST $_GET  $_SERVER  $_ENV $_FILES  $_COOKIE $_SESSION $_REQUEST
?>

<meta charset="utf-8">
<form action="upload.php" method="post">
   上传文件：<input type="file" name="sfile">
   <input type="submit" name="sub" value="上传">
</form>