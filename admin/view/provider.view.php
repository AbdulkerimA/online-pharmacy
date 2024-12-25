<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./lib/datatable/dataTables.css">
    <title>pharmasist</title>
</head>

<body>
    <aside>
        <div id="menus">
            <div>
                <i class="fa fa-tachometer" aria-hidden="true"></i>
                <a href="/online-pharmacy/admin/provider.php?page=dashboard">dash board</a>
            </div>
            <div>
                <i class="fa fa-plus" aria-hidden="true"></i>
                <a href="/online-pharmacy/admin/provider.php?page=addproduct">add product</a>
            </div>
            <div>
                <i class="fa fa-plus" aria-hidden="true"></i>
                <a href="/online-pharmacy/admin/provider.php?page=viewproducts">see products</a>
            </div>
            <div>
                <i class="fa fa-users" aria-hidden="true"></i>
                <a href="/online-pharmacy/admin/provider.php?page=customers">customers</a>
            </div>
        </div>
    </aside>
    <main>
        <nav>
            <div>

            </div>
            <div id="profile">
                <span>user name</span>
            </div>
            <i class="fa fa-sign-out" aria-hidden="true"></i>
        </nav>
        <div id="main">
            <?php include_once $currentpage; ?>
        </div>
    </main>
</body>
<script src="./lib/jquery/jquery-3.7.1.min.js"></script>
<script src="./lib/datatable/dataTables.js"></script>
<script>
    // insiallizing the datatable obj
    $(document).ready(function() {
        $("#myTable").DataTable();
    });
</script>

</html>