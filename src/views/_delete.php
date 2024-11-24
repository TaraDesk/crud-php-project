<?php 

require_once __DIR__ . '/_header.php'; 
require_once __DIR__ . '/../config/db_connection.php'; 
require_once __DIR__ . '/../controllers/read.php';

$id = $_GET['id'];
$request = getRecordById($conn, $id);
$request_data = mysqli_fetch_assoc($request);

?>

<div class="w-screen h-screen flex justify-center items-center">
    <div class="w-6/12 px-8 py-4 flex flex-col gap-y-5">
        <h2 class="text-2xl font-bold">Confirm Your Action</h2>
        <p>Are you sure you want to delete this data?</p>
        <table class="w-full table-auto border border-slate-200 shadow-lg">
            <tbody>
                <tr class="bg-slate-100">
                    <th class="py-3">ID</th>
                    <th class="py-3">:</th>
                    <th class="py-3 font-normal"><?php echo $id; ?></th>
                </tr>
                <tr>
                    <th class="py-3">First Name</th>
                    <th class="py-3">:</th>
                    <th class="py-3 font-normal"><?php echo $request_data['first_name']; ?></th>
                </tr>
                <tr class="bg-slate-100">
                    <th class="py-3">Last Name</th>
                    <th class="py-3">:</th>
                    <th class="py-3 font-normal"><?php echo $request_data['last_name']; ?></th>
                </tr>
                <tr>
                    <th class="py-3">Email</th>
                    <th class="py-3">:</th>
                    <th class="py-3 font-normal"><?php echo $request_data['email']; ?></th>
                </tr>
                <tr class="bg-slate-100">
                    <th class="py-3">Gender</th>
                    <th class="py-3">:</th>
                    <th class="py-3 font-normal"><?php echo $request_data['gender']; ?></th>
                </tr>
            </tbody>
        </table>
        <div class="flex flex-wrap -mx-3 px-3 justify-end gap-x-4">
            <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-4 rounded" type="button" onclick="window.location.href='../controllers/delete.php?id=<?php echo $id; ?>'">Delete</button>
            <a href="../../index.php" class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-4 rounded">Cancel</a>
        </div>
        
        <?php 
        require_once __DIR__ . '/../views/_footer.php'; 
        ?>
    </div>
</div>
