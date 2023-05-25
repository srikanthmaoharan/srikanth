
<!DOCTYPE html>
<html>
    <head>
        <title>Friday schedule by Srikanth</title>
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
.schedule{
    position: relative;
    width: 600px;
    height: 300px;
    background-color: rgb(0, 255, 183);
    box-shadow: 0 0 30px #000000;
    border-radius: 20px;
    padding: 40px;
    overflow: hidden;
}
.schedule {
    animation: animate 1s linear infinite;
}
@keyframes animate {
    100%{
        filter: hue-rotate(360deg);
    }}
    .schedule table{
        text-align: center;
    margin-left: auto;
    margin-right: auto;
    margin-top:2cm;
    margin-top: auto;
    }
</style>
</head>
    <body>
        <div class="schedule">
            <form>
            <table bgcolor="skyblue" width="500">
                <tr bgcolor="lightgreen">
                    <th>Schedule</th>
                    <th>Timing</th>
                </tr>
                <tr bgcolor="lightgrey">
                    <td>Wake up</td><td>5:00AM</td>
                </tr>
                <tr bgcolor="lightgrey">
                    <td>Daily workouts</td><td>5:45AM</td>
                </tr>
                <tr bgcolor="lightgrey">
                    <td>Off to Job</td><td>8:30AM</td>
                </tr>
                <tr bgcolor="lightgrey">
                    <td>Lunch time</td><td>1:00PM</td>
                </tr>
                <tr bgcolor="lightgrey">
                    <td>Off to home</td><td>6:00PM</td>
                </tr>
                <tr bgcolor="lightgrey">
                    <td>Night out</td><td>7:00PM</td>
                </tr>
                <tr bgcolor="lightgrey">
                    <td>Dinner</td><td>8:00PM</td>
                </tr>
                <tr bgcolor="lightgrey">
                    <td>Off to bed</td><td>9:00PM</td>
                </tr>
            </table>
            </form>
        </div>
    </body>
</html>