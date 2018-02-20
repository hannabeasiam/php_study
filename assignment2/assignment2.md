```
#reauirements
//action attibute value from tag should be web page itself, novalidate
//dropdown menu & multiple select list box, first value attibute set to blank
//radio & checkbox must not have any default choose
//validate entry input 
//validate is not work, array error with name,  one main error 
//no info from field = display message in red text next to the field
//all field entered, display all the info entered

- textbox : Group Name
- radio buttons : subject  (study, workshop, open topic study, project)
- multible-select list box: skills & interest (HTML, CSS, AWS, Javascript, Java, Python, PHP)
- textbox : zipcode, location
- drop down: Organization: student, non-profit, profit, institution
- text area : Detail
- set of checkboxes : time 1pm-2pm, 2-3, 4-5, 5-6, 6-7


if not first time
  assign form control filed to variables
    groupName
    subject
    skill
    location
    organization
    detail
    time
    validated array (groupName = true, skill = true, ...defaut true )
  check invalid data
    if input is invalid
      set validated[array] to false
      set input error message
    

if is not first time or not valid data
  display form
  loop general error message validated array, 
  check if input error message setted, 
    if setted, display error message

else 
  display result
  
```