/*
    Author:     Matthis Le Texier
    Purpose:    Functions related to test users' data 
                Handle requesting and parsing the answer to print it
*/


// Get all the user's data found by username
function getUserData(username) {
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        let data = JSON.parse(this.responseText);
        document.getElementById("username").innerHTML = 'Username: ' + data.username;
        document.getElementById("admin").innerHTML = 'Admin: ' + data.admin;
      }
    };
    xmlhttp.open("GET", "php/user/getUserData.php?username=" + username, true);
    xmlhttp.send();
    return false;
}

// Get all users
function getUserList() {
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        let data = JSON.parse(this.responseText);

        var tableHTML = "\
            <table style='width:100%'>\
                <tr>\
                    <th>ID</th>\
                    <th>Username</th>\
                    <th>Is Admin ?</th>\
                </tr>\
        ";

        for(var i = 0; i < data.length; i++) {
            tableHTML += "\
            <tr>\
                <td>" + data[i].id + "</td>\
                <td>" + data[i].username + "</td>\
                <td>" + data[i].admin + "</td>\
            </tr>\
            ";
        }
    
        tableHTML += "</table>";
        tableHTML += "<p style='font-weight: bold;'>User count : " + data.length + "</p>";
    
        document.getElementById('user-table').innerHTML = tableHTML;
      }
    };
    xmlhttp.open("GET", "php/user/getUserList.php", true);
    xmlhttp.send();
    return false;
}