<?php
require 'confiig.php';
if (isset($_POST["submit"])) {
    $eventname = $_POST["eventname"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $location = $_POST["location"];
    $guest = $_POST["guest"];
    $pay = $_POST["pay"];


    $sql = "INSERT INTO `form` (`eventname`, `date`, `time`, `location`, `guest`, `pay`) VALUES ('$eventname', '$date', '$time', '$location', '$guest', '$pay')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo " your Event details submited sucessfully..<br>";
    } else {
        echo "Event details is not submited because ->" . mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <head>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;

            }

            body {


                background-color: #333;
                margin: 0;
                padding: 0;
                overflow: hidden;


            }





            .container {
                max-width: 800px;
                margin: 0 auto;
                padding: 20px;
                background-color: #333;
                box-shadow: 0 0 10px aqua;
                border-radius: 5px;
                outline-color: aqua;
                color: aqua;
                border: 2px solid aqua;
                font-family: 'Pacifico', cursive;

            }


            #streamlined-planning {
                padding: 40px;
                text-align: center;
            }

            #streamlined-planning h2 {
                font-size: 2em;
                margin-bottom: 15px;
                color: aqua;
                font-family: 'Pacifico', cursive;

            }

            .feature {
                margin-bottom: 7px;
                text-align: left;
            }


            .form-group {
                margin-bottom: 13px;

            }

            .form-group label {
                display: block;
                font-size: 1.1em;

                color: aqua;
            }

            .form-group input,
            .form-group textarea,
            button {
                width: 50%;

                font-size: 1em;
                border: 1px solid aqua;
                border-radius: 2px;
                font-family: 'Pacifico', cursive;

            }

            textarea {
                height: 10px;
                width: 25px;
                font-family: 'Pacifico', cursive;

            }

            button {
                color: aqua;
                background-color: black;
                border: none;
                cursor: pointer;
            }

            button:hover {
                color: black;
                background-color: white;
            }

            ul {
                list-style-type: none;
                padding: 0;
            }

            ul li {
                padding: 10px;
                border-bottom: 8px solid aqua;
            }

            .explore-button {
                display: inline-block;
                padding: 15px 40px;
                font-size: 18px;
                color: aqua;
                background-color: #111;
                border: none;
                border-radius: 30px;
                text-align: center;
                text-decoration: none;
                position: relative;
                overflow: hidden;
                transition: background-color 0.3s, box-shadow 0.3s;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            }

            .explore-button:hover {
                background-color: white;

                box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
            }

            .explore-button:before {
                content: '→';
                position: absolute;
                top: 50%;
                right: 20px;
                transform: translateY(-50%);
                font-size: 24px;
                transition: right 0.3s;
            }

            .explore-button:hover:before {
                right: 10px;
            }

            .explore-button:active {
                transform: translateY(1px);
            }
        </style>

    </head>

<body>



    <section id="streamlined-planning">
        <div class="container">
            <div class="animated-background ">


                <div class="feature"></div>

                <h2>Streamlined Planning Efforts</h2>


                <form class=" event_planner" action="formm.php" method="post" id="event-page-form" autocomplete="off">

                    <div class="form-group">
                        <label for="eventname"> EventName:</label>
                        <input type="text" name="eventname" id="eventname" required value="">
                    </div>

                    <div class="form-group">
                        <label for="date"> DATE:</label>
                        <input type="date" name="date" id="date" required value="">
                    </div>

                    <div class="form-group">
                        <label for="time"> Time:</label>
                        <input type="time" name="time" id="time" required value="">

                    </div>

                    <div class="form-group">
                        <label for="location"> LOCation:</label>
                        <input type="location" name="location" id="location" required value="">
                    </div>


                    <div class="form-group">
                        <label for="guest"> Enter how many people will join this event
                        </label>
                        <input type="placeholder" name="guest" id="guest" required value="">
                    </div>

                    <div class="form-group">
                        <label for="ticket-type">Ticket Type:</label>
                        <select id="ticket-type" name="ticket-type">
                            <option value="">Select ticket type</option>
                            <option value="general">General Admission</option>
                            <option value="vip">VIP Admission</option>
                    </div>
                    <div class="form-group">
                        <label for="pay"> pay:</label>
                        <input type="pay" name="pay" id="pay" required value="">
                    </div>


                    <div class="form-group">
                        <button type="submit" name="submit"> create event</button>
                    </div>
                </form>

                <a href="budget.php" class="explore-button" aria-label="Explore More">Track YOur Budget</a>
            </div>
        </div>
        </div>
    </section>


</body>

</html>