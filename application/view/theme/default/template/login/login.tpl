<div id="abc" class="nyroModalCont" style="position: fixed; width: 720px; top: 50%; margin-top: -160px; left: 50%; margin-left: -360px; overflow: hidden;">
<div class="nyroModalLink">
<div id="fb-connect-popup">
<div class="title-blue"> <span>Đăng nhập</span> </div>
<div class="line mbm clear ">
<div data-role="message-holder"></div>
<div class="tab-container">
<div class="tab-inner-container">
<div class="tab-element">
    <input type="radio" id="tab-input-1" class="option-input option-input-login" name="tab-input" checked="checked">
    <label for="tab-input-1" class="option-label" data-authen="0">Login</label>
    <div class="tab-content">
        <div class="clearfix loginForm ui-singout-popup  left-box">
            <form class="acc-popup-form" id="popup-form-account-login" action="/ajax/account/login/" method="post">
                <div style="display:none">
                    <input type="hidden" value="8b6a690c9156b0914eb8971340b9cb163c0fc75b" name="YII_CSRF_TOKEN">
                </div>
                <fieldset class="ui-fieldset">
                    <input type="hidden" name="referer" value="/dong-ho-nam-day-thep-khong-gi-eyki-eov8568-bac-100539.html">
                    <input type="hidden" name="setRedirectUrl" id="popup-form-account-login-redirect-url" value="">
                    <div class="ui-formRow">
                        <label class="mts txtRight col1 required" for="LoginForm_email">Email <span class="required">*</span></label>
                        <div class="collection col2">
                            <input id="login-popup-email" class="ui-inputText" name="LoginForm[email]" type="text">
                            <br>
                            <span class="error-email s-error msg" data-required="Thông tin bắt buộc" data-length="Địa chỉ mail không đúng"></span> </div>
                    </div>
                    <div class="ui-formRow">
                        <label for="LoginForm_password" class="mts txtRight col1 required">Mật khẩu <span class="required">*</span></label>
                        <div class="collection col2 ui-text-align">
                            <input id="login-popup-pass" class="ui-inputPassword" name="LoginForm[password]" type="password">
                            <span class="error-password s-error msg" data-required="Thông tin bắt buộc"></span> <a class="ui-inlineBlock" href="/customer/account/forgotpassword/">Quên mật khẩu?</a> </div>
                    </div>
                    <div class="ui-formRow ui-submmit-field">
                        <div class="col1">&nbsp;</div>
                        <div class="col2">
                            <div class="button-disabler"></div>
                            <button type="submit" class="ui-button acc-popup-button-submit ui-buttonCta popup-login-but"><span>Đăng nhập</span></button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="right-box">
            <div class="social-header">Đăng nhập bằng</div>
            <div class="unit or-divider">
                <div class="inner">
                    <div class="loginReg__or">Or</div>
                </div>
            </div>
            <div class="unit social-column">
                <div class="social-inner">
                    <div class="fb-wrapper ui-no-google"> <a id="facebook-login-button" href="javascript:;" class="fb-auth inner" onclick="loginByFacebookAccount(this, '/customer/account/loginFacebook?referer=%2Fdong-ho-nam-day-thep-khong-gi-eyki-eov8568-bac-100539.html'); return false;"> <i class="icon icon-fb-social icon-fb-small-social"></i> <span>Facebook</span> </a> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tab-element">
<input type="radio" id="tab-input-2" class="option-input option-input-logout" name="tab-input">
<label for="tab-input-2" class="option-label" data-authen="1">Sign up</label>
<div class="tab-content">
<div class="left-box ">
<p class="ui-required-text">* <span>Thông tin bắt buộc</span></p>
<form class="acc-popup-form" id="popup-form-account-create" action="/ajax/account/login/" method="post">
<div style="display:none">
    <input type="hidden" value="8b6a690c9156b0914eb8971340b9cb163c0fc75b" name="YII_CSRF_TOKEN">
</div>
<fieldset class="ui-fieldset">
<div>
<input type="hidden" name="referer" value="/dong-ho-nam-day-thep-khong-gi-eyki-eov8568-bac-100539.html">
<input type="hidden" name="setRedirectUrl" id="popup-form-account-signup-redirect-url" value="">
<div class="ui-formRow">
    <div class="col1 txtRight">
        <label class="mts required" for="RegistrationForm_first_name">Họ tên <span class="required">*</span></label>
    </div>
    <div class="col2">
        <div class="collection ui-validate-required">
            <input autocapitalize="on" autocorrect="on" data-type="name" class="ui-inputText" name="RegistrationForm[first_name]" id="RegistrationForm_first_name" type="text" maxlength="50">
            <span class="error-name s-error msg" data-required="Thông tin bắt buộc" data-length="Name is too short (minimum is 2 characters)." data-special="Name should not contain special characters or number."></span> </div>
    </div>
</div>
<div class="ui-formRow">
    <div class="col1 txtRight">
        <label class="mts required" for="RegistrationForm_email">Email <span class="required">*</span></label>
    </div>
    <div class="col2">
        <div class="collection ui-validate-required">
            <input autocomplete="on" data-type="email" class="ui-inputText" name="RegistrationForm[email]" id="RegistrationForm_email" type="text" maxlength="60">
            <span class="error-email s-error msg" data-required="Thông tin bắt buộc" data-length="Mail không hợp lệ"></span> </div>
    </div>
</div>
<div class="ui-formRow">
    <div class="col1 txtRight">
        <label class="mts required" for="RegistrationForm_password">Mật khẩu <span class="required">*</span></label>
    </div>
    <div class="col2">
        <div class="collection ui-validate-required">
            <input class="ui-password-original ui-inputPassword" data-type="pass" name="RegistrationForm[password]" id="RegistrationForm_password" type="password" maxlength="50">
            <span class="error-password s-error msg" data-hasaz="Mật khẩu phải có ít nhất 01 chữ số (hoặc kí tự chữ)" data-hasnumber="Mật khẩu phải có ít nhất 1 chữ số" data-match="Mật khẩu không trùng khớp" data-length="Password is too short (minimum is 6 characters)."></span> </div>
    </div>
    <div class="msg-minimum"> Ít nhất 6 ký tự gồm chữ cái và số </div>
</div>
<div class="ui-formRow">
    <div class="col1 txtRight">
        <label class="mts in-password2 required" for="RegistrationForm_password2">Nhập lại mật khẩu <span class="required">*</span></label>
    </div>
    <div class="col2">
        <div class="collection ui-validate-required">
            <input class="ui-password-confirm ui-inputPassword" data-type="cpass" name="RegistrationForm[password2]" id="RegistrationForm_password2" type="password" maxlength="50">
            <span class="error-password s-error msg" data-hasaz="Mật khẩu phải có ít nhất 01 chữ số (hoặc kí tự chữ)" data-hasnumber="Mật khẩu phải có ít nhất 1 chữ số" data-match="Mật khẩu không trùng khớp" data-length="Retype password is too short (minimum is 6 characters)."></span> </div>
    </div>
</div>
<div class="ui-formRow">
    <div class="col1 txtRight">
        <label class="mts" for="RegistrationForm_birthday">Ngày tháng năm sinh</label>
    </div>
    <div class="col2 1-row">
        <div class="collection">
            <select class="input-text accountCreateBirthYear" name="RegistrationForm[year]" id="RegistrationForm_year">
                <option value="" selected="selected">-</option>
                <option value="1900">1900</option>
                <option value="1901">1901</option>
                <option value="1902">1902</option>
                <option value="1903">1903</option>
                <option value="1904">1904</option>
                <option value="1905">1905</option>
                <option value="1906">1906</option>
                <option value="1907">1907</option>
                <option value="1908">1908</option>
                <option value="1909">1909</option>
                <option value="1910">1910</option>
                <option value="1911">1911</option>
                <option value="1912">1912</option>
                <option value="1913">1913</option>
                <option value="1914">1914</option>
                <option value="1915">1915</option>
                <option value="1916">1916</option>
                <option value="1917">1917</option>
                <option value="1918">1918</option>
                <option value="1919">1919</option>
                <option value="1920">1920</option>
                <option value="1921">1921</option>
                <option value="1922">1922</option>
                <option value="1923">1923</option>
                <option value="1924">1924</option>
                <option value="1925">1925</option>
                <option value="1926">1926</option>
                <option value="1927">1927</option>
                <option value="1928">1928</option>
                <option value="1929">1929</option>
                <option value="1930">1930</option>
                <option value="1931">1931</option>
                <option value="1932">1932</option>
                <option value="1933">1933</option>
                <option value="1934">1934</option>
                <option value="1935">1935</option>
                <option value="1936">1936</option>
                <option value="1937">1937</option>
                <option value="1938">1938</option>
                <option value="1939">1939</option>
                <option value="1940">1940</option>
                <option value="1941">1941</option>
                <option value="1942">1942</option>
                <option value="1943">1943</option>
                <option value="1944">1944</option>
                <option value="1945">1945</option>
                <option value="1946">1946</option>
                <option value="1947">1947</option>
                <option value="1948">1948</option>
                <option value="1949">1949</option>
                <option value="1950">1950</option>
                <option value="1951">1951</option>
                <option value="1952">1952</option>
                <option value="1953">1953</option>
                <option value="1954">1954</option>
                <option value="1955">1955</option>
                <option value="1956">1956</option>
                <option value="1957">1957</option>
                <option value="1958">1958</option>
                <option value="1959">1959</option>
                <option value="1960">1960</option>
                <option value="1961">1961</option>
                <option value="1962">1962</option>
                <option value="1963">1963</option>
                <option value="1964">1964</option>
                <option value="1965">1965</option>
                <option value="1966">1966</option>
                <option value="1967">1967</option>
                <option value="1968">1968</option>
                <option value="1969">1969</option>
                <option value="1970">1970</option>
                <option value="1971">1971</option>
                <option value="1972">1972</option>
                <option value="1973">1973</option>
                <option value="1974">1974</option>
                <option value="1975">1975</option>
                <option value="1976">1976</option>
                <option value="1977">1977</option>
                <option value="1978">1978</option>
                <option value="1979">1979</option>
                <option value="1980">1980</option>
                <option value="1981">1981</option>
                <option value="1982">1982</option>
                <option value="1983">1983</option>
                <option value="1984">1984</option>
                <option value="1985">1985</option>
                <option value="1986">1986</option>
                <option value="1987">1987</option>
                <option value="1988">1988</option>
                <option value="1989">1989</option>
                <option value="1990">1990</option>
                <option value="1991">1991</option>
                <option value="1992">1992</option>
                <option value="1993">1993</option>
                <option value="1994">1994</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
            </select>
            <select class="input-text accountCreateBirthMonth" name="RegistrationForm[month]" id="RegistrationForm_month">
                <option value="" selected="selected">-</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <select class="input-text accountCreateBirthDay ui-bg-gray" name="RegistrationForm[day]" id="RegistrationForm_day" disabled="">
                <option value="" selected="selected">-</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
            <span class="error-birthday s-error msg">Wrong birthday format.</span> </div>
        <div class="l-row txtGray fsxs mts hide"> <span class="l-cell accountCreateLabelBirthYear ui-inlineBlock">
                                <label for="RegistrationForm_year">Năm</label>
                                </span> <span class="l-cell accountCreateLabelBirthMonth ui-inlineBlock">
                                <label for="RegistrationForm_month">Tháng</label>
                                </span> <span class="l-cell accountCreateLabelBirthDay ui-inlineBlock">
                                <label for="RegistrationForm_day">Ngày</label>
                                </span> </div>
    </div>
</div>
<div class="ui-formRow">
    <div class="col1 txtRight">
        <label class="mts" for="RegistrationForm_gender">Giới tính</label>
    </div>
    <div class="col2">
        <div class="collection">
            <select class="input-text" name="RegistrationForm[gender]" id="RegistrationForm_gender">
                <option value="" selected="selected">Lựa chọn</option>
                <option value="male">Nam</option>
                <option value="female">Nữ</option>
            </select>
        </div>
    </div>
</div>
<div class="ui-formRow ui-submmit-field">
    <div class="col1">&nbsp;</div>
    <div class="col2">
        <div class="ui-policy"> Tôi đã đọc và đồng ý với <a href="/privacy-policy/" target="_blank">điều khoản sử dụng</a> của Lazada </div>
        <button class="ui-button ui-buttonCta acc-popup-button-submit sel-new-account-submit-button" type="submit" id="send"><span>Gửi</span></button>
    </div>
</div>
<div class="ui-formRow">
    <div class="col1">&nbsp;</div>
    <div class="col2">
        <div class="collection">
            <input id="ytRegistrationForm_is_newsletter_subscribed" type="hidden" value="0" name="RegistrationForm[is_newsletter_subscribed]">
            <input class="ui-input-newletter" checked="checked" name="RegistrationForm[is_newsletter_subscribed]" id="RegistrationForm_is_newsletter_subscribed" value="1" type="checkbox">
            <label class="ui-label-newletter" for="RegistrationForm_newsletter">Nhận các thông tin khuyến mãi qua e-mail</label>
            <span>*</span> </div>
    </div>
</div>
</div>
</fieldset>
</form>
</div>
<div class="right-box up">
    <div class="social-header">Sign up with</div>
    <div class="unit or-divider">
        <div class="inner">
            <div class="loginReg__or">Or</div>
        </div>
    </div>
    <div class="unit social-column">
        <div class="social-inner">
            <div class="fb-wrapper ui-no-google">
                <a href="<?php echo $linkLoginFacebook?>" class="inner fb-auth"
                   <i class="icon icon-fb-social icon-fb-small-social"></i> <span>Facebook</span>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
    function loginViaFacebook(){
    }
</script>