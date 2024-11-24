<div class="container-xl mt-4 mb-6 px-12 flex flex-col gap-y-2">
	<table class="table-auto border border-slate-200 shadow-lg w-100">
		<thead>
			<tr class="bg-slate-200">
				<th class="py-3">ID</th>
				<th class="py-3">First Name</th>
				<th class="py-3">Last Name</th>
				<th class="py-3">Email</th>
				<th class="py-3">Gender</th>
				<th class="py-3">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			require_once __DIR__ . '/../config/db_connection.php';
			require_once __DIR__ . '/../controllers/read.php';

			$result = getAllRecord($conn);
			// Fetch the next row of a result set as an associative array
			while ($res = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td class='text-center py-2'>".$res['id']."</td>";
				echo "<td class='text-center py-2'>".$res['first_name']."</td>";
				echo "<td class='text-center py-2'>".$res['last_name']."</td>";	
				echo "<td class='text-center py-2'>".$res['email']."</td>";	
				echo "<td class='text-center py-2'>".$res['gender']."</td>";	
				echo "<td class='text-center flex justify-center gap-x-2 py-2'>
						<a href='src/views/_update.php?id=".$res['id']."' class='w-20 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 rounded'>Edit</a>
						<a href='src/views/_delete.php?id=".$res['id']."' class='w-20 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 rounded'>Delete</a>
					</td>";
				echo "</tr>";
			}
			?>
		</tbody>
	</table>
</div>