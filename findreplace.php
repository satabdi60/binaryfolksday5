<form action="index.php" method="POST">
    <label>Type your Text Here</label><br><br>
    <textarea name="textarea" cols="40" rows="10"></textarea><br><br>
    Search For Text<br>
    <input type="text" name="search"><br><br>
    Replace Text With<br>
    <input type="text" name="replace"><br><br>
    <input type="submit" value="Find and Replace">
</form>

<?php
//This will will take all the values from textarea and text from the html form
if(isset($_POST['textarea']) && isset($_POST['search']) && isset($_POST['replace']))
{
    //stores the value from the post variables
     $text = $_POST['textarea'];
     $search = $_POST['search'];
    $replace = $_POST['replace'];
    //This is to point to the string characters to search for the matching pair
    $offset = NULL;
    //This variable is used to store the length of the search string 
    $searchLength = strlen($search);
    
    //validation is made to check if all the fields are entered
    if(!empty($text) && !empty($search) && !empty($replace)){
        
        //The while loop takes three parameters 
        //first parameter will take the current text 
        //second parameter will take the text which wants to search
        //third parameter will take the character where the search is matched
        while ($stringPostion = strpos($text, $search, $offset))
                {
                    //This will check if we have visited all the characters of the string
                    $offset = $stringPostion + $searchLength;
                    //This function takes four parameters 
                    //First param checks the string to check
                    //second param replaces the find string
                    //third param specify from where the string replacing should start
                    //fourth param specify how many character should be replaced
                    $text = substr_replace($text, $replace, $stringPostion, $searchLength);
                }
                echo $text;
    }else{
        echo 'Please fill all the field';
    }
}
