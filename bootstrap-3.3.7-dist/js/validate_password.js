/**
 * Created by thomasmulally on 3/8/17.
 */
function checkPass() {
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('password');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field
    //and the confirmation field
    if (pass1.value == pass2.value) {
        //The passwords match.
        //Set the color to the good color and inform
        //the user that they have entered the correct password
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    } else {
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}

function mask(f){
    tel='(';
    var val =f.value.split('');
    for(var i=0; i<val.length; i++){
        if( val[i]=='(' ){
            val[i]=''
        }
        if( val[i]==')' ){
            val[i]=''
        }
        if( val[i]=='-' ){
            val[i]=''
        }
        if( val[i]=='' ){
            val[i]=''
        }
    }
//
    for(var i=0; i<val.length; i++){
        if(i==3){ val[i]=val[i]+')' }
        if(i==7){ val[i]=val[i]+'-' }
        if(i==10){ val[i]=val[i]+'-' }
        tel=tel+val[i]
    }
    f.value=tel;
}