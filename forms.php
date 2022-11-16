<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body 
<?php
    // if(isset($_POST['submit_form'])) {
    //     backgroundColor($_POST['color']);
    // }
?>
>
    <form method="post">
        Single-line input text: <input type="text" name="input_text" id=""><br>
        Multiple-line input text: <br>
        <textarea name="multiline_text" id="" cols="30" rows="10"></textarea> <br>
        Radio buttons: <br>
        <label><input type="radio" name="select_radio" value="Option 1"> Option 1 <br></label>
        <label><input type="radio" name="select_radio" value="Option 2"> Option 2 <br></label>
        Checkboxes: <br>

        <input type="checkbox" name="select_checkbox[]" value="Option 1"> Option 1 <br>
        <input type="checkbox" name="select_checkbox[]" value="Option 2"> Option 2 <br>
        <input type="checkbox" name="select_checkbox[]" value="Option 3"> Option 3 <br>
        <input type="checkbox" name="select_checkbox[]" value="Option 4"> Option 4 <br>

        Calendar: <br>
        <input type="date" name="calendar" id=""><br>
        File Upload: <br>
        <input type="file" name="file_upload" id=""><br>
        Color: <br>
        <input type="color" name="color" id=""> <br>
        Dropdown lists: <br>
        <select name="dropdownLists" id="">
            <option value="Option 1">Option 1</option>
            <option value="Option 2">Option 2</option>
            <option value="Option 3">Option 3</option>
            <option value="Option 4">Option 4</option>
            <option value="Option 5">Option 5</option>
        </select><br>
        <input type="submit" name="submit_form" value="Submit Form"> 
    </form>
    <br><br><br><br><br><br>
    <?php
        if(isset($_POST['submit_form'])) {
            $input_text = $_POST['input_text'];
            $multiline_text = $_POST['multiline_text'];
            $selected_radio = $_POST['select_radio'];
            $the_checkbox = $_POST['select_checkbox'];
            $selected_date = $_POST['calendar'];
            $fulldate = date("F d, Y", strtotime($selected_date));
            $dropdownList = $_POST['dropdownLists'];

            echo "User typed: $input_text <br>";
            echo "User typed: " . $_POST['input_text'] . "<br>";

            echo "User typed in multi-line text: $multiline_text <br>";
            echo "User typed in multi-line text: " . $_POST['multiline_text'] . "<br>";

            echo "The selected radio option is: $selected_radio <br>";
            echo "The selected radio option is: ". $_POST['select_radio']. "<br>";

            echo "The selected checkbox options are: ";
            foreach ($the_checkbox as $value) {
                echo "$value ";
            }

            echo "The selected date is: $selected_date <br>";
            echo "The selected date is: " . $_POST['calendar'] . "<br>";

            echo "The full date is: $fulldate <br>";

            echo "The selected list item is: $dropdownList <br>";
            echo "The selected list item is: ". $_POST['dropdownLists']. "<br>";
        }

        function backgroundColor($color) {
            echo "style='background-color:$color'";
        }
    ?>  
</body>
</html>