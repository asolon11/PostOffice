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

    // connect to database
    $db = mysqli_connect('localhost', 'root', '1234', 'postOffice');

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
        // $_SESSION['msg'] = "Address updated";
        header('location: AdminPage.php');
    }

    // delete records
    if (isset($_GET['del'])) {
       $pk_eID = $_GET['del'];
       mysqli_query($db, "DELETE FROM pk_Employee WHERE pk_eID=$pk_eID");
       // $_SESSION['msg'] = "Address deleted";
       header('location: AdminPage.php');
    }

    // retrieve records
    $results = mysqli_query($db, "SELECT * FROM pk_Employee");


?>
