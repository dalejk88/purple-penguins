function validateForm() {
    let date = document.getElementById('date').value;
    let set = document.getElementById('select').value;
    
    alert("the date is" + date);
    if (date ==="") {
        alert("Please select a date");
        return false;
    }
    if(set ===""){
        alert("Please select a set");
        return false;
    }
    return false;
}




