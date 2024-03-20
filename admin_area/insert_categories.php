<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            
        }

        .container {
            margin-top: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-wrapper {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 12cm;
            width: 25cm;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group-text {
            background-color: #e9ecef;
            color: #495057;
            border: 1px solid #ced4da;
            border-radius: 0.25rem 0 0 0.25rem;
            padding: 10px;
        }

        .form-control {
            width: calc(100% - 40px); 
            padding: 10px;
            border-radius: 0 0.25rem 0.25rem 0;
            border: 1px solid #ced4da;
        }

        .bg-info {
            background-color: #17a2b8;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 0.25rem;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="form-wrapper">
        <form action="" method="post" class="first_form">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" name="cat_title" placeholder="Insert categories" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <input type="submit" class="form-control bg-info" name="insert_cat" value="Insert Categories" aria-label="Username" aria-describedby="basic-addon1">
        </form>
    </div>
</div>

</body>
</html>
