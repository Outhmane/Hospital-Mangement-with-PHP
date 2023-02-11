<?php $this->start('body'); ?>

<?php $this->setSiteTitle('About the project');?>

<div class="mt-3">
    <?php if (isset($_SESSION['msg']) || $msg != "" || isset($_REQUEST['msg'])){
        if (isset($_SESSION['msg']))
        {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }elseif ($msg != null){
            echo "<div>".$msg."</div>";
        }
        elseif (isset($_REQUEST['msg'])){
            echo $_REQUEST['msg'];
            unset($_REQUEST['msg']);
        }
    }
    ?>
</div>

<h1 class="text-center green">Welcome to My first Health Care System</h1>
<div class="about">
    <h2>Project Informations</h2>
    <table class="table-striped mb-4 table-bordered table-hover table-warning mx-auto">
        <thead>
            <tr>
                <th>Name</th>
                <th>Class</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Dahmoune Outhmane</td>
                <td>CDA1</td>
                <td>dahmoune.oth@gmail.com</td>
                <td>+33 614568814</td>
            </tr>
            
        </tbody>
    </table>

    <h2>Admin Login Credentials</h2>
    <table class="table table-hover table-danger table-bordered">
        <thead>
        <tr>
            <th>Username</th>
            <th>Password</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>cisAdmin</td>
            <td>cispass</td>
        </tr>
        </tbody>
    </table>

    <h2 class="mt-2">Default Doctor Login Credentials</h2>
    <table class="table table-primary table-bordered">
        <thead>
        <tr>
            <th>Username</th>
            <th>Password</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>johnd</td>
            <td>123</td>
        </tr>
        </tbody>
    </table>

    <h2>Default Nurse Login Credentials</h2>
    <table class="table table-dark table-bordered">
        <thead>
        <tr>
            <th>Username</th>
            <th>Password</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>jenj</td>
            <td>123</td>
        </tr>
        </tbody>
    </table>

    <h2>Default Patient Login Credentials with Health Card Number</h2>
    <table class="table table-info table-bordered">
        <thead>
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Health Card Number</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>patrick</td>
            <td>123</td>
            <td>11111111</td>
        </tr>

        </tbody>
    </table>

</div>
<?php $this->end(); ?>



