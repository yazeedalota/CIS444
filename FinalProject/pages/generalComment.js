function getComments(category) {
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        let data = JSON.parse(this.responseText);

        var tableHTML = "\
            <table style='width:100%'>\
                <tr>\
                    <th>User</th>\
                    <th>Comment</th>\
                    <th>Date posted</th>\
                </tr>\
        ";

        for(var i = 0; i < data.length; i++) {
            tableHTML += "\
            <tr>\
                <td>" + data[i].username + "</td>\
                <td>" + data[i].body + "</td>\
                <td>" + data[i].date + "</td>\
            </tr>\
            ";
        }

    
        tableHTML += "</table>";
    
        document.getElementById('user-comment-table').innerHTML = tableHTML;
      }
    };
    xmlhttp.open("GET", "getComments.php?category=" + category, true);
    xmlhttp.send();
    return false;
}