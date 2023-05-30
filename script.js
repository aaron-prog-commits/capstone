function validateForm() {
    // Validate LRN field
    var lrn = document.getElementById("LRN").value;
    if (lrn === "") {
        alert("Please enter the Learner Reference Number (LRN).");
        return false;
    }
}
    
    //date
    var date= document.getElementById("date").value;
    if (date === "") {
        alert("Please select date.");
        return false;
    }


    // Validate Name field
    var name = document.getElementById("name").value;
    if (name === "") {
        alert("Please enter your full name.");
        return false;
    }

    // Validate Section field
    var section = document.getElementById("section").value;
    if (section === "") {
        alert("Please enter your grade level and section.");
        return false;
    }

   

    //number of offense

    var option = document.getElementById("offense").value;
    if (late === "") {
        alert("Please select Yes or No.");
        return false;
    }


    //absent
    var absent = document.getElementById("absent").value;
    if (absent === "") {
        alert("Please select Yes or No.");
        return false;
    }

    //date of absence
    var dateAbsence= document.getElementById("dateAbsence").value;
    if (dateAbsence === "") {
        alert("Please select date.");
        return false;
    }

    

 


    