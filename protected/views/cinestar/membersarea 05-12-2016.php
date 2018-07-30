<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<div class="wrapper col-md-12" style="margin: 1em 0 0; padding:0 7.3em;">
    <div class="cinestarabout">
        <div class="theme_color theme_padding" style="font-family: myFirstFontBold"><h2>Member Privilege </h2><hr>
        <h5><span style="color: #585858">Home / </span><span style="color: #ffffff">Membership<span></h5><hr>
        </div>
        <div class="body_text">
            <p>
                The Cinegold Plex also provides Membership for their customers. Membership card holder will avail number
                of benefits from The Cinegld Plex.  Members can avail benefits like free ticket every ''Tuesdays''
                on buying a ticket by a friend or family, on-line ticket purchase, Queue free Members ticketing counter,
                weekly movie schedule via email and Daily movie schedule via sms, Renewal reward, invitations on special
                screening, Prepaid system-pay, and get special discount on our international and national branding partners.
            </p>

            <div style="margin-top: 2em;" class="text-center">
                <a id="" data-locationid="" class="tab lounge gold_lounge_selected selected"  href="http://online.cinegoldplex.com.pk/CGERP/Customers/CustomerRegistration.aspx?CType=Customer" name="gold" style="padding: .4em 1em; float: left; margin:1%;">JOIN MEMBERSHIP ISB</a>
                <a id="lhr_membership" data-locationid="" class="tab lounge gold_lounge_selected selected"  href="#" name="gold" style="float: left; margin:1%; padding: .4em 1em;">JOIN MEMBERSHIP LHR</a>
            </div>

        </div>
    </div>
</div>

<div style="clear: both"></div>
<div class="wrapper col-md-12" style="padding: 0 7.3em; display: ">
    <div class="cinestarabout">
        <div class="theme_color theme_padding" style="font-family: myFirstFontBold"><h2>Partners</h2></div>

       <div class="body_text">
           <?php $partners = $para; ?>
           <?php for($i=0; $i<count($partners); $i++){ ?>
                       <div class="box">
                           <div class="img_class"><img src="<?php echo Yii::app()->request->baseUrl.$partners[$i]['img_url']; ?>"></div>
                           <div class="data_class"><p><?php echo $partners[$i]['title']; ?></p></div>
                       </div>
           <?php } ?>
<!--            <div class="box">-->
<!--                <div class="img_class"><img src="arena_images/optp.png"></div>-->
<!--                <div class="data_class"><h3>ONE POTATO TWO POTATO</h3><p><strong>5%</strong> OFF ON ALL DEALS</p><p>M.M.ALAM Rd, Lahore</p><p>0333 8116561</p></div>-->
<!--            </div>-->
<!---->
<!--            <div class="box">-->
<!--                <div class="img_class"><img src="arena_images/Hot-Spot.png"></div>-->
<!--                <div class="data_class"><h3>THE HOT SPOT</h3><p><strong>10%</strong> OFF ON ALL DEALS</p><p>HQ 8.STREET 13.Islamabad</p><p>(051) 2610841</p></div>-->
<!--            </div>-->
<!---->
<!--            <div class="box">-->
<!--                <div class="img_class"><img src="arena_images/Pangaea-Restaurant.png"></div>-->
<!--                <div class="data_class"><h3>PANGAEA RESAURANT</h3><p><strong>15%</strong> OFF ON ALL DEALS</p><p>18 MARGALLA Ave ISLAMABAD</p><p>(051) 8311065</p></div>-->
<!--            </div>-->
<!---->
<!--            <div class="box">-->
<!--                <div class="img_class"><img src="arena_images/Wang-Fu.png"></div>-->
<!--                <div class="data_class"><h3>WANG FU</h3><p><strong>15%</strong> OFF ON ALL DEALS</p><p>18 MARGALLA Ave ISLAMABAD</p><p>(051) 8311065</p></div></div>-->
<!--            </div>-->
       </div>
    </div>
</div>


<div class="wrapper col-md-12" style="padding: 0 7.3em; display: ">
    <div class="cinestarabout">
        <div class="theme_color theme_padding" style="font-family: myFirstFontBold"><h2>Cinegold Plex Membership Perks & Privileges</h2></div>

        <div class="body_text">
            <ol>
                <li>Free Gift voucher on membership registration. (T&C will apply).</li>
                <li>Free SMS Alerts.</li>
                <li>Get FREE Ticket on purchasing ticket(s) *Tuesday only.</li>
                <li>20% Discount on Tickets.</li>
                <li>10 % Discount on Food Items.</li>
                <li>10% Discount in Gold Restaurant.</li>
                <li>Online Booking.</li>
                <li>Exclusive Membership Counter.</li>
                <li>Discount on VIP Lounge.</li>
                <li>Points generation system.</li>
                <li>1 Free ticket on 200 points, 2 Free tickets on 300 points, and 1 VIP Box (7 seater) on redeeming 700 Points *For Red Lounge.</li>
                <li>Exclusive Passes on Red Carpet & Premier Events.</li>
                <li>Top Up Facility (Pre-paid system).</li>
                <li>2 x Free Gift vouchers on Membership Renewal. (T&C will apply).</li>
            </ol>
        </div>
    </div>

</div>


