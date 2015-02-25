            <div class="listings-content">
                <div class="site-listings-content">
                    <div class="side-listings-wrapper">
                        <div class="side-listings">
                            <ul>
                                <?php
                                    if ($_GET["page"] == "edit-profile") {
                                        echo '<li><a class="aktif" href="index.php?p=profile&page=edit-profile">Edit Profile</a></li>';
                                    }else{
                                        if ($_GET["p"] == "edit-profile") {
                                            echo '<li><a class="aktif" href="index.php?p=profile&page=edit-profile">Edit Profile</a></li>';
                                        }else{
                                            echo '<li><a href="index.php?p=profile&page=edit-profile">Edit Profile</a></li>';
                                        }
                                    }

                                    if ($_GET["page"] == "trust-and-verification") {
                                        echo '<li><a class="aktif" href="index.php?p=profile&page=trust-and-verification">Trust and Verification</a></li>';
                                    }else{
                                        if ($_GET["p"] == "trust-and-verification") {
                                            echo '<li><a class="aktif" href="index.php?p=profile&page=trust-and-verification">Trust and Verification</a></li>';
                                        }else{
                                            echo '<li><a href="index.php?p=profile&page=trust-and-verification">Trust and Verification</a></li>';
                                        }
                                    }
                                ?>
                                <br></br>
                                <a class="view-prof" href="">View Profile</a>
                            </ul>
                        </div>
                    </div>
                    <div class="listings-wrapper">
                        <div class="header-listings-wrapper">
                                <p>Profile Photo</p>
                        </div>
                        <div class="content-listings-wrapper">
                            <div class="content-listings">
                                <div class="pp"></div>
                                <div class="side-pp">
                                    <p>Clear frontal face photos are an important way for hosts and guests<br> to 
                                        learn about each other. It's not much fun to host a landscape!<br> Please 
                                        upload a photo that clearly shows your face.</p>
                                    <button class="webcam">Take a photo</button>
                                    <button class="upload-image">Upload an image</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="listings-wrapper">
                        <div class="header-listings-wrapper">
                                <p>Required</p>
                        </div>
                        <div class="content-listings-wrapper">
                            <div class="content-listings">
                                <form>
                                  First Name    <input class="name" type="text" name="usrname"><br>
                                  Last Name    <input class="name" type="text" name="usrname"><br>
                                        <label>I am</label><select class="gender" name="gen">
                                                    <option value="select">Gender</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                </select><br>
                                                
                                                <ul>
                                                        <li><label>Birth Date</label><select class="birthdate" name="birth">
                                                            <option value="select">January</option>
                                                            <option value="1">February</option>
                                                            <option value="2">March</option>
                                                            <option value="3">April</option>
                                                            <option value="4">May</option>
                                                            <option value="5">June</option>
                                                            <option value="6">July</option>
                                                            <option value="7">August</option>
                                                            <option value="8">September</option>
                                                            <option value="9">October</option>
                                                            <option value="10">November</option>
                                                            <option value="11">Desember</option>
                                                            </select>
                                                        </li>
                                                        <li><select class="hari" name="birth">
                                                            <option value="select">1</option>
                                                            <option value="1">2</option>
                                                            <option value="2">3</option>
                                                            <option value="3">4</option>
                                                            <option value="4">5</option>
                                                            <option value="5">6</option>
                                                            <option value="6">7</option>
                                                            <option value="7">8</option>
                                                            <option value="8">9</option>
                                                            <option value="9">10</option>
                                                            <option value="10">11</option>
                                                            <option value="11">12</option>
                                                            <option value="12">13</option>
                                                            <option value="13">14</option>
                                                            <option value="14">15</option>
                                                            <option value="15">16</option>
                                                            <option value="16">17</option>
                                                            <option value="17">18</option>
                                                            <option value="18">19</option>
                                                            <option value="19">20</option>
                                                            <option value="20">21</option>
                                                            <option value="21">22</option>
                                                            <option value="22">23</option>
                                                            <option value="23">24</option>
                                                            <option value="24">25</option>
                                                            <option value="25">26</option>
                                                            <option value="26">27</option>
                                                            <option value="27">28</option>
                                                            <option value="28">29</option>
                                                            <option value="29">30</option>
                                                            <option value="30">31</option>
                                                            </select>
                                                        </li>
                                                        <li><select class="tahun" name="birth">
                                                            <option value="select">1996</option>
                                                            <option value="1">1995</option>
                                                            <option value="2">1994</option>
                                                            <option value="3">1993</option>
                                                            <option value="4">1992</option>
                                                            <option value="5">1991</option>
                                                            <option value="6">1990</option>
                                                            <option value="7">1989</option>
                                                            <option value="8">1988</option>
                                                            <option value="9">1987</option>
                                                            <option value="10">1986</option>
                                                            <option value="11">1985</option>
                                                            <option value="12">1984</option>
                                                            <option value="13">1983</option>
                                                            <option value="14">1982</option>
                                                            <option value="15">1981</option>
                                                            <option value="16">1980</option>
                                                            <option value="17">1979</option>
                                                            <option value="18">1978</option>
                                                            <option value="19">1977</option>
                                                            <option value="20">1976</option>
                                                            <option value="21">1975</option>
                                                            <option value="22">1974</option>
                                                            <option value="23">1973</option>
                                                            <option value="24">1972</option>
                                                            <option value="25">1971</option>
                                                            <option value="26">1970</option>
                                                            <option value="27">1969</option>
                                                            <option value="28">1968</option>
                                                            <option value="29">1967</option>
                                                            <option value="30">1966</option>
                                                            <option value="30">1965</option>
                                                            <option value="30">1964</option>
                                                            <option value="30">1963</option>
                                                            <option value="30">1962</option>
                                                            <option value="30">1961</option>
                                                            <option value="30">1960</option>
                                                            <option value="30">1959</option>
                                                            <option value="30">1958</option>
                                                            <option value="30">1957</option>
                                                            <option value="30">1956</option>
                                                            <option value="30">1955</option>
                                                            <option value="30">1954</option>
                                                            <option value="30">1953</option>
                                                            <option value="30">1952</option>
                                                            <option value="30">1951</option>
                                                            <option value="30">1950</option>
                                                            <option value="30">1949</option>
                                                            <option value="30">1948</option>
                                                            <option value="30">1947</option>
                                                            <option value="30">1946</option>
                                                            <option value="30">1945</option>
                                                            <option value="30">1944</option>
                                                            <option value="30">1943</option>
                                                            <option value="30">1942</option>
                                                            <option value="30">1941</option>
                                                            <option value="30">1940</option>
                                                            <option value="30">1939</option>
                                                            <option value="30">1938</option>
                                                            <option value="30">1937</option>
                                                            <option value="30">1936</option>
                                                            <option value="30">1935</option>
                                                            <option value="30">1934</option>
                                                            <option value="30">1933</option>
                                                            <option value="30">1932</option>
                                                            <option value="30">1931</option>
                                                            <option value="30">1930</option>
                                                            <option value="30">1929</option>
                                                            <option value="30">1928</option>
                                                            <option value="30">1927</option>
                                                            <option value="30">1926</option>
                                                            <option value="30">1925</option>
                                                            <option value="30">1924</option>
                                                            <option value="30">1923</option>
                                                            <option value="30">1922</option>
                                                            <option value="30">1921</option>
                                                            <option value="30">1920</option>
                                                            <option value="30">1919</option>
                                                            <option value="30">1918</option>
                                                            <option value="30">1917</option>
                                                            <option value="30">1916</option>
                                                            <option value="30">1915</option>
                                                            <option value="30">1914</option>
                                                            <option value="30">1913</option>
                                                            <option value="30">1912</option>
                                                            <option value="30">1911</option>
                                                            <option value="30">1910</option>
                                                            </select>
                                                        </li>
                                                </ul>
                                    <br>
                                    Email Address <input class="email" type="email" name="usremail"><br>
                                                        <label class="phonu">Phone Number</label><div class="phone-number"><label>Choose a Country</label>
                                                        <select class="country" name="country">
                                                            <option value="select">January</option>
                                                            <option value="1">February</option>
                                                            <option value="2">March</option>
                                                            <option value="3">April</option>
                                                            <option value="4">May</option>
                                                            <option value="5">June</option>
                                                            <option value="6">July</option>
                                                            <option value="7">August</option>
                                                            <option value="8">September</option>
                                                            <option value="9">October</option>
                                                            <option value="10">November</option>
                                                            <option value="11">Desember</option>
                                                            </select><br><label class="phonadd">Add a phone number</label><br><br>
                                                            <span>+62</span>
                                                            <input class="code-country" type="text" name="prc" placeholder="" required="" tabindex="1">
                                                            <br><br>
                                                            <a class="bton" href="#">Verify via SMS</a>
                                                            <a class="bton" href="#">Verify via Call</a>
                                                        </div>
                                                        Where You Live    <input class="name" type="text" name="usrname"><br>
                                                            <br>
                                                        <label class="labself">Describe Yourself</label><textarea class="self" name="message" placeholder="" rows="3" cols="41"></textarea><br>
                                                        <p>Hosteeland is built on relationships. Help other people get to know you.<br><br>

                                                        Tell them about the things you like: Tell them about your life motto. <br>Share your favorite travel destinations, books, movies, shows, music, food.

                                                        <br><br>Tell them all about you.</p><br>
                                  <button class="subprof" type="submit" value="Save">Save</button>
                                </form>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>