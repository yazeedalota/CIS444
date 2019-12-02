/*
    Author:     Matthis Le Texier
    Purpose:    Functions related to posts' data 
                Handle requesting and parsing the answer to print it
*/

// Get all the post by tag (tag)
function getPostByTag(tag) {
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let data = JSON.parse(this.responseText);

            var postHTML = "";

            for (var i = 0; i < data.length; i++) {
                var post_id = data[i].id;

                // Add the content of the post
                postHTML += data[i].body;

                // Add the comment section just after the post
                postHTML += "\
                    <!---Comment Section--->\
                    <form action='/team_e/back/saveComment.php?post_id=" + post_id + "' method='POST' class='comment'>\
                        <label> Name: <br>\
                            <input type='text' name='name' class='Input' style='width: 200px' required>\
                        </label>\
                        <br><br>\
                        <label> Comment: <br>\
                            <textarea name='comment' class='Input' style='width: 500px;' required></textarea>\
                        </label>\
                        <br><br>\
                        <input type='submit' name='Submit' value='Submit Comment' class='Submit'>\
                    </form>\
                ";
            }

            // get the html element where we'll insert the loaded content
            document.getElementById('content').innerHTML = postHTML;
        }
    };
    xmlhttp.open("GET", "/team_e/back/getPost.php?tag=" + tag, true);
    xmlhttp.send();
    return false;
}