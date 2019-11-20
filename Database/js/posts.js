/*
    Author:     Matthis Le Texier
    Purpose:    Functions related to test posts' data 
                Handle requesting and parsing the answer to print it
*/

// Get all the post by author (username)
function getPostByUsername(username) {
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        let data = JSON.parse(this.responseText);

        var tableHTML = "\
            <table style='width:100%'>\
                <tr>\
                    <th>ID</th>\
                    <th>Author</th>\
                    <th>Title</th>\
                    <th>Body</th>\
                    <th>Likes</th>\
                    <th>Date</th>\
                    <th>Last Update</th>\
                </tr>\
        ";

        for(var i = 0; i < data.length; i++) {
            tableHTML += "\
            <tr>\
                <td>" + data[i].id + "</td>\
                <td>" + data[i].username + "</td>\
                <td>" + data[i].title + "</td>\
                <td><details><summary>See Content</summary>" + data[i].body + "</details></td>\
                <td>" + data[i].likes + "</td>\
                <td>" + data[i].date + "</td>\
                <td>" + data[i].last_update + "</td>\
            </tr>\
            ";
        }

    
        tableHTML += "</table>";
        tableHTML += "<p style='font-weight: bold;'>Post count : " + data.length + "</p>";
    
        document.getElementById('user-post-table').innerHTML = tableHTML;
      }
    };
    xmlhttp.open("GET", "php/post/getPost.php?username=" + username, true);
    xmlhttp.send();
    return false;
}