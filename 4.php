
<html>
<head>
<title>Untitled Document</title>
<script language="javascript">
			function hitung()
			{
			
				var nilaix=document.form1.nilaix.value;
				var nilaiy=document.form1.nilaiy.value;
				counter=1;
				while(counter <= nilaiy)
					{
					counter2=1;
					while(counter2 <= nilaix)
					{
					document.write(counter2+ " ");
					counter2++;
					}
					document.write("<br>");
					counter++
				}
			}	
		
		
		</script>
</head>

<body>
<form name="form1" method="post" action="">
  <table width="250" border="1" align="center">
    <tr>
      <td width="75">Nilai X </td>
      <td width="159"><select name="nilaix" id="nilaix">
          <?php
			
			for($j=1; $j<=100; $j++)
			{
        		echo("<option value='$j'>$j</option>");
			}
		?>
      </select></td>
    </tr>
    <tr>
      <td>Nilai Y </td>
      <td><select name="nilaiy" id="nilaiy">
          <?php
			
			for($j=1; $j<=100; $j++)
			{
        		echo("<option value='$j'>$j</option>");
			}
		?>
      </select></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="Proses" onclick="hitung()"></td>
      <td><input type="reset" name="Submit2" value="Batal"></td>
    </tr>
  </table>
</form>
</body>
</html>
