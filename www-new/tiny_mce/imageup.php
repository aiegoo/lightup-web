<?php
$uploadUrl = 'http://biz.koce.co.kr/admin/tiny_mce/uploadimg'; // 기본 업로드 URL
$uploadPath = './uploadimg';        // 기본 업로드 폴더

if(isset($_FILES['iPic']['tmp_name']))
{
	$fileRealName = $_FILES['iPic']['name'];
	$ext = strtolower(substr($fileRealName, (strrpos($fileRealName, '.') + 1)));

	if ('jpg' != $ext && 'jpeg' != $ext && 'gif' != $ext && 'png' != $ext)
	{
?>

<script type="text/javascript">
alert('이미지 파일을 올려주세요.');
history.back(1);
</script>

<?php
		exit;
	}

	$fileSaveName = date('ymdHms') ."_" .$fileRealName;
	$fileFullPath = "{$uploadPath}/{$fileSaveName}";
	$fileFullUrl = "{$uploadUrl}/{$fileSaveName}";

	if(@move_uploaded_file($_FILES["iPic"]["tmp_name"], $fileFullPath))
	{
?>

<script type="text/javascript">
window.opener.tinyMCE.execCommand('mceInsertContent', false, '<img src="<?php echo $fileFullUrl?>">');
window.close();
</script>

<?php
	}

	// 여기서 끝.
	exit;
}
?>

<table width='100%'>
<form id="ImgUpFrm" name="ImgUpFrm" method="post" enctype="multipart/form-data">  
<input type='hidden' name='ACT' value='UP'>
<tr>
  <td>
   <b>이미지 업로드</b>
  </td>
</tr>
<tr>
  <td>
   <div>  
    이미지 파일 (.gif, .jpg, .png) 만 업로드하실 수 있습니다.</p>        
   </div>  
  </td>
</tr>
<tr>
  <td>
   <input type='file' name='iPic'>
  </td>
</tr>
<tr>
   <td>
   <input type='button' value="업로드" onclick='document.ImgUpFrm.submit();' />  
   <input type='button' value="취소" onclick="window.close();" />  
  </td>
</form>  
</tr>
</table>
