<!DOCTYPE html>
<html lang="en">
<head>
  <meta title="Payment details">
  <meta type="Author" name="Mitchell Fountain">
  <meta charset="utf-8">
  <link href="css/basics.css" rel="stylesheet" />
</head>
<!--Page to grab card payment details -->
<body>
    <main>
        <form action="confirmation.php" method="get">
            <fieldset>
                <!--Name and card details -->
                <legend>Payment details</legend>
                <div>
                    <label for="bfname">First name on Card</label>
                    <input type="text" name="bfname" autocomplete="cc-given-name" required/>
                </div>
                <br/>
                <div>
                    <label for="blname">Last name on Card</label>
                    <input type="text" name="blname" autocomplete="cc-family-name" required/>
                </div>
                <br/>
                <div>
                    <label for="credit">Credit Card Number</label>
                    <input id="credit" type="tel" inputmode="numeric" autocomplete="cc-number" placeholder="xxxx xxxx xxxx xxxx" required>
                </div>
                <br/>
                <div>
                    <label for="credit">CVV</label>
                    <input id="cvv" type="tel" inputmode="numeric" autocomplete="cc-csc" placeholder="xxx" required>
                </div>
                <br/>
                <div>
                    <label for="credit">Expiry</label>
                    <input id="expiry" type="numnber" inputmode="numeric" autocomplete="cc-exp" placeholder="xx/xx" required pattern="(0[1-9]|1[0-2])\/\d{2}" required>
                    <!--JS to make expiry date formatting correct and auto place a '/' -->
                    <script>
                        const exp = document.getElementById('expiry');

                        exp.addEventListener('input', (e) => {
                            let value = e.target.value.replace(/\D/g, '');
                            
                            if (value.length >=3) {
                                value = value.slice(0,2) + '/' + value.slice(2,4);
                            }
                            e.target.value = value;
                        });
                    </script>
                </div>
            </fieldset>
            <br/>
            <!--billing address section -->
            <fieldset>
                <legend>Billing address</legend>
                <div>
                    <label for="baddress1">Address line 1</label>
                    <input type="address" name="baddress1" autocomplete="address-line1" required/>
                    <label for="baddress2">Address line 2</label>
                    <input type="address" name="baddress2" autocomplete="address-line2"/>
                </div>
                <br/>
                <div>
                    <label for="postal">Postal code</label>
                    <input type="address" name="postal" placeholder="X1X1X1" autocomplete="postal-code" required/>
                </div>
                <br/>
                <div>
                    <label for="bprov">Province</label>
                    <select name="bprov" id="prov" required>
                        <optgroup label="Provinces and Territories">
                        <option value="AB" >Alberta</option>
                        <option value="BC" >British Columbia</option>
                        <option value="MB" >Manitoba</option>
                        <option value="NB" >New Brunswick</option>
                        <option value="NF" >Newfoundland</option>
                        <option value="NS" >Nova Scotia</option>
                        <option value="ON" checked>Ontario</option>
                        <option value="PE" >PEI</option>
                        <option value="QB" >Québec</option>
                        <option value="SK" >saskatchewan</option>
                        <option value="NT"  >Northwest Territories</option>
                        <option value="NV"  >Nunavut</option>
                        <option value="YK" >Yukon</option>
                        </optgroup>
                    </select>
                </div>
            </fieldset>
            <div>
                <!--S&R buttons -->
                <input class="button" type="reset" value ="Reset page"/>
                <input class="button" type="submit" value="Submit"/>
            </div>
        </form>
        <br/>
    </main>
</body>
<!--Footer -->
<?php 
include("includes/footer.php")
?>
</html>