<?php
    session_start();
    // initialize variables
    $pk_eID = 0;
    $pk_eStartDate = "";
    $pk_eEndDate = "";
    $pk_eFname = "";
    $pk_eMinit = "";
    $pk_eLname = "";
    $pk_eAddress = "";
    $pk_eCity = "";
    $pk_eState = "";
    $pk_eZipCode = "";
    $pk_eEmail = "";
    $pk_eMobile = "";
    $pk_eSsn = "";
    $pk_eSex = "";
    $pk_mID = 0;
    $pk_edID = 0;

    // initialize variables for Customer Table
    $pk_cID = 0;
    $pk_cFname = "";
    $pk_cMinit = "";
    $pk_cLname = "";
    $pk_cCompany = "";
    $pk_cAddress = "";
    $pk_cCity = "";
    $pk_cState = "";
    $pk_cZipCode = "";
    $pk_cEmail = "";
    $pk_cMobile = "";
    $pk_eID = 0;

    // connect to database
    $db = mysqli_connect('localhost', 'root', '1234', 'packageDB');

    // if save button is clicked (same name as the one in addEmployee.php)
    if (isset($_POST['add'])) {
        // $pk_eID = $_POST['pk_eID'];
        $pk_eStartDate = $_POST['pk_eStartDate'];
        $pk_eEndDate = $_POST['pk_eEndDate'];
        $pk_eFname = $_POST['pk_eFname'];
        $pk_eMinit = $_POST['pk_eMinit'];
        $pk_eLname = $_POST['pk_eLname'];
        $pk_eAddress = $_POST['pk_eAddress'];
        $pk_eCity = $_POST['pk_eCity'];
        $pk_eState = $_POST['pk_eState'];
        $pk_eZipCode = $_POST['pk_eZipCode'];
        $pk_eEmail = $_POST['pk_eEmail'];
        $pk_eMobile = $_POST['pk_eMobile'];
        $pk_eSsn = $_POST['pk_eSsn'];
        $pk_eSex = $_POST['pk_eSex'];
        $pk_mID = $_POST['pk_mID'];
        $pk_edID = $_POST['pk_edID'];

        $query = "INSERT INTO pk_Employee (pk_eStartDate, pk_eEndDate, pk_eFname, pk_eMinit, pk_eLname, pk_eAddress, pk_eCity, pk_eState, pk_eZipCode, pk_eEmail, pk_eMobile, pk_eSsn, pk_eSex, pk_mID, pk_edID) VALUES ('$pk_eStartDate', '$pk_eEndDate', '$pk_eFname', '$pk_eMinit', '$pk_eLname', '$pk_eAddress', '$pk_eCity', '$pk_eState', '$pk_eZipCode', '$pk_eEmail', '$pk_eMobile', '$pk_eSsn', '$pk_eSex', $pk_mID, $pk_edID)";
        mysqli_query($db, $query);
        header('location: AdminPage.php');  // redirect to Admin page after inserting
    }

    // update records
    if (isset($_POST['update'])) {
        $pk_eID = $_POST['pk_eID'];
        $pk_eStartDate = $_POST['pk_eStartDate'];
        $pk_eEndDate = $_POST['pk_eEndDate'];
        // $pk_eFname = $_POST['pk_eFname'];
        // $pk_eMinit = $_POST['pk_eMinit'];
        // $pk_eLname = $_POST['pk_eLname'];
        $pk_eAddress = $_POST['pk_eAddress'];
        $pk_eCity = $_POST['pk_eCity'];
        $pk_eState = $_POST['pk_eState'];
        $pk_eZipCode = $_POST['pk_eZipCode'];
        $pk_eEmail = $_POST['pk_eEmail'];
        $pk_eMobile = $_POST['pk_eMobile'];
        $pk_eSsn = $_POST['pk_eSsn'];
        $pk_eSex = $_POST['pk_eSex'];
        $pk_mID = $_POST['pk_mID'];
        $pk_edID = $_POST['pk_edID'];

        mysqli_query($db, "UPDATE pk_Employee SET pk_eStartDate='$pk_eStartDate', pk_eEndDate='$pk_eEndDate', pk_eAddress='$pk_eAddress', pk_eCity='$pk_eCity', pk_eState='$pk_eState', pk_eZipCode='$pk_eZipCode', pk_eEmail='$pk_eEmail', pk_eMobile='$pk_eMobile', pk_eSsn='$pk_eSsn', pk_eSex='$pk_eSex', pk_mID=$pk_mID, pk_edID=$pk_edID WHERE pk_eID=$pk_eID");
        header('location: AdminPage.php');
    }

    // delete records
    if (isset($_GET['del'])) {
       $pk_eID = $_GET['del'];
       mysqli_query($db, "DELETE FROM pk_Employee WHERE pk_eID=$pk_eID");
       header('location: AdminPage.php');
    }


    // add new customers to list
    if (isset($_POST['addCust'])) {
        // $pk_cID = $_POST['pk_cID'];
        $pk_cFname = $_POST['pk_cFname'];
        $pk_cMinit = $_POST['pk_cMinit'];
        $pk_cLname = $_POST['pk_cLname'];
        $pk_cCompany = $_POST['pk_cCompany'];
        $pk_cAddress = $_POST['pk_cAddress'];
        $pk_cCity = $_POST['pk_cCity'];
        $pk_cState = $_POST['pk_cState'];
        $pk_cZipCode = $_POST['pk_cZipCode'];
        $pk_cEmail = $_POST['pk_cEmail'];
        $pk_cMobile = $_POST['pk_cMobile'];
        $pk_eID = $_POST['pk_eID'];

        $query = "INSERT INTO pk_Customer (pk_cFname, pk_cMinit, pk_cLname, pk_cCompany, pk_cAddress, pk_cCity, pk_cState, pk_cZipCode, pk_cEmail, pk_cMobile, pk_eID) VALUES ('$pk_cFname', '$pk_cMinit', '$pk_cLname', '$pk_cCompany', '$pk_cAddress', '$pk_cCity', '$pk_cState', '$pk_cZipCode', '$pk_cEmail', '$pk_cMobile', $pk_eID)";
        mysqli_query($db, $query);
        header('location: AdminPage.php');
    }

    // update Customers
    if (isset($_POST['updateCust'])) {
        $pk_cID = $_POST['pk_cID'];
        // $pk_cFname = $_POST['pk_cFname'];
        // $pk_cMinit = $_POST['pk_cMinit'];
        // $pk_cLname = $_POST['pk_cLname'];
        $pk_cCompany = $_POST['pk_cCompany'];
        $pk_cAddress = $_POST['pk_cAddress'];
        $pk_cCity = $_POST['pk_cCity'];
        $pk_cState = $_POST['pk_cState'];
        $pk_cZipCode = $_POST['pk_cZipCode'];
        $pk_cEmail = $_POST['pk_cEmail'];
        $pk_cMobile = $_POST['pk_cMobile'];
        $pk_eID = $_POST['pk_eID'];

        mysqli_query($db, "UPDATE pk_Customer SET pk_cCompany='$pk_cCompany', pk_cAddress='$pk_cAddress', pk_cCity='$pk_cCity', pk_cState='$pk_cState', pk_cZipCode='$pk_cZipCode', pk_cEmail='$pk_cEmail', pk_cMobile='$pk_cMobile', pk_eID=$pk_eID WHERE pk_cID=$pk_cID");
        header('location: AdminPage.php');
    }

    // delete Customers
    if (isset($_GET['delCust'])) {
        $pk_cID = $_GET['delCust'];
        mysqli_query($db, "DELETE FROM pk_Customer WHERE pk_cID=$pk_cID");
        header('location: AdminPage.php');
    }

    // Department
    if (isset($_POST['addDept'])) {
        // $pk_dID = $_POST['pk_dID'];
        $pk_dName = $_POST['pk_dName'];
        $pk_cID = $_POST['pk_cID'];
        $pk_mdID = $_POST['pk_mdID'];

        $query = "INSERT INTO pk_Department (pk_dName, pk_cID, pk_mdID) VALUES ('$pk_dName', $pk_cID, $pk_mdID)";
        mysqli_query($db, $query);
        header('location: AdminPage.php');
    }

    if (isset($_POST['editDept'])) {
      $pk_dID = $_POST['pk_dID'];
      $pk_dName = $_POST['pk_dName'];
      $pk_cID = $_POST['pk_cID'];
      $pk_mdID = $_POST['pk_mdID'];

        mysqli_query($db, "UPDATE pk_Department SET pk_dID=$pk_dID, pk_dName='$pk_dName', pk_cID=$pk_cID, pk_mdID=$pk_mdID WHERE pk_dID=$pk_dID");
        // $_SESSION['msg'] = "Address updated";
        header('location: AdminPage.php');
    }

    if (isset($_GET['delDept'])) {
       $pk_dID = $_GET['delDept'];
       mysqli_query($db, "DELETE FROM pk_Department WHERE pk_dID=$pk_dID");
       // $_SESSION['msg'] = "Address deleted";
       header('location: AdminPage.php');
    }

    // Destination
    if (isset($_POST['addDest'])) {
        // $pk_deID = $_POST['pk_deID'];
        $pk_deName = $_POST['pk_deName'];
        $pk_deCity = $_POST['pk_deCity'];
        $pk_deState = $_POST['pk_deState'];
        $pk_deZipCode = $_POST['pk_deZipCode'];
        $pk_deCountryCode = $_POST['pk_deCountryCode'];
        $pk_deTelephone = $_POST['pk_deTelephone'];
        $pk_dpID = $_POST['pk_dpID'];

        $query = "INSERT INTO pk_Destination (pk_deName, pk_deCity, pk_deState, pk_deZipCode, pk_deCountryCode, pk_deTelephone, pk_dpID) VALUES ('$pk_deName', '$pk_deCity', '$pk_deState', '$pk_deZipCode', '$pk_deCountryCode', '$pk_deTelephone', $pk_dpID)";
        mysqli_query($db, $query);
        header('location: AdminPage.php');
    }

    if (isset($_POST['editDest'])) {
        $pk_deID = $_POST['pk_deID'];
        $pk_deName = $_POST['pk_deName'];
        $pk_deCity = $_POST['pk_deCity'];
        $pk_deState = $_POST['pk_deState'];
        $pk_deZipCode = $_POST['pk_deZipCode'];
        $pk_deCountryCode = $_POST['pk_deCountryCode'];
        $pk_deTelephone = $_POST['pk_deTelephone'];
        $pk_dpID = $_POST['pk_dpID'];

        mysqli_query($db, "UPDATE pk_Destination SET pk_deID=$pk_deID, pk_deName='$pk_deName', pk_deCity='$pk_deCity', pk_deState='$pk_deState', pk_deZipCode='$pk_deZipCode', pk_deCountryCode='$pk_deCountryCode', pk_deTelephone='$pk_deTelephone', pk_dpID='$pk_dpID' WHERE pk_deID=$pk_deID");
        // $_SESSION['msg'] = "Address updated";
        header('location: AdminPage.php');
    }

    if (isset($_GET['delDest'])) {
       $pk_deID = $_GET['delDest'];
       mysqli_query($db, "DELETE FROM pk_Destination WHERE pk_deID=$pk_deID");
       // $_SESSION['msg'] = "Address deleted";
       header('location: AdminPage.php');
    }

    // retrieve records (Employee Table)
    $results = mysqli_query($db, "SELECT * FROM pk_Employee");

    // retrieve records (Customer Table)
    $customerResults = mysqli_query($db, "SELECT * FROM pk_Customer");

    // retrieve department records
    $departmentResults = mysqli_query($db, "SELECT * FROM pk_Department");

    // retrieve destination records
    $destinationResults = mysqli_query($db, "SELECT * FROM pk_Destination");

    // package
    $packageResults = mysqli_query($db, "SELECT * FROM pk_Package");

    // manager
    $managersResults = mysqli_query($db, "SELECT * FROM pk_Managers");

    // source
    $sourceResults = mysqli_query($db, "SELECT * FROM pk_Source");

    // TimeDateStamp
    $tdsResults = mysqli_query($db, "SELECT * FROM pk_TimeDateStamp");

    // transactions
    $transactionsResults = mysqli_query($db, "SELECT * FROM pk_Transactions");

?>
