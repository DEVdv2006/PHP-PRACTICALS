<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ABC Tours and travels</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">



        
                <h1>Find Tours</h1>
                <form action="handle-form.php" method="post">

                <div class="field-group">
                <label for="first_name" class="field-title">First Name: </label>
                    <input type="text" name="first_name" id = "first_name"  placeholder="enter your first name">
                    
                </div>

                <div class="field-group">
                <label for="email" class="field-title">Email: </label>
                    <input type="email" name="email" id="email" placeholder="enter your email">
                    
                </div>

                <div class="field-group">
                <label for="region" class="field-title">Select Region: </label>
                    <select name="region" id="region"  >
                        <option value="Asia">Asia</option>
                        <option value="Africa">Africa</option>
                        <option value="Australia">Australia</option>
                        <option value="Europe">Europe</option>
                        <option value="North-America">North-America</option>
                        <option value="Mexico">Mexico</option>
                    </select>
                </div>

                <div class="field-group">
                <p>Preferred Season to travel</p>
                    <input type="radio" name="season" id="Summer" value="Summer">
                    <label for="Summer" class="field-title">Summer:</label>
                    <input type="radio" name="season" id="Winter" value="Winter">
                    <label for="Winter" class="field-title">Winter:</label>
                    <input type="radio" name="season" id="Spring" value="Spring">
                    <label for="Spring" class="field-title">Spring:</label>
                    <input type="radio" name="season" id="Monsoon" value="Monsoon">
                    <label for="Monsoon" class="field-title">Monsoon:</label>
                    <input type="radio" name="season" id="Autumn" value="Autumn">
                    <label for="Autumn" class="field-title">Autumn:</label>
                </div>

                <div class="field-group">
                <p>Your Interests</p>
                    <input type="checkbox" name="interests[]" id="photography" value="Photography">
                    <label for="photography" class="field-title">Photography</label>

                    <input type="checkbox" name="interests[]" id="treking" value="Treking">
                    <label for="treking" class="field-title">Treking</label>

                    <input type="checkbox" name="interests[]" id="star-gazing" value="Star-Gazing">
                    <label for="star-gazing" class="field-title">Star-Gazing</label>

                    <input type="checkbox" name="interests[]" id="bird-watching" value="Bird-Watching">
                    <label for="bird-watching" class="field-title">Bird-Watching</label>

                    <input type="checkbox" name="interests[]" id="camping" value="Camping">
                    <label for="camping" class="field-title">Camping</label>
                </div>

                <div class="field-group">
                <label for="participants" class="field-title">Total No of Participants</label>
                    <input type="number" name="participants" id="participants">

                </div>


                <div class="field-group">
                <label for="message" class="field-title">Tell about your requirement's</label>
                    <textarea name="message" id="message" ></textarea>
                    
                </div>


                <div class="field-group">
                <input type="hidden" name="token" value="">
                    <button type="submit">SUBMIT INFORMATION</button>
                </div>       
                </form>

        </div>

    </body>
</html>