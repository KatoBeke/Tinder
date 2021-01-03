function Validation(){
    var firstname = document.getElementById("firstname");
    var lastname = document.getElementById("lastname");
    var age = document.getElementById("age");
    var gender = document.getElementById("gender");
    var interests = document.getElementById("interests");
	var telephone = document.getElementById("tel");
    var preferred_gender = document.getElementById("preferred_gender");
    
	var is_valid = true;
// Alle errors niet tonen, je toont ze pas als het veld niet is ingevuld
    document.getElementById("firstname_error").style.display="none";
    document.getElementById("lastname_error").style.display="none";
    document.getElementById("age_error").style.display="none";
    document.getElementById("gender_error").style.display="none";
    document.getElementById("interests_error").style.display="none";
    document.getElementById("phone_error").style.display="none";
    document.getElementById("preferred_gender_error").style.display="none";
    
    // Als het veld firstname leeg is, wordt de error getoond in het veld firstname met een rode achtergrond
    if(firstname.value == "") {
        document.getElementById("firstname_error").style.display="inline"
        document.getElementById("firstname_error").style.color="black";
        firstname.style.backgroundColor="red";
        document.getElementById("voornaam").style.color="red";
        is_valid = false;
    }
    else {
        firstname.style.backgroundColor="white";
    }

    // Als het veld lastname leeg is, wordt de error getoond in het veld lastname met een rode achtergrond
    if(lastname.value == "") {
        document.getElementById("lastname_error").style.display="inline";
        document.getElementById("lastname_error").style.color="black";
        lastname.style.backgroundColor="red";
        document.getElementById("achternaam").style.color="red";
        is_valid = false;
    }
    else {
        lastname.style.backgroundColor="white";
    }

    // Als het veld age leeg is, wordt de error getoond in het veld age met een rode achtergrond
    if(age.value == "") {
        document.getElementById("age_error").style.display="inline";
        document.getElementById("age_error").style.color="black";
        age.style.backgroundColor="red";
        document.getElementById("leeftijd").style.color="red";
        is_valid = false;
    }
    else {
        age.style.backgroundColor="white";
    }

    // Als het veld gender leeg is, wordt de error getoond in het veld gender met een rode achtergrond
    if(gender.value == "") {
        document.getElementById("gender_error").style.display="inline";
        document.getElementById("gender_error").style.color="black";
        gender.style.backgroundColor="red";
        document.getElementById("geslacht").style.color="red";
        is_valid = false;
    }
    else {
        gender.style.backgroundColor="white";
    }

    // Als het veld interests leeg is, wordt de error getoond in het veld interests met een rode achtergrond
    if(interests.value == "") {
        document.getElementById("interests_error").style.display="inline";
        document.getElementById("interests_error").style.color="black";
        interests.style.backgroundColor="red";
        is_valid = false;
        document.getElementById("interesses").style.color="red";
    }
    else {
        interests.style.backgroundColor="white";
    }
    
    // Als het veld telephone leeg is, wordt de error getoond in het veld telephone met een rode achtergrond
    if(telephone.value == "") {
        document.getElementById("phone_error").style.display="inline";
        document.getElementById("phone_error").style.color="black";
        telephone.style.backgroundColor="red";
        document.getElementById("telefoon").style.color="red";
        is_valid = false;
    }
    else {
        telephone.style.backgroundColor="white";
    }

    // Als het veld preferred gender leeg is, wordt de error getoond in het veld preferred gender met een rode achtergrond
    if(preferred_gender.value == "") {
        document.getElementById("preferred_gender_error").style.display="inline";
        document.getElementById("preferred_gender_error").style.color="black";
        preferred_gender.style.backgroundColor="red";
        is_valid = false;
        document.getElementById("gewenst_geslacht").style.color="red";
    }
    else {
        preferred_gender.style.backgroundColor="white";
    }

    return is_valid;
}
