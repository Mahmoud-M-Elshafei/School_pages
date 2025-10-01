<script>
  function validate_Form() {
    let name= document.getElementById("Name").value;
    let gender = document.getElementById("gender").value;
    let dob = document.getElementById("d_of_b").value;
    let grade = document.getElementById("grade").value;
    let contact = document.getElementById("contact").value;
    let email = document.getElementById("email").value;

    ///  validation
    if (name === "" || gender === "" || dob === "" || grade === "" || contact === "" || email === "") {
        alert("All fields are required. Please fill all.")
    }
  }
</script>




