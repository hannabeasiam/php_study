<?php 
/**********************************************************
 * author : Hanna Lee
 * 
 **********************************************************/
//if not first time assign form control filed to variables (groupName,subject, skill,location,organization,groupSize,detail,time)

  $groupName = '';
  $subject = '';
  $skills = '';
  $location = '';
  $organization = '';
  $detail = '';
  $time = '';
  $firstTime = $_SERVER["REQUEST_METHOD"] != 'POST';
 

if ($_SERVER["REQUEST_METHOD"] == 'POST') {//open if statement store all post into array
  $groupName = trim(filter_input(INPUT_POST, "groupName"));
  $subject = filter_input(INPUT_POST, "subject");
  $skills = filter_input(INPUT_POST, "skills");
  $location = trim(filter_input(INPUT_POST, "location"));
  $organization = filter_input(INPUT_POST, "organization");
  $detail = trim(filter_input(INPUT_POST, "detail"));
  $time = filter_input(INPUT_POST, "time");
  $validated = true;
  $fieldError = array();

/**********************************************************
 * check invalid data
 * 
 **********************************************************/
  if(empty($groupName)) {
    $validated = false;
    $groupNameError = 'Group name is required';
  }
  if(empty($subject)) {
    $validated = false;
    $subjectError = 'subject is required';
  }
  //multiple select from list box, validate and store value in array skills
  if(isset($skills)) {
    $selectedSkill = $_POST['skills'];
    //$selectedSkill = array_filter($selectedSkill); //remove empty array 'choose option' with empty value
    foreach ($selectedSkill as $key => $value) {
      if ($selectedSkill[0] == '') {array_shift($selectedSkill);}
      $skillList ='';
      $skillList .= $key. ' = ' .$value.'<br />';
    }
     /* test array
    echo '<pre>';
    var_dump($selectedSkill);
    echo '</pre>';
    */
  }
  if (empty($selectedSkill)) {
    $validated = false;
    $skillsError = 'Skill select is require';
  }
  //text box location option 
  if(empty($location)) {
    $validated = false;
    $locationError = 'Location is require';
  }
  //drop down menu organization validate
  if(empty($organization)) {
    $validated = false;
    $organizationError = 'Organization is require';

  }
  //text area validate
  if (empty($detail)) {
    $validated = false;
    $detailError = 'This field is require';
  }
  //checkbox
  if(isset($time)) {
    $timeList = $_POST['time'];
    foreach($timeList as $timeKey => $timeValue) {
      $setTime = '';
      $setTime .= $timeKey .' = ' .$timeValue .'<br />';
    }
    /* test array
    echo '<pre>';
    var_dump($timeList);
    echo '</pre>';
    */
  } else {
    $timeError = 'You must choose at least one';
    $validated = false;
  }


} //opened post cloase here

$title = "Learn php Arrays function display Courses";
include("include/header.php"); 
?>
<!--main contents-->
<div class="coursePage container">
<!--<div class="col">if i remove col, not fit with full screen size. why?-->
  <h2>Course List</h2>
  
  <?php 

/**************************************************************
 * if is first time or not valid data
    display form
  loop general error message validated array, 
  check if input error message setted, 
    if setted, display error message
    else 
  display result
******************************************************/


  if (($_SERVER["REQUEST_METHOD"] != 'POST') || $validated == false) { //start form block
    if (isset($error_message)) {
      echo $error_message;
    }
    else {
      echo '<h3>Tell me about your event!</h3>';
    }
    //else tag is opened 
  ?>
  <!--don't want to submit with get method, since it's really easy to modify
  query string data rather use POST-->
  
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" novalidate>
    <table>
      <!--textbox : Group Name-->
      <tr>
        <th><label for="groupName">Group Name</label></th>
        <td><input type="text" id="groupName" name="groupName" value="<?php if (isset($groupName)) echo $groupName; ?>"/></td>
        <td><span class="error"><?php if (isset($groupNameError)) echo $groupNameError; ?></span></td>
      </tr>
      <!--radio buttons : subject  (study, workshop, open topic study, project)-->
      <tr>
        <th><label>subject</label></th>
        <td>
          <input type="radio" name="subject" value="study" <?php if (isset($subject) && $subject == "study") { echo 'checked'; } ?>/> study<br/>
          <input type="radio" name="subject" value="workshop" <?php if (isset($subject) && $subject == "workshop") { echo 'checked'; } ?>/> workshop<br/>
          <input type="radio" name="subject" value="open topic study" <?php if (isset($subject) && $subject == "open topic study") { echo 'checked'; } ?>/> open topic study<br/>
          <input type="radio" name="subject" value="project" <?php if (isset($subject) && $subject == "project") { echo 'checked'; } ?>/> project<br/>
        </td>
        <td><span class="error"><?php if (isset($subjectError)) echo $subjectError; ?></span></td>
      </tr>
      <!--multible-select list box: skills & interest (HTML, CSS, AWS, Javascript, Java, Python, PHP)-->
      <tr>
        <th><label for="skills">Skills  &amp; Interest</label></th>
        <td>
          <select name="skills[]" id="skills" size="5" multiple>
            <option value="" <?php if ($firstTime || empty($selectedSkill)) echo 'selected'; ?>>Choose option..</option>
            <option value="HTML" <?php  if ((isset($selectedSkill)) && in_array("HTML",$selectedSkill )) echo 'selected'; ?> >HTML</option>
            <option value="CSS" <?php if ((isset($selectedSkill)) && in_array( "CSS",$selectedSkill)) echo 'selected'; ?>>CSS</option>
            <option value="AWS" <?php if ((isset($selectedSkill)) && in_array( "AWS",$selectedSkill)) echo 'selected'; ?>>AWS</option>
            <option value="Javascript" <?php if ((isset($selectedSkill)) && in_array( "Javascript",$selectedSkill)) echo 'selected'; ?>>Javascript</option>
            <option value="Java" <?php if ((isset($selectedSkill)) && in_array( "Java",$selectedSkill)) echo 'selected'; ?>>Java</option>
            <option value="Python" <?php if ((isset($selectedSkill)) && in_array( "Python",$selectedSkill)) echo 'selected'; ?>>Python</option>
            <option value="PHP" <?php if ((isset($selectedSkill)) && in_array( "PHP",$selectedSkill)) echo 'selected'; ?>>PHP</option>
          </select>
        </td>
        <td><span class="error"><?php if (isset($skillsError)) echo $skillsError; ?></span></td>
      </tr>
      <!--- textbox : zipcode, location-->
      <tr>
        <th><label for="location">Location</label></th>
        <td><input type="text" id="location" name="location" value="<?php echo $location; ?>"/></td>
        <td><span class="error"><?php if (isset($locationError)) echo $locationError; ?></span></td>
      </tr>
      
      <!-- drop down: Organization: student, non-profit, profit, institution-->
      <tr>
        <th><label for="organization">Organization</label></th>
        <td>
          <select name="organization" id="organization" size="1" >
            <option value="">Choose option..</option>
            <option value="school" <?php if (isset($organization) && $organization == "school"){ echo "selected";} ?> >School</option>
            <option value="non-profit" <?php if (isset($organization) && $organization == "non-profit"){ echo "selected";} ?> >Non-Profit</option>
            <option value="profit" <?php if (isset($organization) && $organization == "profit") {echo "selected";} ?> >Profit</option>
            <option value="indivisual" <?php if (isset($organization) && $organization == "indivisual") {echo "selected";} ?> >Indivisual</option>
          </select>
        </td>
        <td><span class="error"><?php if (isset($organizationError)) echo $organizationError; ?></span></td>
      </tr>
      <!--text area : Detail-->
      <tr>
        <th><label for="detail">Description</label></th>
        <td><textarea id="detail" name="detail" placeholder="Describe event"><?php if(isset($detail)) echo $detail; ?></textarea></td>
        <td><span class="error"><?php if (isset($detailError)) echo $detailError; ?></span></td>
      </tr>
      <!--set of checkbox : time-->
      <tr>
        <th><label>time</label></th>
        <td>
          <input type="checkbox" name="time[]" value="13-14" <?php if ((isset($timeList)) && in_array("13-14",$timeList )) { echo 'checked';} ?>/> 1 ~ 2 pm<br/>
          <input type="checkbox" name="time[]" value="14-15" <?php if (isset($timeList) && in_array("14-15",$timeList )){ echo 'checked';} ?>/> 2 ~ 3 pm<br/>
          <input type="checkbox" name="time[]" value="15-16" <?php if (isset($timeList) && in_array("15-16",$timeList )){ echo 'checked';} ?>/> 3 ~ 4 pm<br/>
          <input type="checkbox" name="time[]" value="16-17" <?php if (isset($timeList) && in_array("16-17",$timeList )){ echo 'checked';} ?>/> 4 ~ 5 pm<br/>
          <input type="checkbox" name="time[]" value="17-18" <?php if (isset($timeList) && in_array("17-18",$timeList )){ echo 'checked';} ?>/> 5 ~ 6 pm<br/>
        </td>
        <td><span class="error"><?php if (isset($timeError)) echo $timeError; ?></span></td>
      </tr>
    </table>
    
    <input type="submit" value="Send"/>
    <!--<input type="reset" value="Reset"/>-->
  </form>
  <?php 
    } //close else block
    else {
      //display result
      echo "<h3>Thanks for your submission!</h3>";
      $userInput = '';
      $userInput .= 'Group Name : ' .$groupName .'<br />';
      $userInput .= 'Subject : ' .$subject .'<br />';
      //if ($selectedSkill[0] == '') {array_shift($selectedSkill);}  operate under getarray part, empty string does not stored in array anymore
      $userInput .= 'Skills & Interest : ' .implode(' ,',$selectedSkill) .'<br />';
      $userInput .= 'Location : ' .$location .'<br />';
      $userInput .= 'Organization : ' .$organization .'<br />';
      $userInput .= 'Description : ' .$detail .'<br />';
      $userInput .= 'Time : ' .implode(' ,',$timeList).'<br />';
      echo $userInput;
    }
    
    ?>
  

</div><!--end main contents-->
<!--footer-->
<?php include("include/footer.php"); ?>