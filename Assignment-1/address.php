<!DOCTYPE html>
<html lang="en">
<head>
  <meta title="Address form">
  <meta type="Student" name="Mitchell Fountain">
  <meta charset="utf-8">
  <link href="css/basics.css" rel="stylesheet" />
</head>
<body>
    <main>
        <form action="payment.php" method="get">
            <fieldset>
                <legend>Contact details</legend>
                <div>
                    <label for="fname">First name</label>
                    <input type="text" name="fname" autocomplete="given-name" required/>
                </div>
                <br/>
                <div>
                    <label for="lname">Last name</label>
                    <input type="text" name="lname" autocomplete="family-name" required/>
                </div>
                <br/>
                <div>
                    <label for="phone">Phone Number: </label>
                    <input type="tel" inputmode="numeric" name="phone" placeholder="000 000 0000" autocomplete="tel" required/>
                </div>
                <br/>
                <div>
                    <label for="email">Email: </label>
                    <input type="email" name="email" placeholder="example@mail.com" autocomplete="email" required/>
                </div>
            </fieldset>
            <br/>
            <fieldset>
                <legend>Address</legend>
                <div>
                    <label for="address">Address</label>
                    <input type="address" name="address" required/>
                </div>
                <br/>
                <div>
                    <label for="prov">Province</label>
                    <select name="prov" id="prov" required>
                        <optgroup label="Provinces and Territories">
                        <option value="AB" disabled>Alberta</option>
                        <option value="BC" disabled>British Columbia</option>
                        <option value="MB" disabled>Manitoba</option>
                        <option value="NB" disabled>New Brunswick</option>
                        <option value="NF" disabled>Newfoundland</option>
                        <option value="NS" disabled>Nova Scotia</option>
                        <option value="ON" >Ontario</option>
                        <option value="PE" disabled>PEI</option>
                        <option value="QB" disabled>Québec</option>
                        <option value="SK" disabled>saskatchewan</option>
                        <option value="NT" disabled >Northwest Territories</option>
                        <option value="NV" disabled >Nunavut</option>
                        <option value="YK"disabled >Yukon</option>
                        </optgroup>
                        <optgroup label="Local delivery only"></optgroup>
                        <option value=""disabled >I ain't going that far :/</option>
                        </optgroup>
                    </select>
                </div>
            </fieldset>
            <br/>
            <fieldset>
                <legend>Order update tracking</legend>
                <div>
                    <input type="checkbox" name="tracking" value="sms" checked/>
                    <label for="tracking">Text</label>
                </div>
                <div>
                    <input type="checkbox" name="tracking" value="email"/>
                    <label for="tracking">Email</label>
                </div>
                <div>
                    <input type="checkbox" name="tracking" value="pidgeon"/>
                    <label for="tracking">Carrier Pidgeon</label>
                </div>
            </fieldset>
            <br/>
            <div>
                <input class="button" type="reset" value ="Reset page"/>
                <input class="button" type="submit" value="Submit"/>
            </div>
        </form>
    </main>
</body>
<?php 
include("includes/footer.php")
?>
</html>