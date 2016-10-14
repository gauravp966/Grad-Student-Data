<?php

function connectToSQL(){

    $mysqli = new mysqli("localhost", "root");
    $databaseSelect = 'graduateoutcomes';
    if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $db = mysqli_select_db ($mysqli, $databaseSelect);

    if (! $db) {
    echo "no db";
    }
}


function getStudent(){

$mysqli = new mysqli("localhost", "root");
$databaseSelect = 'graduateoutcomes';
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$db = mysqli_select_db ($mysqli, $databaseSelect);

if (! $db) {
 echo "no db";
}
    //Data Set of All Students
    $page = (isset($_GET['page']) ? $_GET['page'] : 1);

    $query = "select * from student LIMIT 2 offset $page";

    $studentInfo = $mysqli->query($query);

    $row = $studentInfo->fetch_array();

    //Each key needs outcomes go and get them!
    $studentKey = $row['pkey'];

    $query = "call getoutcome(".$studentKey.")";
    $studentOutcome = $mysqli->query($query);
    

    while($row = $studentInfo->fetch_array()){
        $outRow = $studentOutcome->fetch_array();
        echo "<tr >";
    echo "<td>" . $row['lastname'] . ", " . $row['firstname'] . " </td>";
    echo "<td>" . $row['school'] . " </td>";
    echo "<td>" . $row['major'] . " </td>";
    echo "<td>" . $row['degree'] . " </td>";
    echo "<td>" . $row['campus'] . " </td>";
    echo "<td>" . $row['visa'] . " </td>";
    echo "<td>" . $outRow['Primary Status'] . " </td>";
    echo "<td>" . $outRow['salary'] . " </td>";
    echo "<td>" . $outRow['related2studyind'] . " </td>";
    echo "<td>" . $outRow['EmploymentCategory'] . " </td>";
    echo "<td>" . $outRow['entity'] . " </td>";
    echo "<td>" . $outRow['position'] . " </td>";
    echo "<td>" . $outRow['JobFunction'] . " </td>";
    echo "<td>" . $outRow['dateseen'] . " </td>";
    echo "<td>" . $outRow['approved'] . " </td>";
    echo "</tr>";
    }

    $count = mysqli_num_rows($studentInfo);
            
            ?> <a id=""i"" class="btn btn-primary" style="visible:none" href="dataVerify.php?page=<?php echo $page-1; ?>"> LAST </a>&nbsp&nbsp&nbsp    <a id=""i"" class="btn btn-primary" style="visible:none" href="dataVerify.php?page=<?php echo $page+1; ?>"> NEXT </a>
            <?php
}


function getImmutables(){
    $mysqli = new mysqli("localhost", "root");
    $databaseSelect = 'graduateoutcomes';
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $db = mysqli_select_db ($mysqli, $databaseSelect);

    if (! $db) {
    echo "no db";
    }
    
    $page = (isset($_GET['page']) ? $_GET['page'] : 1);
    $query = "select * from student LIMIT 2 offset $page";
    $studentInfo = $mysqli->query($query);
    $row = $studentInfo->fetch_array();
    //Each key needs outcomes go and get them!
    $studentKey = $row['pkey'];
    $query = "call getoutcome(".$studentKey.")";
    $studentOutcome = $mysqli->query($query);


    echo "<div class=\"panel-heading\">" . $row['lastname'] . ", " . $row['firstname'] .  "</div>"; 
    echo "<div class=\"panel-body\">";
    echo "<div class-\"form-inline\">";
    echo "<form class=\"form-inline\">";
    echo "<div class=\"input-group col-md-4\">";
    echo "<span class=\"input-group-addon\" id=\"basic-addon1\"> School </span>";
    echo "<input type=\"text\" class=\"form-control\" placeholder=\"" . $row['school'] . "\" aria-describedby=\"basic-addon1\"> </div>";

    echo "<div class=\"input-group col-md-4\">";
    echo "<span class=\"input-group-addon\" id=\"basic-addon1\">Major</span>";
    echo "<input type=\"text\" class=\"form-control\" placeholder=\"" . $row['major'] . "\" aria-describedby=\"basic-addon1\"> </div>";

    echo "<div class=\"input-group col-md-4\">";
    echo "<span class=\"input-group-addon\" id=\"basic-addon1\"> Campus </span>";
    echo "<input type=\"text\" class=\"form-control\" placeholder=\"" . $row['campus'] . "\" aria-describedby=\"basic-addon1\"> </div>";

    echo "<div class=\"input-group col-md-4\">";
    echo "<span class=\"input-group-addon\" id=\"basic-addon1\"> Visa </span>";
    echo "<input type=\"text\" class=\"form-control\" placeholder=\"" . $row['visa'] . "\" aria-describedby=\"basic-addon1\"> </div>
        </div> </form> </div>";
}

function setOutcomes(){
    $mysqli = new mysqli("localhost", "root");
    $databaseSelect = 'graduateoutcomes';
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $db = mysqli_select_db ($mysqli, $databaseSelect);

    if (! $db) {
    echo "no db";
    }
    
    $page = (isset($_GET['page']) ? $_GET['page'] : 1);
    $query = "select * from student LIMIT 2 offset $page";
    $studentInfo = $mysqli->query($query);
    $row = $studentInfo->fetch_array();
    //Each key needs outcomes go and get them!
    $studentKey = $row['pkey'];
    $query = "call getoutcome(".$studentKey.")";
    $studentOutcome = $mysqli->query($query);
    $outRow = $studentOutcome->fetch_array();

    echo "<div class=\"input-group col-md-5\">";
    echo "<span class=\"input-group-addon\" id=\"basic-addon1\">Primary Status</span>";
    echo "<input type=\"text\" class=\"form-control\" placeholder=\"" . $outRow['Primary Status'] . "\" aria-describedby=\"basic-addon1\">
          </div>";
    echo "<div class=\"input-group col-md-3\">";
    echo "<span class=\"input-group-addon\">Salary</span>";
    echo "<input type=\"text\" class=\"form-control\" placeholder=\"$" . $outRow['salary'] . "\" aria-label=\"Amount (to the nearest dollar)\">
          </div>";
    echo "<div class=\"input-group col-md-3\">";
    echo "<span class=\"input-group-addon\">Related to Study</span>";
    echo "<input type=\"text\" class=\"form-control\" placeholder=\"" . $outRow['related2studyind'] . "\" aria-describedby=\"basic-addon1\">
          </div>";
    echo "<div class=\"input-group col-md-5\">";
    echo "<span class=\"input-group-addon\">Employer Category</span>";
    echo "<input type=\"text\" class=\"form-control\" placeholder=\"" . $outRow['EmploymentCategory'] . "\">
          </div>";
    echo "<div class=\"input-group col-md-6\">";
    echo "<span class=\"input-group-addon\">Employer Name</span>";
    echo "<input type=\"text\" class=\"form-control\" placeholder=\"" . $outRow['entity'] . "\">
          </div>";
    echo "<div class=\"input-group col-md-5\">";
    echo "<span class=\"input-group-addon\">Job Title</span>";
    echo "<input type=\"text\" class=\"form-control\" placeholder=\"" . $outRow['position'] . "\">
          </div>";
    echo "<div class=\"input-group col-md-4\">";
    echo "<span class=\"input-group-addon\">Job Function</span>";
    echo "<input type=\"text\" class=\"form-control\" placeholder=\"" . $outRow['JobFunction'] . "\">
          </div>";
    echo "<div class=\"input-group col-md-4\">";
    echo "<span class=\"input-group-addon\">Job Start Date</span>";
    echo "<input type=\"text\" class=\"form-control\" placeholder=\"" . $outRow['dateseen'] . "\">
          </div>";
    echo "<div class=\"input-group col-md-2\">";
    echo "<span class=\"input-group-addon\">Verified</span>";
    echo "<input type=\"text\" class=\"form-control\" placeholder=\"" . $outRow['approved'] . "\">
          </div>";
}
 
?>

<?php
function setButtons(){
$page = (isset($_GET['page']) ? $_GET['page'] : 1);
?> <a id=""i"" class="btn btn-primary" style="visible:none" href="dataVerify.php?page=<?php echo $page+1; ?>"> NEXT </a><a id=""i"" class="btn btn-primary" style="visible:none" href="dataVerify.php?page=<?php echo $page-1; ?>"> LAST </a> 
            <?php
}
?>