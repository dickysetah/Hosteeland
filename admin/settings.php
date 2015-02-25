            <div class="listings-content">
                <div class="site-listings-content">
                    <div class="side-listings-wrapper">
                        <div class="side-listings">
                            <ul>
                                <?php
                                    if ($_GET["page"] == "notifications") {
                                        echo '<li><a class="aktif" href="index.php?p=account&page=notifications">Notifications</a></li>';
                                    }else{
                                        if ($_GET["p"] == "notifications") {
                                            echo '<li><a class="aktif" href="index.php?p=account&page=notifications">Notifications</a></li>';
                                        }else{
                                            echo '<li><a href="index.php?p=account&page=notifications">Notifications</a></li>';
                                        }
                                    }

                                    if ($_GET["page"] == "payment-methods") {
                                        echo '<li><a class="aktif" href="index.php?p=account&page=payment-methods">Payment Methods</a></li>';
                                    }else{
                                        if ($_GET["p"] == "trust-and-verification") {
                                            echo '<li><a class="aktif" href="index.php?p=account&page=payment-methods">Payment Methods</a></li>';
                                        }else{
                                            echo '<li><a href="index.php?p=account&page=payment-methods">Payment Methods</a></li>';
                                        }
                                    }

                                    if ($_GET["page"] == "payout-preferences") {
                                        echo '<li><a class="aktif" href="index.php?p=account&page=payout-preferences">Payout Preferences</a></li>';
                                    }else{
                                        if ($_GET["p"] == "payout-preferences") {
                                            echo '<li><a class="aktif" href="index.php?p=account&page=payout-preferences">Payout Preferences</a></li>';
                                        }else{
                                            echo '<li><a href="index.php?p=account&page=payout-preferences">Payout Preferences</a></li>';
                                        }
                                    }

                                    if ($_GET["page"] == "transaction-history") {
                                        echo '<li><a class="aktif" href="index.php?p=account&page=transaction-history">Transaction History</a></li>';
                                    }else{
                                        if ($_GET["p"] == "transaction-history") {
                                            echo '<li><a class="aktif" href="index.php?p=account&page=transaction-history">Transaction History</a></li>';
                                        }else{
                                            echo '<li><a href="index.php?p=account&page=transaction-history">Transaction History</a></li>';
                                        }
                                    }

                                    if ($_GET["page"] == "privacy") {
                                        echo '<li><a class="aktif" href="index.php?p=account&page=privacy">Privacy</a></li>';
                                    }else{
                                        if ($_GET["p"] == "privacy") {
                                            echo '<li><a class="aktif" href="index.php?p=account&page=privacy">Privacy</a></li>';
                                        }else{
                                            echo '<li><a href="index.php?p=account&page=privacy">Privacy</a></li>';
                                        }
                                    }

                                    if ($_GET["page"] == "security") {
                                        echo '<li><a class="aktif" href="index.php?p=account&page=security">Security</a></li>';
                                    }else{
                                        if ($_GET["p"] == "security") {
                                            echo '<li><a class="aktif" href="index.php?p=account&page=security">Security</a></li>';
                                        }else{
                                            echo '<li><a href="index.php?p=account&page=security">Security</a></li>';
                                        }
                                    }

                                    if ($_GET["page"] == "settings") {
                                        echo '<li><a class="aktif" href="index.php?p=account&page=settings">Settings</a></li>';
                                    }else{
                                        if ($_GET["p"] == "settings") {
                                            echo '<li><a class="aktif" href="index.php?p=account&page=settings">Settings</a></li>';
                                        }else{
                                            echo '<li><a href="index.php?p=account&page=settings">Settings</a></li>';
                                        }
                                    }                                    
                                ?>
                                <br></br>
                                <a class="view-prof" href="">Invite Friends</a>
                            </ul>
                        </div>
                    </div>
                    <div class="listings-wrapper">
                        <div class="header-listings-wrapper">
                                <p>Country of Residence</p>
                        </div>
                        <div class="content-listings-soc">
                            <div class="content-wrap">
                                <div class="content-listings">
                                    <form>
                                    <label>Country of Residence </label><select class="name" name="gen">
                                                    <option value="select">Select</option>
                                                    <option value="1">Afghanistan</option>
                                                    <option value="2">Albania</option>
                                                    <option value="3">Algeria</option>
                                                    <option value="4">Andorra</option>
                                                    <option value="5">Angola</option>
                                                    <option value="6">Antigua & Barbuda</option>
                                                    <option value="7">Argentina</option>
                                                    <option value="8">Armenia</option>
                                                    <option value="9">Australia</option>
                                                    <option value="10">Austria</option>
                                                    <option value="11">Azerbaijan</option>
                                                    <option value="12">Bahamas</option>
                                                    <option value="13">Bahrain</option>
                                                    <option value="14">Bangladesh</option>
                                                    <option value="15">Barbados</option>
                                                    <option value="16">Belarus</option>
                                                    <option value="17">Belgium</option>
                                                    <option value="18">Belize</option>
                                                    <option value="19">Benin</option>
                                                    <option value="20">Bhutan</option>
                                                    <option value="21">Bolivia</option>
                                                    <option value="22">Bosnia & Herzegovina</option>
                                                    <option value="23">Botswana</option>
                                                    <option value="24">Brazil</option>
                                                    <option value="25">Brunei Darussalam</option>
                                                    <option value="26">Bulgaria</option>
                                                    <option value="27">Burkina Faso</option>
                                                    <option value="28">Burma (Myanmar)</option>
                                                    <option value="29">Burundi</option>
                                                    <option value="30">Cambodia</option>
                                                    <option value="31">Cameroon</option>
                                                    <option value="32">Canada</option>
                                                    <option value="33">Cape Verde</option>
                                                    <option value="34">Central African Republic</option>
                                                    <option value="35">Chad</option>
                                                    <option value="36">Chile</option>
                                                    <option value="37">China</option>
                                                    <option value="38">Colombia</option>
                                                    <option value="39">Comoros</option>
                                                    <option value="40">Congo</option>
                                                    <option value="41">Congo, Democratic Republic of the</option>
                                                    <option value="42">Costa Rica</option>
                                                    <option value="43">Côte d'Ivoire</option>
                                                    <option value="44">Croatia</option>
                                                    <option value="45">Cuba</option>
                                                    <option value="46">Cyprus</option>
                                                    <option value="47">Czech Republic</option>
                                                    <option value="48">Denmark</option>
                                                    <option value="49">Djibouti</option>
                                                    <option value="50">Dominica</option>
                                                    <option value="51">Dominican Republic</option>
                                                    <option value="52">Ecuador</option>
                                                    <option value="53">East Timor</option>
                                                    <option value="54">Egypt</option>
                                                    <option value="55">El Salvador</option>
                                                    <option value="56">Equatorial Guinea</option>
                                                    <option value="57">Eritrea</option>
                                                    <option value="58">Estonia</option>
                                                    <option value="59">Ethiopia</option>
                                                    <option value="60">Fiji</option>
                                                    <option value="61">Finland</option>
                                                    <option value="62">France</option>
                                                    <option value="63">Gaza</option>
                                                    <option value="64">Georgia</option>
                                                    <option value="65">Germany</option>
                                                    <option value="66">Ghana</option>
                                                    <option value="67">Greece</option>
                                                    <option value="68">Grenada</option>
                                                    <option value="69">Guatemala</option>
                                                    <option value="70">Guyana</option>
                                                    <option value="71">Haiti</option>
                                                    <option value="72">Honduras</option>
                                                    <option value="73">Hong Kong</option>
                                                    <option value="74">Hungary</option>
                                                    <option value="75">Iceland</option>
                                                    <option value="76">India</option>
                                                    <option value="77">Indonesia</option>
                                                    <option value="78">Iran</option>
                                                    <option value="79">Iraq</option>
                                                    <option value="80">Ireland</option>
                                                    <option value="81">Israel</option>
                                                    <option value="82">Italy</option>
                                                    <option value="83">Jamaica</option>
                                                    <option value="84">Japan</option>
                                                    <option value="85">Jordan</option>
                                                    <option value="86">Kazakhstan</option>
                                                    <option value="87">Kenya</option>
                                                    <option value="88">Kosovo</option>
                                                    <option value="89">Kuwait</option>
                                                    <option value="90">Kyrgyzstan</option>
                                                    <option value="91">Latvia</option>
                                                    <option value="92">Lebanon</option>
                                                    <option value="93">Lesotho</option>
                                                    <option value="94">Libya</option>
                                                    <option value="95">Liechtenstein</option>
                                                    <option value="96">Lithuania</option>
                                                    <option value="97">Macau</option>
                                                    <option value="98">Macedonia</option>
                                                    <option value="99">Madagascar</option>
                                                    <option value="100">Malaysia</option>
                                                    <option value="101">Maldives</option>
                                                    <option value="102">Malta</option>
                                                    <option value="103">Mauritius</option>
                                                    <option value="104">Mexico</option>
                                                    <option value="105">Moldova</option>
                                                    <option value="106">Monaco</option>
                                                    <option value="107">Mongolia</option>
                                                    <option value="108">Montenegro</option>
                                                    <option value="109">Morocco</option>
                                                    <option value="110">Mozambique</option>
                                                    <option value="111">Namibia</option>
                                                    <option value="112">Nepal</option>
                                                    <option value="113">New Zealand</option>
                                                    <option value="114">Nicaragua</option>
                                                    <option value="115">Nigeria</option>
                                                    <option value="116">North Korea</option>
                                                    <option value="117">Norway</option>
                                                    <option value="118">Oman</option>
                                                    <option value="119">Pakistan</option>
                                                    <option value="120">Panama</option>
                                                    <option value="121">Paraguay</option>
                                                    <option value="122">Peru</option>
                                                    <option value="123">Philippines</option>
                                                    <option value="124">Poland</option>
                                                    <option value="125">Portugal</option>
                                                    <option value="126">Puerto Rico</option>
                                                    <option value="127">Qatar</option>
                                                    <option value="128">Romania</option>
                                                    <option value="129">Russian Federation</option>
                                                    <option value="130">Rwanda</option>
                                                    <option value="131">San Marino</option>
                                                    <option value="132">Sao Tome and Principe</option>
                                                    <option value="133">Saudi Arabia</option>
                                                    <option value="134">Serbia</option>
                                                    <option value="135">Seychelles</option>
                                                    <option value="136">Singapore</option>
                                                    <option value="137">Slovakia</option>
                                                    <option value="138">Slovenia</option>
                                                    <option value="139">South Africa</option>
                                                    <option value="140">South Korea</option>
                                                    <option value="141">Spain</option>
                                                    <option value="142">Sri Lanka</option>
                                                    <option value="143">Sudan</option>
                                                    <option value="144">Suriname</option>
                                                    <option value="145">Swaziland</option>
                                                    <option value="146">Sweden</option>
                                                    <option value="147">Switzerland</option>
                                                    <option value="148">Syria</option>
                                                    <option value="149">Taiwan</option>
                                                    <option value="150">Tajikistan</option>
                                                    <option value="151">Tanzania</option>
                                                    <option value="152">Thailand</option>
                                                    <option value="153">Trinidad and Tobago</option>
                                                    <option value="154">Tunisia</option>
                                                    <option value="155">Turkey</option>
                                                    <option value="156">Turkmenistan</option>
                                                    <option value="157">Turks and Caicos Islands</option>
                                                    <option value="158">Uganda</option>
                                                    <option value="159">Ukraine</option>
                                                    <option value="160">United Arab Emirates</option>
                                                    <option value="161">United Kingdom</option>
                                                    <option value="162">Uruguay</option>
                                                    <option value="163">USA</option>
                                                    <option value="164">Uzbekistan</option>
                                                    <option value="165">Vanuatu</option>
                                                    <option value="166">Venezuela</option>
                                                    <option value="167">Viet Nam</option>
                                                    <option value="168">Westbank</option>
                                                    <option value="169">Yemen</option>
                                                    <option value="170">Zimbabwe</option>
                                                </select>
                                    </form>
                            </div>
                            </div>
                            <button class="res" type="submit" value="Save">Save Country of Residence</button>
                        </div>
                    </div>
            </div>