<!DOCTYPE html>
<html>
	<head>
		  <title>Design Table Structure in HTML</title>
	</head>

	<body>
		<center><h5>Table</h5>

		<table border="1" WIDTH="20%" HEGHT="40%" >
			<tr>
				<th colspan="6" align="center">Header</th>
			</tr>
			<tr>
				<td rowspan="5" align="center">Side 1</td>
                <td colspan="3" align="center">Content 1</td>
                <td rowspan="5" align="center">Side 2 </td>
			</tr>
            <tr>
				<!-- <td></td> -->
                <td align="center">Img</td>
                <td align="center">Img</td>
                <td align="center">Img</td>
                <!-- <td> </td>          -->
			</tr>
              <tr>
				<!-- <td></td> -->
                <td align="center" colspan ="2">Content 2</td>
                <!-- <td align="center">Side 3</td>   -->
                <td align="center">Content 3</td>
                <!-- <td></td>          -->
			</tr>

              <tr>
				<td colspan="3" align="center">Content 4</td>
			</tr>
            <tfoot>
            <tr>
                <td colspan = "6" align="center">Footer </td>
                <!-- <th>Header</th>
                <th>Header</th>
                <th>Header</th> -->
            </tr>
  </tfoot>

		</table>
		</center>
	</body>
</html>
