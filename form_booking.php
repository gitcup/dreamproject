<form action="process/add_booking.php" method="POST" class="form-horizontal" style=" font-size: 14px;">
    <fieldset>

        <!-- Form Name -->
        <legend>Booking form</legend>


        <!-- Text input-->
        <div class="form-row">

            <input id="username_get" name="username" type="text" value="" class="form-control input-md" hidden>
            <!-- <input  name="booking_id" type="text" value="" class="form-control input-md" hidden> --> 

            <div class="col-md-3">
                <label class="col-md-4 control-label" for="ship_name">SHIPPING NAME</label>
                <input name="ship_name" type="text" placeholder="" class="form-control input-md">

            </div>
            <div class="col-md-3">
                <label class="col-md-4 control-label" for="ship_name">Booking NO.</label>
                <input name="invoice_id" type="text" placeholder="" id="booking_id_get" class="form-control input-md" readonly>

            </div>

        </div>

        <!-- Text input-->
        <div class="form-row">

            <div class="col-md-4">
                <label class="col-md-4 control-label" for="port_loading">PORT OF LOADING</label>
                <input id="port_loading" name="port_loading" type="text" placeholder="" class="form-control input-md">

            </div>
            <div class="col-md-3">
                <label class="col-md-4 control-label" for="port_loading">ETD</label>
                <input id="etd" name="etd" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-row">

            <div class="col-md-4">
                <label class="col-md-4 control-label" for="port_discharge">PORT OF DISCHARGE</label>
                <input id="port_discharge" name="port_discharge" type="text" placeholder=""
                    class="form-control input-md">
            </div>
            <div class="col-md-3">
                <label class="col-md-4 control-label" for="port_loading">ETA</label>
                <input id="eta" name="eta" type="text" placeholder="" class="form-control input-md">

            </div>

        </div>

        <!-- Text input-->
        <div class="form-row">

            <div class="col-md-4">
                <label class="col-md-4 control-label" for="port_delivery">PORT OF DELIVERY</label>
                <input id="port_delivery" name="port_delivery" type="text" placeholder="" class="form-control input-md">

            </div>

            <div class="col-md-3">
                <label class="col-md-4 control-label" for="port_loading">ETA</label>
                <input id="eta" name="eta_2" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-row">

            <div class="col-md-4">
                <label class="col-md-4 control-label">FEEDER VISSEL</label>
                <input id="feeder_ves" name="feeder_vessel" type="text" placeholder="" class="form-control input-md">

            </div>
            <div class="col-md-3">
                <label class="col-md-4 control-label">FEEDER VOYAGE</label>
                <input id="feeder_voyage" name="feeder_voyage" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-row">

            <div class="col-md-4">
                <label class="col-md-4 control-label">MOTHER VESSEL</label>
                <input id="mother_vel" name="mother_vessel" type="text" placeholder="" class="form-control input-md">
            </div>

            <div class="col-md-3">
                <label class="col-md-6 control-label">MOTHER VOYAGE</label>
                <input id="mother_voyage" name="mother_voyage" type="text" placeholder="" class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-row">

            <div class="col-md-4">
                <label class="col-md-4 control-label" for="weight">VOLUME</label>
                <input id="weight" name="quantity_volume" type="text" placeholder="" class="form-control input-md">
            </div>

            <div class="col-md-2">
                <label class="col-md-3 control-label">Unit</label>
                <select name="unit_volume" placeholder="" class="form-control input-md">
                    <!-- <option value="CBM">CBM</option> -->
                    <option value="CBM">CBM</option>
                    <!-- <option value="FT.">FT.</option> -->
                </select>
            </div>
        </div>


        <!-- Text input-->
        <div class="form-row">

            <div class="col-md-4">
                <label class="col-md-4 control-label" for="weight">WEIGHT</label>
                <input id="weight" name="weight" type="text" placeholder="" class="form-control input-md">
            </div>

            <div class="col-md-2">
                <label class="col-md-3 control-label" for="weight">Unit</label>
                <select name="weight_unit" placeholder="" class="form-control input-md">
                    <!-- <option value="CBM">CBM</option> -->
                    <option value="KG">KG</option>
                    <!-- <option value="FT.">FT.</option> -->
                </select>
            </div>


        </div>
        <!-- Text input-->
        <div class="form-row">

            <div class="col-md-4">
                <label class="col-md-4 control-label" for="weight">QUANTITY</label>
                <input name="quantity" type="text" placeholder="" class="form-control input-md">
            </div>

            <div class="col-md-2">
                <label class="col-md-3 control-label" for="weight">Unit</label>
                <select name="quantity_unit" placeholder="" class="form-control input-md">
                    <option value="BOX">BOX</option>
                    <option value="CTN">CTN</option>
                    <option value="PKG">PKG</option>
                    <option value="PALLET">PALLET</option>
                </select>
            </div>


        </div>




        <div class="col-md-3">
            <label class="col-md-4 control-label" for="loading_at">TYPE</label>
            <select name="type" placeholder="" class="form-control input-md">
                <option value="4 WHEELS">4 WHEELS</option>
                <option value="6 WHEELS">6 WHEELS</option>
                <option value="20 'FT.">20 'FT.</option>
                <option value="40 'FT.">40 'FT.</option>
            </select>

        </div>

        </div>

        <!-- Text input-->
        <div class="form-row">

            <div class="col-md-3">
                <label class="col-md-4 control-label" for="loading_at">LOADING AT</label>
                <input id="loading_at" name="loading_at" type="text" placeholder="" class="form-control input-md">
            </div>
            <div class="col-md-3">
                <label class="col-md-4 control-label" for="loading_at">TRANSOPTER</label>
                <input name="transporter" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-row">

            <div class="col-md-3">
                <label class="col-md-4 control-label" for="loading_at">LOADING DATE</label>
                <input id="loading_at" name="loading_date" type="text" placeholder="" class="form-control input-md">
            </div>
            <div class="col-md-3">
                <label class="col-md-4 control-label" for="loading_at">TEL</label>
                <input name="transporter_tel" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-row">

            <div class="col-md-3">
                <label class="col-md-4 control-label" for="contact">CONTACT </label>
                <input id="contact" name="contact" type="text" placeholder="" class="form-control input-md">
            </div>


            <div class="col-md-3">
                <label class="col-md-4 control-label" for="tel">Shiping Contact</label>
                <input name="shiping_contact" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>
        <br>
        <!-- Text input-->
        <div class="form-row">

            <div class="col-md-3">
                <label class="col-md-4 control-label" for="contact">Tel</label>
                <input name="contact_tel" type="text" placeholder="" class="form-control input-md">
            </div>


            <div class="col-md-3">
                <label class="col-md-4 control-label" for="tel">Tel</label>
                <input name="shiping_tel" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-row">

            <div class="col-md-3">
                <label class="col-md-4 control-label" for="contact">CLOSING DATE</label>
                <input name="closing_date" type="text" placeholder="" class="form-control input-md">
            </div>


            <div class="col-md-3">
                <label class="col-md-4 control-label" for="tel">TIME</label>
                <input name="time" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>



        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="no_of_containner">NO. OF CONTAINER /SIZE /TYPE</label>
            <div class="col-md-3">
                <input name="no_of_containner" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

    </fieldset>
    <div class="col-md-3">
        <button class="btn btn-success" type="submit">SUBMIT</button>
    </div>
    <br>
</form>
<!-- 
<script>
$(document).ready(function() {
    // $("#profile").hide();
    // $("#booking_form").hide();
    $("#next").click(function() {
        // $("#profile_form").hide();
        // $("#status_form").hide();
        // $("#next").fadeIn();
        $("#form-1").fadeOut();
    });



});
</script> -->