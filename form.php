<!DOCTYPE html>
<html>
    
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Web Admission Slip</title>
    <link rel="stylesheet" type="text/css" href="form.css">
	
  

</head>

<body>
    
    <!-- admision title -->
    <header class="header">
        <img src="Angeles_City_Science_High_School.png" class="logo-left">

        <div class="container2">
            <h2 style="text-align: center;"> ANGELES CITY SCIENCE HIGH SCHOOL - SENIOR HIGH SCHOOL
               
            <h3 style="text-align: center;"> Dona Aurora St., Lourdes Sur East, Angeles City </h3>
           </h2>
        </div> 
        
          <img src="deped_logo_PNG1.png" class="logo-right">
       
    </header>


    <!-- admission form -->
    <div class="container">
    <div class="form-box">

        <form action="submit.php" method="POST" id="admission-form">
        <h1 style="text-align: center; margin-top: 0%;">ADMISSION SLIP</h1>

            
                    <!-- LRN -->
                    <label class="bold-label" for="LRN">LRN:</label>
                    <input type="text" name="LRN"  required>
                
                    <!-- DATE -->
                    <label class="bold-label" for="date">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admission Date:</label>
                    <input type="date" name="date" required><br><br>

                    <!-- NAME -->
                    <label class="bold-label" for="name">Student Name:</label>
                    <input type="text" name="name" required>

                    <!-- SECTION -->
                    <label class="bold-label" for="section">&nbsp;&nbsp;&nbsp;&nbsp;Grade and Section:</label>
                    <input type="text" name="section" required><br><br>

                    <p class="red-italic">*Please temporarily admit the bearer in your class despite being.*</p>

            

                    <!-- LATE OPTION -->
                    <div class="question1">
                        <label class="bold-label">Are you late?:</label>
                        <label><input name="late" type="radio" id="Yes" value="Yes"/> Yes</label>
                        <label><input name="late" type="radio" id="No" value="No" onchange="check()" /> No</label>
                    </div>

                    <br>
                    <!-- NUMBER OF OFFENSE -->


                    <div class="question2">
                    <label class="bold-label" name="offense">Number of offense:</label>
                        <label><input type="radio" name="offenseNumber" id="1st" value="1st" />1st</label>
                        <label><input type="radio" name="offenseNumber" id="2nd" value="2nd" />2nd</label>
                        <label><input type="radio" name="offenseNumber" id="3rd" value="3rd" />3rd</label>
                        <label><input type="radio" name="offenseNumber" id="4th" value="4th" />4th (Parent Needed) </label>
                    </div>

                    </select>
            
                    <br>
                 
                    <!-- ABSENT -->
                    <div class="question1">
                        <label class="bold-label" for="absent">Are you absent?:</label>
                        <label><input name="absent" type="radio"  id="Yes"value="Yes"/> Yes </label>
                        <label><input name="absent" type="radio"  id="No" value="No"/> No </label>
                    </div>
                       <br>
                    
                    <!-- DATE OF ABSENCE -->
                    <label class="bold-label" name="dateAbsence">Date of Absence:</label>
                    <input type="date" name="dateAbsence" id="dateAbsence">
                    <br><br>
                    
                    
                    <!-- REASON OF ABSENCE -->
                    <div class="form-group">
                    <label class="bold-label" for="reasonAbsence">Reason of Absence:</label>
                    <textarea rows="2" name="reasonAbsence" id="reasonAbsence"> </textarea>
                    </div>
                    <br>

                    

                    <!-- SUBMIT BUTTON -->
                  <div class="button-container-div">
                    <button class="button" type="submit" name="save"><b>Submit</b></button>
                </div>

                <script>
                    
                    
                     // Get the radio button and datepicker elements
                        var radioButtons = document.getElementsByName("absent");
                        var datepicker = document.getElementById("dateAbsence");

                        // Add an event listener to the radio buttons
                        for (var i = 0; i < radioButtons.length; i++) {
                        radioButtons[i].addEventListener("change", function() {
                            if (this.value === "No") {
                            datepicker.disabled = true; // Disable the datepicker
                            reasonAbsence.disabled = true;
                            } else {
                            datepicker.disabled = false; // Enable the datepicker
                            reasonAbsence.disabled = false;
                            }
                        });
                        }

                        function check() {
                            if (document.getElementById('No').checked) {
                                document.getElementById('1st').disabled = true;
                                document.getElementById('2nd').disabled = true;
                                document.getElementById('3rd').disabled = true;
                                document.getElementById('4th').disabled = true;
                            }
                        }

                                                     
                    </script>
           
        </div>
    </form>
    </div>

   
    
  </form>
</body>
  