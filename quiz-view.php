<!DOCTYPE html>
<html lang="en">

<head>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php 
                {
                    // $result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
                    echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
                    <tr><td><center><b>S.N.</b></center></td><td><center><b>Topic</b></center></td><td><center><b>Total question</b></center></td><td><center><b>Marks</center></b></td><td><center><b>Action</b></center></td></tr>';
                    $c=1;
                     while($row = mysqli_fetch_array($result)) {
                        $title = $row['title'];
                        $total = $row['total'];
                        $sahi = $row['sahi'];
                        $eid = $row['eid'];
                    $q12=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error98');
                    $rowcount=mysqli_num_rows($q12);	
                    if($rowcount == 0){
                        echo '<tr><td><center>'.$c++.'</center></td><td><center>'.$title.'</center></td><td><center>'.$total.'</center></td><td><center>'.$sahi*$total.'</center></td><td><center><b><a href="welcome.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'" class="btn sub1" style="color:black;margin:0px;background:#1de9b6"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Start</b></span></a></b></center></td></tr>';
                    }
                    else
                    {
                    echo '<tr style="color:#99cc32"><td><center>'.$c++.'</center></td><td><center>'.$title.'&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></center></td><td><center>'.$total.'</center></td><td><center>'.$sahi*$total.'</center></td><td><center><b><a href="update.php?q=quizre&step=25&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="color:black;margin:0px;background:red"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Restart</b></span></a></b></center></td></tr>';
                    }
                    
                    $c=0;
                    echo '</table></div></div>';
                }?>

</body>

