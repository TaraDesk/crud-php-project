<?php require_once __DIR__ . '/src/views/_header.php'; ?>

<div class="container-xl my-8 px-12 flex flex-col gap-y-2">
	<h1 class="text-3xl font-bold">CRUD Fake Data</h1>
	<p class="text-justify">Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Fuga dolores enim minus reiciendis consequuntur voluptate rerum nostrum, autem cum sed beatae in accusantium est, nesciunt, magni dolorem, deserunt suscipit earum.</p>	
</div>

<div class="container-xl px-12 flex justify-between items-center">
	<h2 class="text-2xl font-bold mb-2">List of Records</h2>
	<a href="src/views/_create.php" class="bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-2 px-3 rounded">Add Record</a>
</div>

<?php

require_once __DIR__ . '/src/views/_list.php';
require_once __DIR__ . '/src/views/_footer.php';

?>
