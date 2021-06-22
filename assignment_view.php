<?php
    $currDir=dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
   ?>
<!DOCTYPE html>
    <html>
    <input type="file" name="assignment" id="assignment" >

</html>
<?php
    echo $x->HTML;
	// hook: courses_footer
	$footerCode='';
	if(function_exists('courses_footer')){
		$args=array();
		$footerCode=courses_footer($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$footerCode){
		include_once("$currDir/footer.php"); 
	}else{
		ob_start(); include_once("$currDir/footer.php"); $dFooter=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%FOOTER%%>', $dFooter, $footerCode);
	}
?>