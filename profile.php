<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile portfolio</title>
        <style type="text/css">
            @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap');
*{
    font-family: 'Quicksand', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: black;
}
.port {
    position: relative;
    width: 650px;
    height: 750px;
    background-color: yellow;
    box-shadow: 0 0 30px #ffbe0b;
    border-radius: 20px;
    padding: 40px;
    overflow: hidden;
}
.port {
    animation: animate 1s linear infinite;
}
@keyframes animate {
    100%{
        filter: hue-rotate(360deg);
    }
}
.form-port{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
    transition: 1s ease-in-out;
}
.button     a {
    position: relative;
    width: 120px;
    height: 40px;
    background: #B33771;
    box-shadow: 0 0 10px black;
    font-size: 15px;
    color: white;
    cursor: pointer;
    align: center;
}
.aboutme {
    position: relative;
    margin: 30px 0;
    border-bottom: 2px solid black;
}
.qualification {
    position: relative;
}
.skills {
    position: relative;
    margin: 30px 0;
    border-bottom: 2px solid black;
}
.profile {
    position: relative;
    margin: 30px 0;
    border-bottom: 2px solid black;
}
.aboutme h2{
    text-align: center;
}
.qualification h2{
    text-align: center;
}
.skills h2{
    text-align: center;
}
h2 {
    text-align: center;
    position: relative;
    width: 110px;
    height: 30px;
    background: #ffbe0b;
    box-shadow: 0 0 10px black;
    font-size: 16px;
    color: black;
    font-weight: 500;    border: none;
    border-radius: 30px;
    outline: none;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
}
.qualification table{
    text-align: center;
    margin-left: auto;
    margin-right: auto;
}
.skills ul
{
    margin-left: 2cm;
}

        </style>
    </head>
    <body>
        <div class="port"><form>
            <div class="aboutme">
                <h2><b>About me</b></h2>
                <label><b>Name: </b>Srikanth M</label><br>
                <label><b>DOB: </b>15/05/2004</label><br>
                <label><b>Age: </b>19</label><br>
                <label><b>Gender: </b>Male</label><br>
                <label><b>Phone: </b>+64-8962389566</label><br>
                <label><b>Address: </b>No.24, East ocean gate, Trichy.</label><br>
            </div>
            <div class="qualification">
                <h2><b>Qualification</b></h2><br>
                <table bgcolor="black" width="500">
                    <tr bgcolor="grey">
                        <th>Qualification</th>
                        <th>Academic year</th>
                    </tr>
                    <tr bgcolor="lightgrey">
                        <td>HSC</td>
                        <td>2019-2020</td>
                    </tr>
                    <tr bgcolor="lightgrey">
                        <td>B.Tech</td>
                        <td>2021-2025</td>
                    </tr>
                </table>
            </div>
            <div class="skills">
                <h2><b>Skills</b></h2>
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>PHP</li>
                    <li>SQL</li>
                    <li>C</li>
                </ul>
            </div>
                <h2><b>Daily routine</b></h2><br>
                <div class="button">
                <a href="monday.php">Monday</a>
                <a href="tuesday.php">Tuesday</a>
                <a href="wednesday.php">Wednesday</a>
                <a href="thursday.php">Thursday</a>
                <a href="friday.php">Friday</a>
                <a href="saturday.php">Saturday</a>
            </div>
            <div class="profile">
                <label><b><i>Instagram:   </i></b></label><a href="https://www.instagram.com/mr___15___504/" target="blank">@mr___15___504</a><br>
                <label><b><i>Facebook:   </i></b></label><a href="https://www.facebook.com/profile.php?id=100082407245413" target="blank">@Srikanth</a>
            </div>
        </form>
        </div>
    </body>
</html> 