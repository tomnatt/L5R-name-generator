<form method="get" action=".">
    <label>
        Number: 
        <input type="text" id="number" name="number" <?php echo (isset($_GET["number"]) ? 'value="'.$_GET["number"].'" ' : ""); ?>/>
    </label>
    <label>
        Gender: 
        <select name="gender">
            <option value="male"<?php echo (isset($_GET["gender"]) && $_GET["gender"] == "male" ? ' selected="selected"' : ""); ?>>Male</option>
            <option value="female"<?php echo (isset($_GET["gender"]) && $_GET["gender"] == "female" ? ' selected="selected"' : ""); ?>>Female</option>
        </select>
    </label>
    <input type="submit" value="Bring me names!" />
</form>
