<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        * {
            background-image: linear-gradient(rgb(92, 189, 221), rgb(122, 195, 219));
        }

        input[type=text],
        input[type=mail],
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: grey;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            font-size: 18px;
        }

        input[type=submit]:hover {
            background-color: rgb(111, 183, 228);
        }

        .container {
            box-sizing: border-box;
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            width: 400px;
            margin-top: 75px;
            margin-left: 180px;
        }

        img {
            float: right;
            margin-left: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

            <label for="mail">Email</label>
            <input type="mail" id="mail" name="mail" placeholder="Your mail...">
            <label for="subject">Comments and Queries</label>
            <textarea id="subject" name="subject" placeholder="Write something... " style="height:200px"></textarea>

            <input type="submit" value="Submit ">

    </div>
    </form>


</body>

</html>