<table border="2px">
	<thead>
		<th>Name</th>
		<!-- <th>std registration no</th>
		<th>student Roll No</th>
		<th>student section</th> -->
	</thead>
	@foreach($students as $key=>$use)
	<tr>
		<td>{{$use->std_class}}</td>
		<!-- <td>{{$use->std_reg_no}}</td>
		<td>{{$use->std_rol_no}}</td>
		<td>{{$use->std_section}}</td> -->
	</tr>
	@endforeach
</table>


